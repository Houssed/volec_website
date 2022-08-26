// change navbar stylles on scroll
const nav = document.querySelector('nav');

window.addEventListener('scroll', () => {
    if (window.scrollY >= 62) {
        nav.classList.add('active-nav');
    } else {
        nav.classList.remove('active-nav')
    }

})

//contact
const inputs = document.querySelectorAll(".input");

function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}

inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
});
