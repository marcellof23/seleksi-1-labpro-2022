//Bismillahir Rahmanir Rahim
#include<bits/stdc++.h>
#define ll long long
#define ull unsigned long long
using namespace std;
int main()
{
    int n,a[5001];

    cin>>n;
    for(int i=0; i<n; i++){
        cin>>a[i];
    }
    bool tag = false;
    for(int i=0; i<n; i++){
        for(int j=i+2; j<n; j++){
            if(a[i] == a[j]){
                tag = true;
                break;
            }
        }
        if(tag == true){
            break;
        }
    }
    if(tag ==  true){
        cout<<"Y\n";
    }
    else{
        cout<<"N\n";
    }

    return 0;
}
