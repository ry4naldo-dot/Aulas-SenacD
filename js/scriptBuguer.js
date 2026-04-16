let btn = document.getElementById('menuBtn');
let mobileMenu = document.getElementById('mobileMenu');

btn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
})