#include <bits/stdc++.h>
using namespace std;

int getMaxFlip(char start, string coins) {
  int out = 0;
  for (int i = 0; i < coins.length(); i++) {
    char coin = coins[i];
    if (coin != start) out++;
    start = start == '1' ? '0' : '1';
  }
  return out;
}

int main() {
  ios_base::sync_with_stdio(false);
  cin.tie(NULL);
  cout.tie(NULL);
  
  string S;
  cin >> S;
  
  cout 
    <<  min(getMaxFlip('1', S), getMaxFlip('0', S))
    << "\n";
}
