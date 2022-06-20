#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;


class ProblemSpec : public BaseProblemSpec {
protected:
    const int NMAX = 1000;
    const string brackets = "(){}[]";
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
	    for (int i = 0; i < 5; i++) {
	    	CASE(N = rnd.nextInt(1, NMAX), generateRandomBalanced(N, A));
	    }
	    for (int i = 0; i < 5; i++) {
		    CASE(N = rnd.nextInt(1, NMAX), generateRandomMultiBalanced(N, A));
		}
	    for (int i = 0; i < 5; i++) {
		    CASE(N = rnd.nextInt(1, NMAX), generateRandomUnbalanced(N, A));
		}
    }

private:

    string generateBalancedString(int N) {
	int rndIdx;
	string result = "";
	for (int i = 0; i < N/2; i++) {
		rndIdx = rnd.nextInt(brackets.length());
		if (rndIdx < 2) {
			result = "(" + result + ")";
		}
		if (rndIdx >= 2 && rndIdx < 4) {
			result = "{" + result + "}";
		}
		if (rndIdx >= 4) {
			result = "[" + result + "]";
		}
	}
	return result;
    }
    string generateMultipleBalancedString(int N, int M) {
	string result = "";
	for (int i = 0; i < M; i++) {
		result = result + generateBalancedString((N/M));
	}
	return result;
    } 
    string generateUnbalancedString(int N) {
	string result = "";
	int rndIdx;
	for (int i = 0; i < N/2 - 1; i++) {
		rndIdx = rnd.nextInt(brackets.length());
		switch (rndIdx) {
			case 0:
				rndIdx = rnd.nextInt(brackets.length());
				while (rndIdx == 1) {
					rndIdx = rnd.nextInt(brackets.length());
				}
				result = "(" + result + brackets[rndIdx];
				break;
			case 1:
				
				rndIdx = rnd.nextInt(brackets.length());
				while (rndIdx == 0) {
					rndIdx = rnd.nextInt(brackets.length());
				}
				result = brackets[rndIdx] + result + ")";
				break;
			case 2:

				rndIdx = rnd.nextInt(brackets.length());
				while (rndIdx == 3) {
					rndIdx = rnd.nextInt(brackets.length());
				}
				result = "{" + result + brackets[rndIdx];
				break;
			case 3:

				rndIdx = rnd.nextInt(brackets.length());
				while (rndIdx == 2) {
					rndIdx = rnd.nextInt(brackets.length());
				}
				result = brackets[rndIdx] + result + "}";
				break;
			case 4:

				rndIdx = rnd.nextInt(brackets.length());
				while (rndIdx == 5) {
					rndIdx = rnd.nextInt(brackets.length());
				}
				result = "[" + result + brackets[rndIdx];
				break;
			case 5:

				rndIdx = rnd.nextInt(brackets.length());
				while (rndIdx == 4) {
					rndIdx = rnd.nextInt(brackets.length());
				}
				result = brackets[rndIdx] + result + "]";
				break;
		}
	}
	return result;
    }
    void generateRandomBalanced(int N, vector<string> &A) {
	    int random;
	    for (int i = 0; i < N; i++) {
		random = rnd.nextInt(1, LMAX);
		A.push_back(generateBalancedString(random));
	}
    }
    void generateRandomMultiBalanced(int N, vector<string> &A) {
    	int random;
	int randomPart;
	for (int i = 0; i < N; i++) {
		random = rnd.nextInt(1,LMAX);
		randomPart = rnd.nextInt(2,4);
		A.push_back(generateMultipleBalancedString(random, randomPart));
	}
    }
    void generateRandomUnbalanced(int N, vector<string> &A) {
    	int random;
	for (int i = 0; i < N; i++) {
		random = rnd.nextInt(1,LMAX);
		A.push_back(generateUnbalancedString(random));
	}
    }
};
