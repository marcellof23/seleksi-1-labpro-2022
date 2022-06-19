#include <tcframe/spec.hpp>
using namespace tcframe;

class ProblemSpec : public BaseProblemSpec {
protected:
    const int NMAX = 1e7;
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
        MemoryLimit(128);
    }

    void Constraints() {
        CONS(S.length() <= NMAX);
        CONS(CheckStringConstraint(S));
    }

private:
    bool IsBetweenAZ(char c) {
        return int(c) >= 65 && int(c) <= 90;
    }

    bool CheckStringConstraint(string S) {
        for (int i = 0; i < S.length(); i++) {
            if (!IsBetweenAZ(S[i])) return false;
        }
        return true;
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "AXRHLDAYJRMLITLDAEPWBRBUXYPEZOGRZGOZRAM"
        });
        Output({
            "2"
        });
    }

    void TestCases() {
        // random string up to NMAX / 2
        for (int i = 0; i < 10; i++) {
            CASE(S = generateRandomString(rnd.nextInt(0, NMAX / 2)));
        }
        // random string with more labprogram up to NMAX / 2
        for (int i = 0; i < 10; i++) {
            CASE(S = generateRandomStringWithMoreLabprogram(rnd.nextInt(0, NMAX / 2)));
        }
        // random string all NMAX
        for (int i = 0; i < 5; i++) {
            CASE(S = generateRandomString(NMAX));
        }
        // random string with more labprogram all NMAX
        for (int i = 0; i < 5; i++) {
            CASE(S = generateRandomStringWithMoreLabprogram(NMAX));
        }
    }
private:
    bool gachaBoolean() {
        // 70% true
        int chance[10] = {1,1,1,1,1,1,1,0,0,0};
        int randidx = rnd.nextInt(0, 9);
        return chance[randidx];
    }
    char gachaLabprogram() {
        char labprogram[8] = {'L', 'A', 'B', 'P', 'R', 'O', 'G', 'M'};
        return labprogram[rnd.nextInt(0, 7)];
    }
    string generateRandomStringWithMoreLabprogram(int N) {
        string S;
        S.resize(N);
        for (int i = 0; i < N; i++) {
            if (gachaBoolean()) {
                S[i] = gachaLabprogram();
            } else {
                S[i] = char(int('A') + rnd.nextInt(0, 25));
            }
        }
        return S;
    }
    string generateRandomString(int N) {
        string S;
        S.resize(N);
        for (int i = 0; i < N; i++) {
            S[i] = char(int('A') + rnd.nextInt(0, 25));
        }
        return S;
    }
};
