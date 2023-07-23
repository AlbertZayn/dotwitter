let CreateAccBtn = document.querySelector(".modal-btn");
let modalStep1 = document.querySelector(".modal-step1");

let modalStep1Btn = document.querySelector(".modal-step1-btn");
let modalStep2 = document.querySelector(".modal-step2");

CreateAccBtn.addEventListener("click", () => {
    modalStep1.style.display = "block";
});

modalStep1Btn.addEventListener("click", () => {
    modalStep2.style.display = "block";
});
