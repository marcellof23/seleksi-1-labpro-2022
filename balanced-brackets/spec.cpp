#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;


class ProblemSpec : public BaseProblemSpec {
protected:
    const int NMAX = 1000;
    const int LMAX = 1000;
    int N;
    vector<string> A;
    vector<int> ans;

    void InputFormat() {
        LINE(N);
        LINES(A) % SIZE(N);
    }

    void OutputFormat() {
        LINES(ans) % SIZE(N);
    }

    void GradingConfig() {
        TimeLimit(1);
        MemoryLimit(8);
    }

    void Constraints() {
        CONS(N >=  1 && N <= NMAX);
        CONS(isValidA());
    }

private:
    bool isValidA() {
        for(int i=0;i<A.size();i++) {
		if (A[i].length() > LMAX) return false;
		if (!regex_match(A[i], regex("[\[\]\{\}\(\)]")) return false;
        }

        return true;
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "2",
            "{{}}",
	    "{[]}()"
        });
        Output({
	    "1",
	    "1"
        });
    }

    void BeforeTestCase() {
	A.clear();
    }

    void TestCases() {
	    for (int i = 0; i < 10; i++) {
	    	CASE(N = rnd.nextInt(1, NMAX), generateRandom(N, A));
	    }
    }

private:
    void generateRandom(int N, vector<string> &A) {
	    int random;
	    for (int i = 0; i < N; i++) {
		random = rnd.nextInt(0, 9);
		A.push_back(random);
	}
    }
};
