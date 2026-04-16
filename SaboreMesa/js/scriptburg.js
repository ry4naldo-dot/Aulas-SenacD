let burguer = document.getElementById('menuBtn');
let mobileMenu = document.getElementById('mobileMenu');

burguer.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
});
