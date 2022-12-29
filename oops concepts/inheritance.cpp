#include<iostream>
using namespace std;

class animal{
    public:
    void barking(){
        cout<<"wooooooff"<<endl;
    }
};

class sheep:public animal{
    public:
    void sweep(){
        cout<<"meeeeehhhh"<<endl;
    }
};

int main(){
    sheep obj;
    obj.barking();
    obj.sweep();
    return 0;
}