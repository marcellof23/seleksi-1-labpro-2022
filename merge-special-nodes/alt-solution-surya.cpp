#include<iostream>
#include<vector>
using namespace std;

const int MAXN = 1e3;
const int MOD = 10;

int main() {
    vector<vector<int>> C(MAXN+1, vector<int>(MAXN+1, 0));

    C[0][0] = 1;
    for(int i=1;i<=MAXN;i++) {
        C[i][0] = C[i][i] = 1;
        for(int j=1;j<i;j++) {
            C[i][j] = (C[i-1][j]%MOD + C[i-1][j-1]%MOD)%MOD;
        }
    }

    int n; cin >> n;
    int ans = 0;
    for(int i=0;i<n;i++) {
        int tmp; cin >> tmp;
        ans = (ans%MOD+(C[n-1][i]*tmp)%MOD)%MOD;
    }

    cout << ans << "\n";

    return 0;
}