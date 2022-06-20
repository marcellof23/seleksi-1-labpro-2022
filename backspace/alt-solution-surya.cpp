#include<iostream>
#include<string>
#include<vector>
using namespace std;

int main() {
    string s; cin >> s;
    vector<char> ans;
    for(int i=0;i<s.size();i++) {
        if(s[i] == 'B') {
            if(ans.size() != 0) ans.pop_back();
        } else {
            ans.push_back(s[i]);
        }
    }
    cout << string(ans.begin(), ans.end()) << "\n";
    return 0;
}