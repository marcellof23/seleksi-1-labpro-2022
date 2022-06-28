#include<iostream>
#include<stack>
using namespace std;

bool isBalanced(string s) {
    stack<char> ans;
        
    for(auto x: s) {
        if(x == '(' || x == '[' || x == '{') ans.push(x);
        if((x == ')' || x == ']' || x == '}')) {
            if(ans.empty()) return false;
            
            if(x == ')' && ans.top() != '(') return false;
            if(x == ']' && ans.top() != '[') return false;
            if(x == '}' && ans.top() != '{') return false;
            ans.pop();
        } 
        
    }
        
    return ans.empty();
}

int main() {
    int q; cin >> q;
    while(q--) {
        string s; cin >> s;
        cout << isBalanced(s) << "\n";
    }
}