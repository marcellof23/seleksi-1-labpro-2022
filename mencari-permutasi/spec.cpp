#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;


class ProblemSpec : public BaseProblemSpec {
protected:
    const int QMAX = 2e5;
    const int NMAX = 9;
    
    int Q;
    vector<int> N, M;
    vector<string> ans;

    void InputFormat() {
        LINE(Q);
        LINES(N, M) % SIZE(Q);
    }

    void OutputFormat() {
        LINES(ans) % SIZE(Q);
    }

    void GradingConfig() {
        TimeLimit(1);
        MemoryLimit(256);
    }

    void Constraints() {
        CONS(Q >=  1 && Q <= QMAX);
        CONS(isValidN());
        CONS(isValidM());
    }

private:
    bool isValidN() {
        for(auto x: N) {
            if(x < 1 || x > NMAX) return false;
        }

        return true;
    }

    int fact(int n) {
        int ans = 1;
        for(int i=1;i<=n;i++) ans *= i;

        return ans;
    }

    bool isValidM() {
        for(int i=0;i<Q;i++) {
            if(M[i] < 1 || M[i] > fact(N[i])) return false;
        }
        return true;
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "2",
            "2 2",
            "3 4"
        });
        Output({
            "21",
            "231"
        });
    }

    void BeforeTestCase() {
        N.clear();
        M.clear();
        ans.clear();
    }

    void TestCases() {
        CASE(Q = 9, genLowBoundCase(N, M));
        CASE(Q = 9, genUppBoundCase(N, M));
        for(int i=0;i<18;i++) {
            CASE(Q = rnd.nextInt(1, QMAX), genRandomCase(Q, N, M));
        }
    }

private:
    int fact(int n) {
        int ans = 1;
        for(int i=1;i<=n;i++) ans *= i;

        return ans;
    }

    void genLowBoundCase(vector<int> &N, vector<int> &M) {
        for(int i=1;i<=9;i++) {
            N.push_back(i);
            M.push_back(1);
        }
    }

    void genUppBoundCase(vector<int> &N, vector<int> &M) {
        for(int i=1;i<=9;i++) {
            N.push_back(i);
            M.push_back(fact(i));
        }
    }

    void genRandomCase(int Q, vector<int> &N, vector<int> &M) {
        for(int i=0;i<Q;i++) {
            int nRand = rnd.nextInt(1, 9);
            N.push_back(nRand);
            M.push_back(rnd.nextInt(1, fact(nRand)));
        }
    }
};