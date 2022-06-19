#include <tcframe/spec.hpp>
#include <vector>
using namespace tcframe;
using namespace std;

class ProblemSpec : public BaseProblemSpec {
protected:
    int N;
    vector<vector<int>> grid;
    int ans;

    void InputFormat() {
        LINE(N);
        GRID(grid) % SIZE(N, N);
    }

    void OutputFormat() {
        LINE(ans);
    }

    void GradingConfig() {
        TimeLimit(2);
        MemoryLimit(128);
    }

    void Constraints() {
        CONS(2 <= N && N <= 100);
    }
};

class TestSpec : public BaseTestSpec<ProblemSpec> {
protected:
    void SampleTestCase1() {
        Input({
            "2",
            "1 0",
            "0 1"
        });
        Output({
            "1"
        });
    }

    void TestCases() {
        CASE(N = 2, grid = {
            {1, 0},
            {0, 1}
        });
        CASE(N = 3, grid = {
            {0,1,0},
            {0,0,0},
            {0,0,1}
        });
        CASE(N = 5, grid = {
            {1,1,1,1,1},
            {1,0,0,0,1},
            {1,0,1,0,1},
            {1,0,0,0,1},
            {1,1,1,1,1}
        });
        CASE(N = 10, grid = {
            {1,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,1}
        });
        CASE(N = 10, grid = {
            {1,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1},
            {0,0,0,0,0,0,0,0,0,1}
        });
        CASE(N = 20, grid = {
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
            {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0}
        });

    }
};