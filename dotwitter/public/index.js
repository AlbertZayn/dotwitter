// ******* LEFT-SIDEBAR *********
document.addEventListener("DOMContentLoaded", function () {
    const links = [
        { href: "http://45.9.41.41/home", iconClass: ".left-home-icon", anchorClass: ".home-anchor" },
        { href: "http://45.9.41.41/profile", iconClass: ".left-profile-icon", anchorClass: ".profile-anchor" },
        { href: "http://45.9.41.41/explore", iconClass: ".left-explore-icon", anchorClass: ".explore-anchor" }
    ];

    const settingsAnchor = document.querySelector(".settings-anchor");

    function updateStyles(clickedLink) {
        links.forEach(link => {
            const icon = document.querySelector(link.iconClass);
            const anchor = document.querySelector(link.anchorClass);

            if (link.anchorClass === clickedLink) {
                icon.src = icon.src.replace(".png", "-clicked.png");
                anchor.style.fontWeight = "700";
            } else {
                icon.src = icon.src.replace("-clicked.png", ".png");
                anchor.style.fontWeight = "normal";
            }
        });
    }

    function resetStyles() {
        links.forEach(link => {
            const icon = document.querySelector(link.iconClass);
            const anchor = document.querySelector(link.anchorClass);
            icon.src = icon.src.replace("-clicked.png", ".png");
            anchor.style.fontWeight = "normal";
        });
    }

    links.forEach(link => {
        const anchor = document.querySelector(link.anchorClass);

        anchor.addEventListener("click", function (event) {
            event.preventDefault();
            const clickedLink = link.anchorClass;
            resetStyles();
            updateStyles(clickedLink);
            window.location.href = link.href;
        });
    });

    const currentURL = window.location.href;
    links.forEach(link => {
        if (currentURL === link.href) {
            updateStyles(link.anchorClass);
        }
    });
});


const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

// ******* MAIN PAGE *********

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