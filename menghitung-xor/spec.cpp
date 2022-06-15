#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;


class ProblemSpec : public BaseProblemSpec {
protected:
    const int QMAX = 2e5;
    const long long LRMAX = 1e18;
    
    int Q;
    vector<long long> L, R;
    vector<string> ans;

    void InputFormat() {
        LINE(Q);
        LINES(L, R) % SIZE(Q);
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
        CONS(L <= R);
        CONS(isValidRangeLR());
    }

private:
    bool isValidRangeLR() {
        for(int i=0;i<Q;i++) {
            bool isInvalidL = L[i] < 1 || L[i] > LRMAX;
            bool isInvalidR = R[i] < 1 || R[i] > LRMAX;

            if(isInvalidL || isInvalidR) return false;
        }

        return true;
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "2",
            "1 2",
            "7 10"
        });
        Output({
            "3",
            "12"
        });
    }

    void BeforeTestCase() {
        L.clear();
        R.clear();
        ans.clear();
    }

    void TestCases() {
        // Case 1: len 1
        for(int i=0;i<4;i++) {
            CASE(Q = 1, genLenRangeOneCase(LRMAX, L, R));
        }

        // Case 2: len max
        CASE(Q = 1, genLenRangeMaxCase(LRMAX, L, R));

        // Case 3: len in range int
        for(int i=0;i<5;i++) {
            // int ~ 10^9
            CASE(Q = 1, genLenRangeIntCase((long long)1e9, L, R));
        }

        // Case 4: len in range long long
        for(int i=0;i<5;i++) {
            // long long ~ 10^10 - 10^18
            CASE(Q = 1, genLenRangeLongLongCase(LRMAX, L, R));
        }

        // case 5: len in range random
        for(int i=0;i<5;i++) {
            CASE(Q = rnd.nextInt(1, QMAX), genLenRangeRandomCase(LRMAX, Q, L, R));
        }

    }

private:
    void genLenRangeOneCase(long long lrMax, vector<long long> &L, vector<long long> &R) {
        long long lRand = rnd.nextLongLong(1, lrMax);

        L.push_back(lRand);
        R.push_back(lRand);
    }

    void genLenRangeMaxCase(long long lrMax, vector<long long> &L, vector<long long> &R) {
        L.push_back(1LL);
        R.push_back(lrMax);
    }

    void genLenRangeIntCase(long long lrMax, vector<long long> &L, vector<long long> &R) {
        long long lRand = rnd.nextLongLong(1, lrMax);
        long long rRand = rnd.nextLongLong(lRand, lrMax);

        L.push_back(lRand);
        R.push_back(rRand);
    }

    void genLenRangeLongLongCase(long long lrMax, vector<long long> &L, vector<long long> &R) {
        long long lRand = rnd.nextLongLong((long long)1e10, lrMax);
        long long rRand = rnd.nextLongLong(lRand, lrMax);

        L.push_back(lRand);
        R.push_back(rRand);
    }

    void genLenRangeRandomCase(long long lrMax, int Q, vector<long long> &L, vector<long long> &R) {
        for(int i=0;i<Q;i++) {
            long long lRand = rnd.nextLongLong(1, lrMax);
            long long rRand = rnd.nextLongLong(lRand, lrMax);

            L.push_back(lRand);
            R.push_back(rRand);
        }
    }
};