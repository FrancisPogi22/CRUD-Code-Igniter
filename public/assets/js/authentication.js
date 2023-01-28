const signInButton = document.querySelector("#sign-in-btn");
const signUpButton = document.querySelector("#sign-up-btn");
const formContainer = document.querySelector(".container-fluid");
const inputFields = document.getElementsByClassName("form-input-fields");
const signInShowPassword = document.querySelector("#sign-in-show-password");
const signUpShowPassword = document.querySelector("#sign-up-show-password");
const signInPasswordFields = document.querySelector("#sign-in-password-field");
const signUpPasswordFields = document.querySelector("#sign-up-password-field");

$(document).ready(function () {
  $(".alert-danger")
    .fadeTo(2000, 500)
    .slideUp(500, function () {
      $(".alert-danger").slideUp(500);
    }); 
});

signUpButton.addEventListener("click", () => {
  formContainer.classList.add("sign-up-mode");
  for(let i = 0; i < inputFields.length; i++){
    inputFields[i].value = "";
  }
});

signInButton.addEventListener("click", () => {
  formContainer.classList.remove("sign-up-mode");
  for(let i = 0; i < inputFields.length; i++){
    inputFields[i].value = "";
  }
});

signInShowPassword.addEventListener("mouseover", function(){
  this.classList.toggle("bi-eye");
  const signIn = signInPasswordFields.getAttribute("type")
  === "password" ? "text" : "password";
  signInPasswordFields.setAttribute("type", signIn);
})

signInShowPassword.addEventListener("mouseout", function(){
  this.classList.toggle("bi-eye");
  const signIn = signInPasswordFields.getAttribute("type")
  === "password" ? "text" : "password";
  signInPasswordFields.setAttribute("type", signIn);
})

signUpShowPassword.addEventListener("mouseover", function(){
  this.classList.toggle("bi-eye");
  const signUp = signUpPasswordFields.getAttribute("type")
  === "password" ? "text" : "password";
  signUpPasswordFields.setAttribute("type", signUp);
})

signUpShowPassword.addEventListener("mouseout", function(){
  this.classList.toggle("bi-eye");
  const signUp = signUpPasswordFields.getAttribute("type")
  === "password" ? "text" : "password";
  signUpPasswordFields.setAttribute("type", signUp);
})