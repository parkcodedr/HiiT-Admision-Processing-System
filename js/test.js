
// setTimeout(()=>{
//     console.log("async function call");
// },7000);


console.log("hello world");
console.log("hello");

// setTimeout(()=>{
//     console.log("async function call in two seconds");
// },2000);

const internval = setInterval(()=>{
    const minutes = new Date().getMinutes();
    const seconds = new Date().getSeconds();
    const hour = new Date().getHours();
    const time = new Date().getTime();
   
    // console.log(`Hours: ${hour} : Min: ${minutes} : Seconds: ${seconds} `)
},1000);


clearInterval(internval);

fetch('https://jsonplaceholder.typicode.com/todos/1')
  .then(response => response.json())
  .then(json => console.log(json)).catch(error=>{
      console.log(error);
  })

  const getData = async()=>{
      const userList = document.querySelector('#userList');
      console.log(userList);
      const result = document.querySelector('#result');
try {
const response = await fetch('https://jsonplaceholder.typicode.com/users/1');
const data = await response.json();
return data;

// result.innerText = "User loaded";
// const li = document.createElement("li");

// li.innerText=data.name+" "+data.email;
// li.setAttribute('class',"list-group-item");
// userList.append(li);

// const userData = data.map(user=>{
//     console.log(user.name);
//     li.innerText=user.name;
//     li.setAttribute('class',"list-group-item");
//     return li;

// })





} catch (error) {
    console.log(error);
}
  }

  getData();

  const registerUser = async()=>{
    const data = {
        firstname:"Mike",
        lastname:"Josh"
    }

    const response = await fetch("https://jsonplaceholder.typicode.com/posts",{
    method:"POST",
    headers:{"Content-Type":"application/json",Authorization:"Bearer 76hdkdjshsyeorossghdklsjshdyuori4uyueyy0olosi"},
    body:JSON.stringify(data)
    })
    const result = await response.json();
    console.log(result);
  }

  registerUser();

