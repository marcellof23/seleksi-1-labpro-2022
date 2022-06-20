#include<iostream>
#include<string>
#include<vector>
using namespace std;

int main() {
    vector<int> cnt(26, 0);
    vector<char> target{'L', 'A', 'B', 'P', 'R', 'O', 'G', 'M'};
    string s; cin >> s;
    for(auto x: s) {
        cnt[x-'A']++;
    }

    int ans = 1e9;
    for(auto c: target) {
        if(c == 'A' || c == 'R') {
            ans = min(ans, (int)cnt[c-'A']/2);
        } else {
            ans = min(ans, cnt[c-'A']);
        }
    }

    cout << ans << "\n";
    return 0;
}