#include<iostream>
using namespace std;

class abc{
    public:
    string Name;
    int Age;
    abc(string name,int age){
        Name=name;
        Age=age;
    }
    void display(){
        cout<<Name<<" "<<Age<<endl;
    }
};

int main(){
    abc obj=abc("Amandeep",23);
    obj.display();
    return 0;
}