#include<iostream>
#include<vector>
using namespace std;

void searchNeighbor(vector<pair<int, int>> &points, 
    vector<vector<int>> &pulau, vector<vector<bool>> &visited, int i, int j) {
    if(i < 0 || i >= pulau.size()) return;
    if(j < 0 || j >= pulau[0].size()) return;
    if(visited[i][j] || pulau[i][j] != 1) return;

    points.push_back({i, j});
    visited[i][j] = true;

    searchNeighbor(points, pulau, visited, i+1, j);
    searchNeighbor(points, pulau, visited, i-1, j);
    searchNeighbor(points, pulau, visited, i, j+1);
    searchNeighbor(points, pulau, visited, i, j-1);
}

int main() {
    int n; cin >> n;
    vector<vector<int>> pulau(n, vector<int>(n));
    vector<vector<bool>> visited(n, vector<bool>(n, false));

    for(int i=0;i<n;i++) {
        for(int j=0;j<n;j++) {
            cin >> pulau[i][j];
        }
    }

    vector<pair<int, int>> pulau1, pulau2;
    bool isPulau1Found = false;
    for(int i=0;i<n;i++) {
        for(int j=0;j<n;j++) {
            if(pulau[i][j] == 1 && !visited[i][j] && !isPulau1Found) {
                searchNeighbor(pulau1, pulau, visited, i, j);
                isPulau1Found = true;
            }
            else if(pulau[i][j] == 1 && !visited[i][j] && isPulau1Found) {
                searchNeighbor(pulau2, pulau, visited, i, j);
            }
        }
    }

    vector<int> xyMinMaxP1{(int)1e9, 0, (int)1e9, 0};
    vector<int> xyMinMaxP2{(int)1e9, 0, (int)1e9, 0};
    for(auto x: pulau1) {
        xyMinMaxP1[0] = min(xyMinMaxP1[0], x.first);
        xyMinMaxP1[1] = max(xyMinMaxP1[1], x.first);
        xyMinMaxP1[2] = min(xyMinMaxP1[2], x.second);
        xyMinMaxP1[3] = max(xyMinMaxP1[3], x.second);
    }
    for(auto x: pulau2) {
        xyMinMaxP2[0] = min(xyMinMaxP2[0], x.first);
        xyMinMaxP2[1] = max(xyMinMaxP2[1], x.first);
        xyMinMaxP2[2] = min(xyMinMaxP2[2], x.second);
        xyMinMaxP2[3] = max(xyMinMaxP2[3], x.second);
    }

    vector<pair<int, int>> edgePointP1, edgePointP2;
    for(auto x: pulau1) {
        if(x.first == xyMinMaxP1[0] || x.first == xyMinMaxP1[1]
         || x.second == xyMinMaxP1[2] || x.second == xyMinMaxP1[3]) {
            edgePointP1.push_back(x);
         }
    }
    for(auto x: pulau2) {
        if(x.first == xyMinMaxP2[0] || x.first == xyMinMaxP2[1]
         || x.second == xyMinMaxP2[2] || x.second == xyMinMaxP2[3]) {
            edgePointP2.push_back(x);
         }
    }

    int ans = 1e9;
    for(int i=0;i<edgePointP1.size();i++) {
        for(int j=0;j<pulau2.size();j++) {
            ans = min(ans, abs(edgePointP1[i].first-pulau2[j].first) 
                + abs(edgePointP1[i].second-pulau2[j].second));
        }
    }
    for(int i=0;i<edgePointP2.size();i++) {
        for(int j=0;j<pulau1.size();j++) {
            ans = min(ans, abs(edgePointP2[i].first-pulau1[j].first) 
                + abs(edgePointP2[i].second-pulau1[j].second));
        }
    }
    cout << ans-1 << "\n";
    return 0;
}