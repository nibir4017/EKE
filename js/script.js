
const mobile_icons_container = document.querySelector(".mobile-icons-container");
const nav_header = document.querySelector("header");
const nav_ul = document.querySelector(".nav_ul")
const toggleNavbar = () => {
   
   nav_header.classList.toggle("active");
   
};

mobile_icons_container.addEventListener("click", () => toggleNavbar());
