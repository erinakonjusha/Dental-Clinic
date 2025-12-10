const hamburger = document.getElementById('hamburger');
const nav = document.querySelector('.nav');

hamburger.addEventListener('click', () => {
    nav.classList.toggle('active');
    hamburger.classList.toggle('open');
});

const form = document.getElementById("appointmentForm");

const nameInput = document.getElementById("fullname");
const numberInput = document.getElementById("number");
const reasonSelect = document.getElementById("reasonforvisit");
const dateInput = document.getElementById("date");
const timeSelect = document.getElementById("time");

const nameError = document.getElementById("nameError");
const numberError = document.getElementById("numberError");
const reasonError = document.getElementById("reasonError");
const dateError = document.getElementById("dateError");
const timeError = document.getElementById("timeError");

const phoneRegex = /^[0-9]{6,}$/;

function validateName() {
    if (nameInput.value.trim() === "") {
        nameError.textContent = "Please fill this blanket!";
        nameInput.classList.add("invalid");
        return false;
    }
    nameError.textContent = "";
    nameInput.classList.remove("invalid");
    nameInput.classList.add("valid");
    return true;
}

function validateNumber() {
    const value = numberInput.value.trim();
    if (value === "") {
        numberError.textContent = "Please fill this blanket!";
        numberInput.classList.add("invalid");
        return false;
    }
    if (!phoneRegex.test(value)) {
        numberError.textContent = "Please write a valid number that contains at least 6 numbers!";
        numberInput.classList.add("invalid");
        return false;
    }
    numberError.textContent = "";
    numberInput.classList.remove("invalid");
    numberInput.classList.add("valid");
    return true;
}


function validateReason() {
    if (reasonSelect.value === "") {
        reasonError.textContent = "Please select the reason of visit!";
        reasonSelect.classList.add("invalid");
        return false;
    }
    reasonError.textContent = "";
    reasonSelect.classList.remove("invalid");
    reasonSelect.classList.add("valid");
    return true;
}


function validateDate() {
    if (dateInput.value === "") {
        dateError.textContent = "Please choose your preferred date!";
        dateInput.classList.add("invalid");
        return false;
    }

    let today = new Date();
    let selected = new Date(dateInput.value);

    if (selected < today) {
        dateError.textContent = "You should choose a current date!";
        dateInput.classList.add("invalid");
        return false;
    }

    dateError.textContent = "";
    dateInput.classList.remove("invalid");
    dateInput.classList.add("valid");
    return true;
}


function validateTime() {
    if (timeSelect.value === "") {
        timeError.textContent = "Please choose your preferred time!";
        timeSelect.classList.add("invalid");
        return false;
    }
    timeError.textContent = "";
    timeSelect.classList.remove("invalid");
    timeSelect.classList.add("valid");
    return true;
}

nameInput.addEventListener("input", validateName);
numberInput.addEventListener("input", validateNumber);
reasonSelect.addEventListener("change", validateReason);
dateInput.addEventListener("change", validateDate);
timeSelect.addEventListener("change", validateTime);

form.addEventListener("submit", (e) => {
    e.preventDefault(); 
    
    const valid =
        validateName() &&
        validateNumber() &&
        validateReason() &&
        validateDate() &&
        validateTime();

    if (!valid) return;

    showSuccessPopup();
});

function showSuccessPopup() {
    const popup = document.getElementById("successPopup");
    popup.classList.add("show");

    document.getElementById("closePopup").addEventListener("click", () => {
        popup.classList.remove("show");
        form.reset();
        location.reload();
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

