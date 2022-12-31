console.log("this my practise area");

async function car(){
    const a=await fetch('https://api.github.com/users');
    const b=await a.json();
    return b;
}

let num=car();
console.log(num);
num.then(data=>console.log(data))