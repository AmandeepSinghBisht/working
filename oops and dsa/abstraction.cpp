#include<iostream>
using namespace std;

class abc{
    public:
    virtual void paaji()=0;
    virtual void dhiyaan()=0;
};

class bcd:public abc{
    public:
    void paaji(){
        cout<<"paaji tuhada dhiyaan kiddar aaw"<<endl;
    }
    void dhiyaan(){
        cout<<"dhanur paaji idddr awww"<<endl;
    }
};

int main(){
    abc *obj=new bcd();
    obj->paaji();
    obj->dhiyaan();
    return 0;
}