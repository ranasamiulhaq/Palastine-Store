window.addEventListener("resize", handleNavbar);
document.addEventListener("DOMContentLoaded", handleNavbar);
const nav_expand = document.getElementById("nav_expand");
const mainNav = document.getElementById("mainNav");



function handleNavbar(){
    console.log("enter")
    if (window.innerWidth > 1300){
        nav_expand.classList.add("navbar-expand");
        mainNav.classList.remove("px-4");
        mainNav.classList.remove("py-3");
        
    } else {
        nav_expand.classList.remove("navbar-expand");
        mainNav.classList.add("px-4");
        mainNav.classList.add("py-3");
    }
}