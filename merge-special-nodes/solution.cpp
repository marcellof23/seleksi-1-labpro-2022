#include <bits/stdc++.h>

using namespace std;


/*
 * Complete the 'mergeNodes' function below.
 *
 * The function is expected to return a integer.
 * The function accepts array of numbers that specified in question as parameter.
 */

int mergeNodes(vector<int> arr) {
    int n = arr.size();
    for ( int i = 1; i < n; i++){
    	for (int j = 0; j<n-i; j++){
             arr[j] = (arr[j] + arr[j+1] ) %10;
	}
    }
    return arr[0];
}

int main()
{
    ios::sync_with_stdio(0);
    cin.tie(0);
    cout.tie(0);
    int N;
    cin >> N;
    vector<int> array(N);
    for (int t_itr = 0; t_itr < N; t_itr++) {
        cin >> array[t_itr];
    }
    cout << mergeNodes(array) << "\n";

    return 0;
}
