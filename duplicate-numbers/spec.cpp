#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;


class ProblemSpec : public BaseProblemSpec {
protected:
    const int NMAX = 5e6;
    
    int N;
    vector<int> A;
    int ans;

    void InputFormat() {
        LINE(N);
        LINE(A % SIZE(N+1));
    }

    void OutputFormat() {
        LINE(ans);
    }

    void GradingConfig() {
        TimeLimit(1);
        MemoryLimit(256);
    }

    void Constraints() {
        CONS(N >=  1 && N <= NMAX);
        CONS(isValidRangeA());
    }

private:
    bool isValidRangeA() {
        for(int i=0;i<A.size();i++) {
		if (A[i] > N) return false;
        }

        return true;
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "5",
            "1 2 3 4 4 5"
        });
        Output({
	    "4"
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
	int duplicated = rnd.nextInt(1, N);
	for (int i = 0; i < N; i++) {
		A.push_back(i+1);
		if (i+1 == duplicated) {
			A.push_back(i+1);
		}
	}
	rnd.shuffle(A.begin(), A.end());
    }
};
