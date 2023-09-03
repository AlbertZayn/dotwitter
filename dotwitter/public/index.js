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
const fullnameInput = document.getElementById('fullname');
const fullnameFeedback = document.getElementsByClassName('ValidationFullname');

fullnameInput.addEventListener('input', () => {
    if (fullnameInput.value.length >= 1) {
        fullnameInput.classList.add('is-valid');
        fullnameInput.classList.remove('is-invalid');
        fullnameFeedback.style.display = 'none';
    } else {
        fullnameInput.classList.remove('is-valid');
        fullnameInput.classList.add('is-invalid');
        fullnameFeedback.style.display = 'block';
    }
});

const emailInput = document.getElementById('email');
const emailFeedback = document.getElementsByClassName('ValidationEmail');

emailInput.addEventListener('input', () => {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (emailPattern.test(emailInput.value)) {
        emailInput.classList.add('is-valid');
        emailInput.classList.remove('is-invalid');
        emailFeedback.style.display = 'none';
    } else {
        emailInput.classList.remove('is-valid');
        emailInput.classList.add('is-invalid');
        emailFeedback.style.display = 'block';
    }
});

const usernameInput = document.getElementById('username');
const usernameFeedback = document.getElementsByClassName('ValidationUsername');

usernameInput.addEventListener('input', () => {
    if (usernameInput.value.length >= 1) {
        usernameInput.classList.add('is-valid');
        usernameInput.classList.remove('is-invalid');
        usernameFeedback.style.display = 'none';
    } else {
        usernameInput.classList.remove('is-valid');
        usernameInput.classList.add('is-invalid');
        usernameFeedback.style.display = 'block';
    }
});

const nextButton = document.querySelector('.step1-next-btn');

fullnameInput.addEventListener('input', validateStep1);
emailInput.addEventListener('input', validateStep1);
usernameInput.addEventListener('input', validateStep1);

function validateStep1() {
    const isFullnameValid = fullnameInput.value.length >= 1;
    const isEmailValid = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(emailInput.value);
    const isUsernameValid = usernameInput.value.length >= 1;

    if (isFullnameValid && isEmailValid && isUsernameValid) {
        nextButton.removeAttribute('disabled');
    } else {
        nextButton.setAttribute('disabled', 'true');
    }
}

const passwordInput = document.getElementById('password');
const passwordFeedback = document.getElementsByClassName('ValidationPassword');

passwordInput.addEventListener('input', () => {
    if (passwordInput.value.length >= 8) {
        passwordInput.classList.add('is-valid');
        passwordInput.classList.remove('is-invalid');
        passwordFeedback.style.display = 'none';
    } else {
        passwordInput.classList.remove('is-valid');
        passwordInput.classList.add('is-invalid');
        passwordFeedback.style.display = 'block';
    }
});

const createAccButton = document.querySelector('.step2-next-btn');
passwordInput.addEventListener('input', validateStep2);

function validateStep2() {
    const isPasswordValid = passwordInput.value.length >= 8;
    if (isPasswordValid) {
        createAccButton.removeAttribute('disabled');
    } else {
        createAccButton.setAttribute('disabled', 'true');
    }
}


const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
