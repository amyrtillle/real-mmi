const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#pwd");

const togglePassword2 = document.querySelector("#togglePassword2");
const password2 = document.querySelector("#password2");


togglePassword.addEventListener("click", function () {
  // toggle the type attribute
  const type =
    password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("bi-eye");
});

togglePassword2.addEventListener("click", function () {
  // toggle the type attribute
  const type =
    password2.getAttribute("type") === "password" ? "text" : "password";
  password2.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("bi-eye");
});



const togglePassword3 = document.querySelector("#togglePassword3");
const password3 = document.querySelector(".password3");

togglePassword3.addEventListener("click", function () {
  // toggle the type attribute
  const type =
    password3.getAttribute("type") === "password" ? "text" : "password";
  password3.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("bi-eye");
});
//toggle

const createAccount = document.querySelector("#create");
const loginAccount = document.querySelector("#login");

const selection = document.getElementById("select-color");

const createAccountContainer = document.getElementById("create-form");
const loginAccountContainer = document.querySelector("#login-form");

const mediaQuery = window.matchMedia('(min-width: 600px)');

function switchToLogin() {

  if(mediaQuery.matches){
  createAccountContainer.style.display = "none";
  selection.style.transform = "translateX(200px)";
  selection.style.width = "150px";
  loginAccountContainer.style.display = "block";
  }

  else{
      createAccountContainer.style.display = "none";
      selection.style.transform = "translateX(160px)";
      selection.style.width = "140px";
      loginAccountContainer.style.display = "block";
    }
}

function switchToCreate() {
  if(mediaQuery.matches){
  createAccountContainer.style.display = "block";
  selection.style.transform = "translateX(0px)";
  selection.style.width = "185px";
  loginAccountContainer.style.display = "none";
  }
  else{
    createAccountContainer.style.display = "block";
  selection.style.transform = "translateX(0px)";
  selection.style.width = "110px";
  loginAccountContainer.style.display = "none";
  }
}