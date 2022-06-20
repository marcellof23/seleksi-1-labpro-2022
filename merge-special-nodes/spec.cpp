#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;


class ProblemSpec : public BaseProblemSpec {
protected:
    const int NMAX = 1000;
    
    int N;
    vector<int> A;
    int ans;

    void InputFormat() {
        LINE(N);
        LINE(A % SIZE(N));
    }

    void OutputFormat() {
        LINE(ans);
    }

    void GradingConfig() {
        TimeLimit(1);
        MemoryLimit(8);
    }

    void Constraints() {
        CONS(N >=  1 && N <= NMAX);
        CONS(isValidRangeA());
    }

private:
    bool isValidRangeA() {
        for(int i=0;i<A.size();i++) {
		if (A[i] > 9 || A[i] < 0) return false;
        }

        return true;
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "5",
            "1 2 3 4 5"
        });
        Output({
	    "8"
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
    void generateRandom(int N, vector<int> &A) {
	    int random;
	    for (int i = 0; i < N; i++) {
		random = rnd.nextInt(0, 9);
		A.push_back(random);
	}
    }
};
