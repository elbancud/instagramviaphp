const submitBtn = document.getElementById("submit");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const middleName = document.getElementById("middleName");
const email = document.getElementById("email");
const username = document.getElementById("username");
const password = document.getElementById("password");
const passwordConfirmation = document.getElementById("passwordConfirmation");
const fail = document.getElementById("fail");
const success = document.getElementById("success");

submitBtn.addEventListener("click", (event) => {
    if (firstName.value == "" || lastName.value == "" || middleName.value == "" || email.value == "" || username.value == ""||password.value == "" || passwordConfirmation.value == "" ) {
        fail.innerHTML = "Please Complete the fields";
        event.preventDefault();
    } else if(passwordConfirmation.value != password.value) {
        fail.innerHTML = "Password doesn't match";
        event.preventDefault();
        passwordConfirmation.style.borderBottom = "1px solid #fc100d";
        password.style.borderBottom = "1px solid #fc100d";

    } else {
        success.innerHTML = "Completed";
    }
   
});