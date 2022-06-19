#include <tcframe/spec.hpp>
using namespace tcframe;

class ProblemSpec : public BaseProblemSpec {
protected:
    const int NMAX = 1e5;
    string S;
    int out;

    void InputFormat() {
        LINE(S);
    }

    void OutputFormat() {
        LINE(out);
    }

    void GradingConfig() {
        TimeLimit(1);
        MemoryLimit(64);
    }

    void Constraints() {
        CONS(S.length() <= NMAX);
        CONS(CheckStringConstraint(S));
    }

private:
    bool CheckStringConstraint(string S) {
        for (int i = 0; i < S.length(); i++) {
            if (S[i] != '0' && S[i] != '1') return false;
        }
        return true;
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "111000"
        });
        Output({
            "2"
        });
    }

    void SampleTestCase2() {
        Input({
            "000111"
        });
        Output({
            "2"
        });
    }

    void SampleTestCase3() {
        Input({
            "11010101101010111010101"
        });
        Output({
            "8"
        });
    }

    void TestCases() {
        // all zero
        CASE(S = generateAllZeroString(NMAX));
        // all one
        CASE(S = generateAllOneString(NMAX));
        // random stream up to NMAX
        for (int i = 0; i < 15; i++) {
            CASE(S = generateRandomBitStreamString(rnd.nextInt(0, NMAX)));
        }
        // random stream all NMAX
        for (int i = 0; i < 15; i++) {
            CASE(S = generateRandomBitStreamString(NMAX));
        }
    }
private:
    string generateAllZeroString(int N) {
        string S;
        S.resize(N);
        for (int i = 0; i < N; i++) {
            S[i] = '0';
        }
        return S;
    }
    string generateAllOneString(int N) {
        string S;
        S.resize(N);
        for (int i = 0; i < N; i++) {
            S[i] = '1';
        }
        return S;
    }
    string generateRandomBitStreamString(int N) {
        string S;
        S.resize(N);
        char bit[2] = {'0', '1'};
        for (int i = 0; i < N; i++) {
            S[i] = bit[rnd.nextInt(0, 1)];
        }
        return S;
    }
};
