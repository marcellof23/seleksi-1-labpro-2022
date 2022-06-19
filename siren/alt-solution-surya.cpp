#include<iostream>
#include<string>

using namespace std;

int main() {
    string s; cin >> s;
    int cnt0 = 0, cnt1 = 0;
    char curr0 = '0', curr1 = '1';
    for(int i=0;i<s.size();i++) {
        if(s[i] != curr0)  cnt0++;
        if(s[i] != curr1)  cnt1++;

        curr0 = (curr0 == '0') ? '1' : '0';
        curr1 = (curr1 == '0') ? '1' : '0';
    }
    cout << min(cnt0, cnt1) << "\n";
    return 0;
}