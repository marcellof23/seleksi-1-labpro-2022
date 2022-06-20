#include<iostream>
#include<vector>
using namespace std;

int main() {
    int n;
    vector<vector<int>> cnt(51, vector<int>());
    cin >> n;
    for(int i=0;i<n;i++) {
        int tmp; cin >> tmp;
        cnt[tmp].push_back(i);
    }

    for(int i=1;i<=50;i++) {
        if(cnt[i].size() >= 3) {
            cout << "Y\n";
            return 0;
        }
        else {
            if(cnt[i].size() == 2) {
                if(cnt[i][1]-cnt[i][0] > 1) {
                    cout << "Y\n";
                    return 0;
                }
            } 
        }
    }
    cout << "N\n";
    return 0;
}