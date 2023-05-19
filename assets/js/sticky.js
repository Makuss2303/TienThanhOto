const header = document.querySelector("#header");
const toggleClass = "is-sticky";
window.addEventListener("scroll", () => {
const currentScroll = window.pageYOffset;
if (currentScroll > 150) {
    header.classList.add(toggleClass);
} else {
    header.classList.remove(toggleClass);
}
});

(function() {
    let mybutton = document.getElementById("backTop-btn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
            mybutton.style.display = "flex";
        } else {
            mybutton.style.display = "none";
        }
    }
  
    window.topFunction = function() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0;
    }
})();