const error = document.querySelector(".register .error")

function validate() {
    let validFirstName = firstName.value.length > 1;
    let validLastname = lastName.value.length > 1;
    let validEmail = !(email.value.trim().length === 0 || !email.value.includes("@") || !email.value.includes("."))
    let validConfirmEmail = email.value === confirmEmail.value;
    let validPass = password.value.trim().length >= 6;

    if (!validFirstName) {
        error.innerText = "Please provide a valid first name!";
        error.style.display = "block"
    } else if (!validLastname) {
        error.innerText = "Please provide a valid last name!";
        error.style.display = "block"
    } else if (!validEmail) {
        error.innerText = "Please provide a valid email!";
        error.style.display = "block"
    } else if (!validConfirmEmail) {
        error.innerText = "Email doesn't match with confirm email!";
        error.style.display = "block"
    } else if (!validPass) {
        error.innerText = "Please provide a password with 6 or more characters!";
        error.style.display = "block"
    } else {
        error.style.display = "none"
        return true;
    }
}

function register(){
    if (validate()){
        window.location.href = "index.html"
    }
}
submit.addEventListener("click", register)