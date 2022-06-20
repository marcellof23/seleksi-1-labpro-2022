#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;


class ProblemSpec : public BaseProblemSpec {
protected:
    const int QMAX = 2*1e5;
    const int NMAX = 2*1e5;
    const int ARMAX = 2*1e5;
    const int XMAX = 1e5;
    
    int N, Q;
    vector<int> AR;
    vector<int> opsType;
    vector<vector<int>> opsData;
    vector<string> ans;

    void InputFormat() {
        LINE(N, Q);
        LINE(AR);
        LINES(opsType, opsData) % SIZE(Q);
    }

    int cntOps1() {
        int cnt = 0;
        for(auto x: opsType) {
            if(x == 1) cnt++;
        }

        return cnt;
    }

    void OutputFormat() {
        LINES(ans);
    }

    void GradingConfig() {
        TimeLimit(1);
        MemoryLimit(256);
    }

    void Constraints() {
        CONS(N >= 1 && N <= NMAX);
        CONS(Q >= 1 && Q <= QMAX);
        CONS(isValidAR());
        CONS(isValidOpsType());
        CONS(isValidOps1());
        CONS(isValidOps2());
    }

private:
    bool isValidAR() {
        for(auto x: AR) {
            if(x < 1 || x > ARMAX) {
                return false;
            }
        }
        return true;
    }

    bool isValidOpsType() {
        for(auto x: opsType) {
            if(x != 1 && x != 2) {
                return false;
            }
        }

        return true;
    }


    bool isValidOps1() {
        for(int i=0;i<opsType.size();i++) {
            if(opsType[i] != 1) continue;
            bool isKInvalid = opsData[i][0] < 1 || opsData[i][0] > NMAX;

            if(isKInvalid) return false;
        }   

        return true;
    }

    bool isValidOps2() {
        for(int i=0;i<opsType.size();i++) {
            if(opsType[i] != 2) continue;

            bool isAOutRange = opsData[i][0] < 1 || opsData[i][0] > NMAX;
            bool isBOutRange = opsData[i][1] < 1 || opsData[i][1] > NMAX;
            bool isAGreaterB = opsData[i][0] > opsData[i][1];
            bool isXInvalid = opsData[i][2] < 1 || opsData[i][2] > XMAX;


            if(isAOutRange || isBOutRange || isAGreaterB || isXInvalid) {
                return false;
            }
        }

        return true;
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "8 3",
            "3 2 4 5 1 1 5 3",
            "1 4",
            "2 2 5 1",
            "1 3"
        });
        Output({
            "5",
            "6"
        });
    }

    void BeforeTestCase() {
        AR.clear();
        opsType.clear();
        opsData.clear();
        ans.clear();
    }

    void TestCases() {
        CASE(N = NMAX, Q = QMAX, genMaxRangeLenOps2Case(N, Q, AR, opsType, opsData));
        CASE(N = NMAX, Q = QMAX, genMaxRangeLenOps1Case(N, Q, AR, opsType, opsData));
        for(int i=0;i<18;i++) {
            CASE(N = rnd.nextInt(1, NMAX), Q = rnd.nextInt(1, QMAX), 
                genRandomCase(N, Q, AR, opsType, opsData));
        }
    }

private:
    void genMaxRangeLenOps1Case(int N, int Q, vector<int> &AR, vector<int> &opsType, vector<vector<int>> &opsData) {
        for(int i=0;i<N;i++) {
            AR.push_back(rnd.nextInt(1, ARMAX));
        }
        int nFirstOps = Q-1;
        int nSecondOps = 1;

        for(int i=0;i<nSecondOps;i++) {
            opsType.push_back(2);
            int rA = 1;
            int rB = N;
            int rX = rnd.nextInt(1, XMAX);
            opsData.push_back({rA, rB, rX});
        }
        for(int i=0;i<nFirstOps;i++) {
            opsType.push_back(1);
            int rK = N;
            opsData.push_back({rK});
        }
    }

    void genMaxRangeLenOps2Case(int N, int Q, vector<int> &AR, vector<int> &opsType, vector<vector<int>> &opsData) {
        for(int i=0;i<N;i++) {
            AR.push_back(rnd.nextInt(1, ARMAX));
        }
        int nFirstOps = 1;
        int nSecondOps = Q-1;

        for(int i=0;i<nSecondOps;i++) {
            opsType.push_back(2);
            int rA = 1;
            int rB = N;
            int rX = rnd.nextInt(1, XMAX);
            opsData.push_back({rA, rB, rX});
        }
        for(int i=0;i<nFirstOps;i++) {
            opsType.push_back(1);
            int rK = rnd.nextInt(1, N);
            opsData.push_back({rK});
        }
    }

    void genRandomCase(int N, int Q, vector<int> &AR, vector<int> &opsType, vector<vector<int>> &opsData) {
        for(int i=0;i<N;i++) {
            AR.push_back(rnd.nextInt(1, ARMAX));
        }
        int nFirstOps = rnd.nextInt(1, Q);
        int nSecondOps = Q-nFirstOps;

        for(int i=0;i<Q;i++) {
            int randOps = rnd.nextInt(1, 2);
            if(randOps == 1 && nFirstOps == 0) randOps = 2;
            if(randOps == 2 && nSecondOps == 0) randOps = 1;

            if(randOps == 1 && nFirstOps != 0) {
                opsType.push_back(1);
                int rK = rnd.nextInt(1, N);
                opsData.push_back({rK});
                nFirstOps--;
            } else {
                opsType.push_back(2);
                int rA = rnd.nextInt(1, N);
                int rB = rnd.nextInt(rA, N);
                int rX = rnd.nextInt(1, XMAX);
                opsData.push_back({rA, rB, rX});
                nSecondOps--;
            }
        }
    }
};