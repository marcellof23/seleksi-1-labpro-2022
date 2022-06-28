#include <bits/stdc++.h>

using namespace std;

string ltrim(const string &);
string rtrim(const string &);

/*
 * Complete the 'isBalanced' function below.
 *
 * The function is expected to return a integer.
 * The function accepts STRING s as parameter.
 */

int isBalanced(string s) {
    stack<char> st;
    for (auto c : s) {
        switch (c) {
            case '[':
            case '(':
            case '{':
                st.push(c);
                break;
            case '}':
                if (st.empty() or st.top() != '{') return 0;
                st.pop();
                break;
            case ']':
                if (st.empty() or st.top() != '[') return 0;
                st.pop();
                break;
            case ')':
                if (st.empty() or st.top() != '(') return 0;
                st.pop();
                break;
        }
    }
    return st.empty() ? 1 : 0;
}

int main()
{

    ios::sync_with_stdio(0);
    cin.tie(0);
    cout.tie(0);
    string t_temp;
    getline(cin, t_temp);

    int t = stoi(ltrim(rtrim(t_temp)));

    for (int t_itr = 0; t_itr < t; t_itr++) {
        string s;
        getline(cin, s);

        int result = isBalanced(s);

        cout << result << "\n";
    }


    return 0;
}

string ltrim(const string &str) {
    string s(str);

    s.erase(
        s.begin(),
        find_if(s.begin(), s.end(), not1(ptr_fun<int, int>(isspace)))
    );

    return s;
}

string rtrim(const string &str) {
    string s(str);

    s.erase(
        find_if(s.rbegin(), s.rend(), not1(ptr_fun<int, int>(isspace))).base(),
        s.end()
    );

    return s;
}
