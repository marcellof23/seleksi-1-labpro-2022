#include <bits/stdc++.h>
using namespace std;

int main() {
  ios_base::sync_with_stdio(false);
  cin.tie(NULL);
  cout.tie(NULL);
  
  vector<char> stack;
  string S;

  cin >> S;

  for (int i = 0; i < S.length(); i++) {
    if (S[i] == 'B') {
      if (!stack.empty()) {
        stack.pop_back();
      }
    } else {
      stack.push_back(S[i]);
    }
  }

  reverse(stack.begin(), stack.end());

  while (!stack.empty()) {
    cout << stack.back();
    stack.pop_back();
  }
  
  cout << "\n";
}
