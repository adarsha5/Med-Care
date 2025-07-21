const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click',() =>{
        nav.classList.add('active');
    })
}
if(close){
    close.addEventListener('click',() =>{
        nav.classList.remove('active');
    })
}








const login = document.getElementById('loginbtn');
const close1 = document.getElementById('close1');
const loginform = document.getElementById('loginsec');
if(login){
    login.addEventListener('click',() =>{
        loginform.classList.add('active1');
    })
}
if(close1){
    close1.addEventListener('click',() =>{
        loginform.classList.remove('active1');
    })
}



const signup = document.getElementById('signupbtn');
const close2 = document.getElementById('close2');
const signform = document.getElementById('signupsec');
if(signup){
    signup.addEventListener('click',() =>{
        signform.classList.add('active2');
    })
}
if(close2){
    close2.addEventListener('click',() =>{
        signform.classList.remove('active2');
    })
}