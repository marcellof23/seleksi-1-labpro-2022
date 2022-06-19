#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;

class ProblemSpec : public BaseProblemSpec {
protected:
    int N;
    vector<int> arr;
    char ans;

    void InputFormat() {
        LINE(N);
        LINE(arr);
    }

    void OutputFormat() {
        LINE(ans);
    }

    void GradingConfig() {
        TimeLimit(2);
        MemoryLimit(128);
    }

    void Constraints() {
        CONS(1 <= N && N <= 1000);
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "5",
            "1 2 2 3 2"
        });
        Output({
            "Y"
        });
    }

    void TestCases() {
        CASE(N = 14, arr = {5, 14, 9, 13, 3, 4, 5, 7, 14, 4, 2, 8, 9, 1});
        CASE(N = 6, arr = {4, 5, 3, 2, 6, 6});
        CASE(N = 3, arr = {1, 1, 2});
        CASE(N = 10, arr = {1, 1, 2, 2, 3, 3, 4, 4, 5, 5});
        CASE(N = 5, arr = {1, 2, 3, 4, 4});
        CASE(N = 5, arr = {1, 1, 2, 3, 4});
        CASE(N = 3, arr = {1, 2, 1});
        CASE(N = 3, arr = {1, 1, 1});
        CASE(N = 28, arr = {4, 1, 12, 17, 20, 21, 2, 22, 25, 23, 7, 8, 16, 10, 9, 26, 13, 4, 25, 12, 8, 9, 2, 26, 12, 3, 19, 20});
    }
};