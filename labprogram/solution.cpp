#include <bits/stdc++.h>
using namespace std;

map<char, int> alfabet;

bool hasLabprogram() {
  return alfabet['L'] >= 1
    && alfabet['A'] >= 2
    && alfabet['B'] >= 1
    && alfabet['P'] >= 1
    && alfabet['R'] >= 2
    && alfabet['O'] >= 1
    && alfabet['G'] >= 1
    && alfabet['M'] >= 1;
}

void removeLabprogram() {
  alfabet['L'] -= 1;
  alfabet['A'] -= 2;
  alfabet['B'] -= 1;
  alfabet['P'] -= 1;
  alfabet['R'] -= 2;
  alfabet['O'] -= 1;
  alfabet['G'] -= 1;
  alfabet['M'] -= 1;
}

int main() {
  ios_base::sync_with_stdio(false);
  cin.tie(NULL);
  cout.tie(NULL);
  
  string S;
  int out = 0;

  cin >> S;

  for (int i = 0; i < S.length(); i++) {
    alfabet[S[i]] += 1;
  }

  while (hasLabprogram()) {
    out++;
    removeLabprogram();
  }
  
  cout << out << "\n";
}
