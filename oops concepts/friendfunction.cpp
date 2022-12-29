#include<iostream>
using namespace std;

class abc{
    private:
    string Name;
    int Age;
    public:
    void setvalue(string name,int age){
        Name=name;
        Age=age;
    }
    friend class bcd;
};

class bcd:public abc{
    public:
    void printvalue(abc t){
        cout<<"my name is "<<t.Name<<" and my age is "<<t.Age<<endl;        
    }
};

int main(){
    abc obj;
    obj.setvalue("amandeep",23);
    bcd gjm;
    gjm.printvalue(obj);
    return 0;
}