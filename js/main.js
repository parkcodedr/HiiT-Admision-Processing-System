let scores = 0.60;
console.log(scores);
scores = 90;
const pi = 3.142;
console.log(pi);
let age;

age = 75;
firstname = "Paul";
isLogin = false;

// const employees = ["Mike", "Peter", "Mary"];
// console.log(employees);

// console.log(typeof employees);
// const staff = {
//     "firstname": "Kole",
//     "lastname": "James",
//     "age": 60,
//     "isEmployed": false,
//     getName: () => {

//     }
// }

// const lastname = "Loke";
// console.log(`Your name is ${firstname} ${lastname}`);

// const sentence = "The beginning of modern web application";
// console.log(sentence);
// const word = sentence.split(" ");
// console.log(word);
// console.log(`Total number of words: ${word.length}`);

// console.log(sentence.includes("web"));
// console.log(sentence.charAt(1));

// console.log(sentence.slice(0, 9));

// console.log(sentence.substr(9, -1));

// console.log(sentence.substring(12, -1));
// console.log(sentence.replace(/[a-z]/, "Internet"));

// console.log("JOHN".toLowerCase() == "john");
// console.log(3 === "3");

// const num = 0.4;
// const num1 = "0.4";

// console.log(num.toString());
// console.log(Number(num1));
// console.log(parseFloat(num1));
// /* 
// comment here
// and there 
// and here

// */

// //this is a function to print hello world to the console
// function printHello() {
//     for (let i = 1; i <= 5; i++) {
//         console.log("Hello World");
//     }
// }
// printHello();

// const sum = addNumbers(10, 20, 30);

// function addNumbers(a, b) {
//     return a + b;
// }

// console.log(sum);

// const squareNumber = (num1) => {
//     const result = num1 / 2;

//     return result;
// }

// console.log(squareNumber(5));

// const squareN = num => num * num;
// console.log(squareN(7));

// const employees = {
//     firstname: "John",
//     lastname: "Mike",
//     age: 26,
//     gender: "male",
//     getName: function () {
//         return this.lastname;
//     }
// };
// const students = {
//     one: {
//         "firstname": "Joy",
//         "lastname": "Peter"
//     },
//     two: {
//         "firstname": "Joy",
//         "lastname": "Peter"
//     }
// }
// const score = [
    
// ];

// console.log(employees.firstname);
// console.log(employees['firstname'])
// console.log(employees.getName())

// for (let i = 0; i < score.length; i++) {
//     console.log(score[i].maths);
// }

// console.log(Object.keys(students));

// Object.keys(students).map(function (key) {
//     console.log(students[key]);
// })

// console.log(Object.entries(students));
// console.log(Object.values(students));

// score.school = "KSU";
// delete score.school;

// console.log(score);


// const staffNames = ["Lucy", "Licia", "Matinez", "Javier"];

// console.log(staffNames[0]);
// staffNames.push("Paul");
// //remove the last element from the array
// //staffNames.pop();
// //removes the first element from the array
// //staffNames.shift();
// const staffSingle = staffNames.join();
// staffNames.sort();
// console.log(staffNames);
// console.log(staffSingle);

// const findName = staffNames.find(item=>item=="Matinez")
// console.log(findName);

// const filterData = staffNames.filter((element)=>{
//     return element.charAt(0)=="L";
// })

// const testScore = [47,57,39,26,50,70];

// console.log(filterData);

// const addedScore = testScore.map((score)=>{
// return score+10;
// })

// console.log(addedScore.length);

// for(let i=0;i<testScore.length;i++){
//     console.log(testScore[i]);
// }

// let count = 1;
// while(count<=10){
//     console.log(count);
//     count++;
// }

// const validateVoters = (age,card)=>{
// if(age<18){
//     console.log("Not eligible to vote");
// }else if(card==false){
// console.log("Not eligible to vote");
// }
// else {
//         console.log("You are eligible to vote");
// }
// }

// validateVoters(18,true);

// const numberToWord = (num)=>{
//     switch (num) {
//         case 1:
//             return "One"
//             break;
//     case 2:
//             return "Two"
//             break;
//     case 3:
//             return "Three"
//             break;
//         default:
//             return "Invalid Input";
//             break;
//     }
// }
//  const result = numberToWord(8);
//  console.log(result);
 




const paragraph = document.getElementsByTagName('p');
console.log(paragraph);
//const btn = document.getElementsByClassName('btnOff');
const btn2 =  document.querySelector('.btnOff');

btn2.style.borderColor='red';
console.log(btn2.className);
btn2.classList.add("btn-primary");

const classNames = btn2.classList;
console.log(classNames);

const link = document.querySelector('.link');
const href = link.getAttribute('href');

link.setAttribute('class',"http://netlify.com");

console.log(href);



const bulb = document.getElementById("bulb");

const buttonOff = document.querySelector('.btnOff');
const buttonOn = document.querySelector('.btnOn');

buttonOn.addEventListener("click",()=>{
bulb.src='images/pic_bulbon.gif';
})

buttonOff.addEventListener("click",()=>{
    bulb.src='images/pic_bulboff.gif';
})
    
const country = document.querySelector('#country');
const li = document.createElement("option");

li.innerText="Benue";
li.value="Benue";

country.appendChild(li);

const handleComment = ()=>{
    const commentRef = document.querySelector('#comment');
    const comment = commentRef.value;
    if(comment.includes('fool')){
        alert('abuse!!');
    }
}




















