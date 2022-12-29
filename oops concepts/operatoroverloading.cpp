#include <iostream>
using namespace std;

class overload
{
private:
    int Num1;
    int Num2;

public:
    overload(int a = 0, int b = 0)
    {
        Num1 = a;
        Num2 = b;
    }
    overload operator +(overload const &obj)
    {
        overload res;
        res.Num1 = Num1 + obj.Num1;
        res.Num2 = Num2 + obj.Num2;
        return res;
    }
    void printdetail()
    {
        cout << Num1 << " + " << Num2 << endl;
    }
};
int main()
{
    overload c1(1, 1), c2(1, 1);
    overload c3 = c1 + c2;
    c3.printdetail();
    return 0;
}