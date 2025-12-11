const hamburger = document.getElementById('hamburger');
const nav = document.querySelector('.nav');

hamburger.addEventListener('click', () => {
    nav.classList.toggle('active');
    hamburger.classList.toggle('open');
});

const contactForm = document.querySelector(".contact-form");
const nameInput = contactForm.querySelector("input[placeholder='Full Name']");
const phoneInput = contactForm.querySelector("input[placeholder='Phone Number']");
const emailInput = contactForm.querySelector("input[placeholder='Email']");
const messageInput = contactForm.querySelector("input[placeholder='Message']");


const nameError = document.getElementById("nameError");
const phoneError = document.getElementById("phoneError");
const emailError = document.getElementById("emailError");
const messageError = document.getElementById("messageError");


const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$/;
const phoneRegex = /^[0-9]{6,}$/;



function validateName() {
    const value = nameInput.value.trim();
    if (value === "") {
        nameError.textContent = "Please fill this blanket!!";
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

function validatePhone() {
    const value = phoneInput.value.trim();
    if (value === "") {
        phoneError.textContent = "Please fill this blanket!";
        phoneInput.classList.add("invalid");
        phoneInput.classList.remove("valid");
        return false;
    } else if (!phoneRegex.test(value)) {
        phoneError.textContent = "Please write a valid number that contains at least 6 numbers!";
        phoneInput.classList.add("invalid");
        phoneInput.classList.remove("valid");
        return false;
    } else {
        phoneError.textContent = "";
        phoneInput.classList.remove("invalid");
        phoneInput.classList.add("valid");
        return true;
    }
}

function validateEmail() {
    const value = emailInput.value.trim();
    if (value === "") {
        emailError.textContent = "Please fill this blanket!";
        emailInput.classList.add("invalid");
        emailInput.classList.remove("valid");
        return false;
    } else if (!emailRegex.test(value)) {
        emailError.textContent = "Please write a valid email (ex. user@gmail.com)!";
        emailInput.classList.add("invalid");
        emailInput.classList.remove("valid");
        return false;
    } else {
        emailError.textContent = "";
        emailInput.classList.remove("invalid");
        emailInput.classList.add("valid");
        return true;
    }
}

function validateMessage() {
    const value = messageInput.value.trim();
    if (value === "") {
        messageError.textContent = "Please fill this blanket!";
        messageInput.classList.add("invalid");
        messageInput.classList.remove("valid");
        return false;
    } else if (value.length < 10) {
        messageError.textContent = "Please write a valid message that is longer than at least 10 charachters!";
        messageInput.classList.add("invalid");
        messageInput.classList.remove("valid");
        return false;
    } else {
        messageError.textContent = "";
        messageInput.classList.remove("invalid");
        messageInput.classList.add("valid");
        return true;
    }
}

nameInput.addEventListener("input", validateName);
phoneInput.addEventListener("input", validatePhone);
emailInput.addEventListener("input", validateEmail);
messageInput.addEventListener("input", validateMessage);

contactForm.addEventListener("submit", function (e) {
    e.preventDefault(); 

    const nameValid = validateName();
    const phoneValid = validatePhone();
    const emailValid = validateEmail();
    const messageValid = validateMessage();

    if (nameValid && phoneValid && emailValid && messageValid) {
        showSuccessPopup();
    }
});

function showSuccessPopup() {
    const popup = document.getElementById("successPopup");
    popup.classList.add("show");

    document.getElementById("closePopup").addEventListener("click", () => {
        popup.classList.remove("show");
        contactForm.reset();
        location.reload();
        [nameInput, phoneInput, emailInput, messageInput].forEach(input => input.classList.remove("valid"));
    });
}

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

const toTopBtn = document.getElementById("toTopBtn");

window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        toTopBtn.classList.add("show");
    } else {
        toTopBtn.classList.remove("show");
    }
});

toTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
