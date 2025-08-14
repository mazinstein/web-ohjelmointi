const menuToggle = document.getElementById("menu-toggle");
const navLinks = document.getElementById("nav-links");

menuToggle.addEventListener("click", () => {
  navLinks.classList.toggle("show");
});

// fade-in
const fadeElements = document.querySelectorAll(".fade-in");
function checkFade() {
  const triggerBottom = window.innerHeight * 0.85;
  fadeElements.forEach(el => {
    const boxTop = el.getBoundingClientRect().top;
    if (boxTop < triggerBottom) {
      el.classList.add("show");
    }
  });
}
window.addEventListener("scroll", checkFade);
window.addEventListener("load", checkFade);
