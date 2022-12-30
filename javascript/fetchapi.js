console.log('hello gi');    
let mybtn=document.getElementById('mybtn');

let content=document.getElementById('content');

// function getdata(){
//     console.log("started get data");
//     url="readme.txt";
//     fetch(url).then((response)=>{
//         console.log("inside of first then");
//         return response.text();
//     }).then((data)=>{
//         console.log("inside of second then");
//         console.log(data);
//     })
// }

// function getdata(){
//     console.log("started get data");
//     url="https://api.github.com/";
//     fetch(url).then((response)=>{
//         console.log("inside of first then");
//         return response.json();//java script objec notation
//     }).then((data)=>{
//         console.log("inside of second then");
//         console.log(data);
//     })
// }

// console.log("Before running data");
// getdata();
// console.log("After running data");

function postdata(){
    url="https://dummy.restapiexample.com/api/v1/create";
    data='{"name":"amandeep","salary":"123","age":"23"}';
    params={
        method:'post',
        headers:{
            'Content-Type':'application/json'
        },
        body:data
    }
    fetch(url,params).then(response=>response.json())
    .then(data=>
        console.log(data)
    )
}
postdata();


