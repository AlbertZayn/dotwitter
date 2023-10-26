// ******* Login Account *********
document.addEventListener("DOMContentLoaded", function () {
    const loginInputBtn = document.querySelector(".login-form");
    loginInputBtn.addEventListener("submit", function (event) {
        event.preventDefault();

        let LoginUsernameInput = document.getElementById("username-login");
        let LoginPasswordInput = document.getElementById("password-login");
        let LoginFeedback = document.getElementById("login-feedback");

        let username = LoginUsernameInput.value;
        let password = LoginPasswordInput.value;

        fetch("/login", {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({username, password}),
        })
            .then((response) => {
                if (response.status === 401 || response.status === 403) {
                    LoginUsernameInput.classList.add("is-invalid");
                    LoginPasswordInput.classList.add("is-invalid");
                    LoginFeedback.style.visibility = "visible";
                } else if (response.status === 200) {
                    LoginUsernameInput.classList.remove("is-invalid");
                    LoginPasswordInput.classList.remove("is-invalid");
                    LoginFeedback.style.visibility = "hidden";
                    window.location.href = "/profile";
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    });
})

// ******* Create Account *********
function updateValidation(inputElement, isValid, feedbackElement) {
    inputElement.classList.toggle('is-valid', isValid);
    inputElement.classList.toggle('is-invalid', !isValid);
    feedbackElement.style.display = isValid ? 'none' : 'block';
}

function validateInput(inputElement, validationFunction, feedbackElement) {
    inputElement.addEventListener('input', () => {
        const inputValue = inputElement.value.trim();
        const isValid = validationFunction(inputValue) && !inputValue.match(/^\s*$/);
        updateValidation(inputElement, isValid, feedbackElement);
        validateStep1();
    });
}

function validateFullname(fullname) {
    return fullname.length >= 1;
}

function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}

function validateUsername(username) {
    return username.length >= 1;
}

function validatePassword(password) {
    return password.length >= 8;
}

const fullnameInput = document.getElementById('fullname');
const fullnameFeedback = document.querySelector('.ValidationFullname');
const emailInput = document.getElementById('email');
const emailFeedback = document.querySelector('.ValidationEmail');
const usernameInput = document.getElementById('username');
const usernameFeedback = document.querySelector('.ValidationUsername');
const nextButton = document.querySelector('.step1-next-btn');
const createAccButton = document.querySelector('.step2-next-btn');
const passwordInput = document.getElementById('password');
const passwordFeedback = document.querySelector('.ValidationPassword');

validateInput(fullnameInput, validateFullname, fullnameFeedback);
validateInput(emailInput, validateEmail, emailFeedback);
validateInput(usernameInput, validateUsername, usernameFeedback);
validateInput(passwordInput, validatePassword, passwordFeedback);
validateStep1();

function validateStep1() {
    const isFullnameValid = validateFullname(fullnameInput.value);
    const isEmailValid = validateEmail(emailInput.value);
    const isUsernameValid = validateUsername(usernameInput.value);

    const isFullnameNoSpaces = !fullnameInput.value.trim().match(/^\s*$/);
    const isUsernameNoSpaces = !usernameInput.value.trim().match(/^\s*$/);

    nextButton.disabled = !(isFullnameValid && isEmailValid && isUsernameValid && isFullnameNoSpaces && isUsernameNoSpaces);
}

function validateStep2() {
    const isPasswordValid = validatePassword(passwordInput.value);
    const hasNoSpaces = !passwordInput.value.includes(' ');
    createAccButton.disabled = !(isPasswordValid && hasNoSpaces);
}

passwordInput.addEventListener('input', validateStep2);
validateStep2();