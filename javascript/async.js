console.log("Async await program");


async function aman(){
    console.log("inside of aman function");
    const a=await fetch('https://api.github.com/users');
    console.log("before response");
    const b=await a.json();
    console.log("user has been resolved");
    return b;
}

console.log("before calling aman function");
let boom=aman();
console.log("After calling aman function");
console.log(boom);
boom.then(data=>console.log(data))
console.log("Last line of code");