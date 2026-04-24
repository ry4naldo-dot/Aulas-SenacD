let hambbtn = document.getElementById('menu-btn');
let mobileMenu = document.getElementById('mobile-menu');

hambbtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
})