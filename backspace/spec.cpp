#include <tcframe/spec.hpp>
using namespace tcframe;

class ProblemSpec : public BaseProblemSpec {
protected:
    const int NMAX = 1e7;
    string S;
    string out;

    void InputFormat() {
        RAW_LINE(S);
    }

    void OutputFormat() {
        RAW_LINE(out);
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
            "SAFDSBFSDBBBHBHHBBJFSKJBKJBKFDSJFBFF"
        });
        Output({
            "SAFDJFSKKKFDSJFF"
        });
    }

    void TestCases() {
        // empty string
        CASE(S = generateRandomString(0));
        // all backspace
        CASE(S = generateAllBackspace(NMAX));
        // random string up to NMAX/2 with less backspace
        for (int i = 0; i < 10; i++) {
            CASE(S = generateRandomString(rnd.nextInt(1, NMAX / 2)));
        }
        // random string up to NMAX/2 with more backspace
        for (int i = 0; i < 10; i++) {
            CASE(S = generateRandomStringWithGachaBackspace(rnd.nextInt(1, NMAX / 2)));
        }
        // random string up to NMAX with less backspace
        for (int i = 0; i < 5; i++) {
            CASE(S = generateRandomString(NMAX));
        }
        // random string up to  NMAX with more backspace
        for (int i = 0; i < 5; i++) {
            CASE(S = generateRandomStringWithGachaBackspace(NMAX));
        }
    }
private:
    bool gachaBackspace() {
        // 70% get B
        int chance[10] = {1,1,1,1,1,1,1,0,0,0};
        int randidx = rnd.nextInt(0, 9);
        return chance[randidx];
    }
    string generateAllBackspace(int N) {
        string S;
        S.resize(N);
        for (int i = 0; i < N; i++) {
            S[i] = 'B';
        }
        return S;
    }
    string generateRandomStringWithGachaBackspace(int N) {
        string S;
        S.resize(N);
        for (int i = 0; i < N; i++) {
            if (gachaBackspace()) {
                S[i] = 'B';
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
