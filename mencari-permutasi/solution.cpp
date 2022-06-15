#include<iostream>
#include<vector>
using namespace std;

vector<bool> visited(10, false);
vector<char> perm;
vector<string> perms;
int len;

void generatePermutation() {
    if(perm.size() != len) {
        for(int i=1;i<=len;i++) {
            if(visited[i]) continue;
            visited[i] = true;
            perm.push_back((char)((int)'0' + i));
            generatePermutation();
            perm.pop_back();
            visited[i] = false;
        }
    } else {
        string tmp(perm.begin(), perm.end());
        perms.push_back(tmp);
    }
}

int main() {
    ios_base::sync_with_stdio(0);
    cin.tie(0);

    vector<vector<string>> ans;
    
    for(int i=1;i<=9;i++) {
    	len = i;
    	generatePermutation();
    	ans.push_back(perms);
    	perms.clear();
    	perm.clear();
    }
    
    // q ~ 10^6
    int q; cin >> q;
    while(q--) {
    	int n, m; cin >> n >> m;
    	cout << ans[n-1][m-1] << "\n";
    }

    return 0;
}