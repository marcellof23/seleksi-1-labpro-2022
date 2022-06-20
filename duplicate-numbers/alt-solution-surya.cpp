#include<iostream>
using namespace std;

int main() {
    ios_base::sync_with_stdio(0); cin.tie(0);
    int n; cin >> n;
    int ans = 0;
    for(int i=1;i<=n+1;i++) {
        int tmp; cin >> tmp;
        ans ^= (i^tmp);
    }
    cout << (ans^(n+1)) << "\n";
    return 0;
}