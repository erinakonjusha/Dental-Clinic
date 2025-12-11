const form = document.getElementById("signupForm");

const nameInput = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");

const nameError = document.getElementById("nameError");
const emailError = document.getElementById("emailError");
const passError = document.getElementById("passError");

const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

function validateName() {
    const value = nameInput.value.trim();
    if (value === "") {
        nameError.textContent = "Please fill this blanket!";
        nameInput.classList.add("invalid");
        nameInput.classList.remove("valid");
        return false;
    } else if (value.length < 3) {
        nameError.textContent = "Name must contain at least 3 characters!";
        nameInput.classList.add("invalid");
        nameInput.classList.remove("valid");
        return false;
    } else {
        nameError.textContent = "";
        nameInput.classList.remove("invalid");
        nameInput.classList.add("valid");
        return true;
    }
}

function validateEmail() {
    const value = email.value.trim();
    if (value === "") {
        emailError.textContent = "Please fill this blanket!";
        email.classList.add("invalid");
        email.classList.remove("valid");
        return false;
    } else if (!emailRegex.test(value)) {
        emailError.textContent = "Please write a valid email (ex. user@gmail.com)!";
        email.classList.add("invalid");
        email.classList.remove("valid");
        return false;
    } else {
        emailError.textContent = "";
        email.classList.remove("invalid");
        email.classList.add("valid");
        return true;
    }
}

function validatePassword() {
    const value = password.value.trim();
    if (value === "") {
        passError.textContent = "Please fill this blanket!";
        password.classList.add("invalid");
        password.classList.remove("valid");
        return false;
    } else if (value.length < 6) {
        passError.textContent = "Password should contain at least 6 characters!";
        password.classList.add("invalid");
        password.classList.remove("valid");
        return false;
    } else {
        passError.textContent = "";
        password.classList.remove("invalid");
        password.classList.add("valid");
        return true;
    }
}

nameInput.addEventListener("input", validateName);
email.addEventListener("input", validateEmail);
password.addEventListener("input", validatePassword);

form.addEventListener("submit", function(e) {
    const nameValid = validateName();
    const emailValid = validateEmail();
    const passValid = validatePassword();

    if (!nameValid || !emailValid || !passValid) {
        e.preventDefault();
    }
});

const animatedElements = document.querySelectorAll(".animate");

function checkAnimations() {
    animatedElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
            el.classList.add("show");
        }
    });
}

window.addEventListener("scroll", checkAnimations);
window.addEventListener("load", checkAnimations);
