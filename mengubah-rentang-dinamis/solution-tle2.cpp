#include<bits/stdc++.h>
using namespace std;

const int maxp = 2e6+3;
bool not_prime[maxp];
vector<long long> primes;

void prec() {
	memset(not_prime, false, sizeof not_prime);
	not_prime[1] = true;
	for (int i=2; i<maxp; i++) {
		if (not_prime[i]) continue;
		primes.push_back(i);
		for (int j=i+i; j<maxp; j+=i) not_prime[j] = true;
	}
}

const int maxn = 2*1e5+3;
int n, q;
long long a[maxn];

int main(){
	ios_base::sync_with_stdio(0); cin.tie(0);
	prec();
	cin >> n >> q;
	memset(a, 0, sizeof a);
	for (int i=1; i<=n; i++) {
		long long aa;
		cin >> aa;
		a[i] += aa;
		a[i+1] -= aa;
	}
	while (q--) {
		char type;
		cin >> type;
		if (type == '1') {
			int k;
			cin >> k;
			long long ans = 0;
			for (int i=1; i<=k; i++) ans += a[i];
			cout << ans << '\n';
		}
		else {
			int l, r, x;
			cin >> l >> r >> x;
			a[l] += primes[x-1];
			a[r+1] -= primes[x-1];
		}
	}
	return 0;
}