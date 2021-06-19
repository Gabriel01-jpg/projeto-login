var btnSignIn = document.querySelector('#signin');
var Register = document.querySelector('#register');

var body = document.querySelector('body');

Register.addEventListener("click", function() {
    body.className = "register-js";
})

btnSignIn.addEventListener("click", function() {
    body.className = "sign-in-js";
})