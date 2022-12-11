const error = document.querySelector(".login .error")

function validate() {
    let validEmail = !(email.value.trim().length === 0 || !email.value.includes("@") || !email.value.includes("."))
    let validPass = password.value.trim().length >= 6;

    if (!validEmail && !validPass) {
        error.innerText = "Please provide an email and a password!";
        error.style.display = "block"
    } else if (!validEmail) {
        error.innerText = "Please provide a valid email!";
        error.style.display = "block"
    } else if (!validPass) {
        error.innerText = "Please provide a password with 6 or more characters!";
        error.style.display = "block"
    } else {
        error.style.display = "none"
        return true;
    }
}
function login(){
    if (validate()){
        window.location.href = "index.html"
    }
}
submit.addEventListener("click", login)