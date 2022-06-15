#include<iostream>
using namespace std;

long long xr(long long n) {
    long long ans[] = {n, 1, n+1, 0};
    return ans[n%4];
}

long long sol(long long l, long long r) {
    return xr(r)^xr(l-1);
}

int main() {
    ios_base::sync_with_stdio(0); cin.tie(0);
    int q; cin >> q;
    while(q--) {
        long long l, r; cin >> l >> r;
        cout << sol(l, r) << "\n";
    }

    return 0;
}