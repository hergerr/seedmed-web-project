window.onscroll = function () {
    stickHamburger();
}

var hamburger = document.getElementById("hamburger");

var sticky = hamburger.offsetTop;

function stickHamburger() {
    if (window.pageYOffset > sticky) {
        hamburger.classList.add("sticky");
    } else {
        hamburger.classList.remove("sticky");
    }
}