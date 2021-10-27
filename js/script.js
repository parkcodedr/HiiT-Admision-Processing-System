

const showError = (elementId,message)=>{
    const element = document.getElementById(elementId);
    element.innerText=message;
}

const loginBtn = document.querySelector('#login');
const loginForm = document.querySelector('#loginForm');
const form = document.forms['loginForm'];
loginBtn.addEventListener('click',(e)=>{
    e.preventDefault();
const emailRef = document.querySelector('#email');
const passwordRef=document.querySelector("#password");

const email = emailRef.value;
const password = passwordRef.value;
    if(email==""){
       showError("emailError","Email is Required");
      
    }else{
        showError("emailError","");
    }
    if(password==""){
        showError("passwordError","Password is Required");
    }else{
        showError("passwordError","");
    }
    if(password!="" && email!=""){
        console.log(loginForm);
        console.log('submitting');
        return true;
    }
})

const togglePassword = document.querySelector("#togglePassword");
const passwordRef=document.querySelector("#password");


togglePassword.addEventListener("click",()=>{
    const type = passwordRef.getAttribute('type')=="text"?"password":"text";
    passwordRef.setAttribute('type',type);
    if(type=="password"){
        togglePassword.classList.toggle('fa-eye-slash');
    }else{
        togglePassword.classList.remove('fa-eye-slash');
        togglePassword.classList.add('fa-eye');
    }
    
})






