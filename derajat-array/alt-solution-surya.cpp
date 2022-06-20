#include<iostream>
#include<vector>
using namespace std;

int main() {
    vector<vector<int>> cnt(51, vector<int>());
    int n; cin >> n;
    for(int i=0;i<n;i++) {
        int tmp; cin >> tmp;
        cnt[tmp].push_back(i);
    }
    int mxLen = 0, ans = 1e9;
    for(int i=1;i<=50;i++) {
        int currLen = cnt[i].size();

        if(currLen >= mxLen) {
            mxLen = currLen;
        }
    }
    for(int i=1;i<=50;i++) {
        int currLen = cnt[i].size();
        if(currLen == mxLen)
            ans = min(ans, cnt[i][currLen-1]-cnt[i][0]+1);
    }
    
    cout << ans << "\n";
    return 0;
}