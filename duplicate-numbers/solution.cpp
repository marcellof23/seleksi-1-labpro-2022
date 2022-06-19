#include <bits/stdc++.h>

using namespace std;


/*
 * Complete the 'dupNumbers' function below.
 *
 * The function is expected to return a integer.
 * The function accepts array of numbers that specified in question as parameter.
 */

int dupNumbers(vector<int> arr) {
    int tortoise = arr[arr[0]];
    int hare = arr[tortoise];

    while (tortoise != hare) {
    	hare = arr[arr[hare]];
	tortoise = arr[tortoise];
    }

    int ptr1 = arr[0];
    int ptr2 =  hare;
    while (ptr1 != ptr2) {
    	ptr1 = arr[ptr1];
	ptr2 = arr[ptr2];
    }

    return ptr1;
}

int main()
{

    ios::sync_with_stdio(0);
    cin.tie(0);
    cout.tie(0);
    int N;
    cin >> N;
    vector<int> array(N+1);
    for (int t_itr = 0; t_itr < N+1; t_itr++) {
        cin >> array[t_itr];
    }
    cout << dupNumbers(array) << "\n";


    return 0;
}
