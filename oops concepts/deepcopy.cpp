#include<iostream>
using namespace std;

class abc{
    private:
    int A;
    int *B;
    int C;
    public:

    abc(){
        B=new int;
    }
    void setdimn(int a,int b,int c){
        A=a;
        *B=b;
        C=c;
    }
    void show(){
        cout<<"A: "<<A<<" B: "<<*B<<" C: "<<C<<endl;
    }
    abc(abc& x){
        A=x.A;
        B=new int;
        *B=*(x.B);
        C=x.C;
    }
    // ~abc(){
    //     cout<<"Distructor..!";
    // }
};
int main(){
    abc bc1;
    bc1.setdimn(1,2,3);
    bc1.show();
    abc bc2=bc1;
    bc2.show();
    return 0;
}