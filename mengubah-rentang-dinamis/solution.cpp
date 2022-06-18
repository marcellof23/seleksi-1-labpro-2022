#include<iostream>
#include<vector>
using namespace std;
using ll = long long;

void sieve(vector<ll> &primes, ll n) {
    vector<bool> isPrime(n+1, true);
    isPrime[0] = isPrime[1] = false;
    for(ll i=2;i*i<=n;i++) {
        if(isPrime[i]) {
            for(ll j=i*i;j<=n;j+=i) {
                isPrime[j] = false;
            }
        }
    }
    for(ll i=2;i<=n;i++) if(isPrime[i]) primes.push_back(i);
}

template<class T> struct Seg {
	int n;
	T ID = 0;
	vector<T> seg;
	T comb (T a, T b) {return a + b;}
	void init (int _n) {n = _n; seg.assign(n * 2, ID);}
	void pull (int p) {
		seg[p] = comb(seg[p * 2], seg[p * 2 + 1]);
	}
	void upd (int i, T val) {
		seg[i+=n] += val;
		for (i /= 2; i; i /= 2) {
			pull(i);
		}
	}
	T query (int l, int r) {
		T ra = ID, rb = ID;
		for (l += n, r += n + 1; l < r; l /= 2, r /= 2) {
			if (l&1) ra = comb(ra, seg[l++]);
			if (r&1) rb = comb(rb, seg[--r]);
		}
		return comb(ra, rb);
	}
};

int main() {
    ios_base::sync_with_stdio(0); cin.tie(0);
    int n, q; 
    cin >> n >> q;
    Seg<ll> sgt;
    sgt.init(n + 1);
    vector<ll> ar(n+1);
    vector<ll> primes;
    sieve(primes, 1e7);
    ar[0] = 0;
    for(int i=1;i<=n;i++) {
        cin >> ar[i];
        sgt.upd(i, ar[i]-ar[i-1]);
    }

    while(q--) {
        int t;
        cin >> t;
        if(t == 2) {
            int a, b, x;
            cin >> a >> b >> x;
            ll xthPrime = primes[x-1];
            sgt.upd(a, xthPrime);
            sgt.upd(b+1, -xthPrime);
        } else {
            int k;
            cin >> k;
            cout << sgt.query(1, k) << "\n";
        }
    }

    return 0;
}