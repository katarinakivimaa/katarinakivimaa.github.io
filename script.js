gsap.registerPlugin(Flip);

const links = document.querySelectorAll(".nav-item a");
const activeNav = document.querySelector(".active-nav");

links.forEach((link) => {
    link.addEventListener("click", () => {
    //nav to blue
    gsap.to(links, {color:"#F8F8F8"});
    if (document.activeElement === link){
    gsap.to(link, {color:"#000000"});
    }
    
    //i like to move it move it
    const state = Flip.getState(activeNav);
    link.appendChild(activeNav);
    Flip.from(state, {
        duration: 0.5,
        absolute: true,
    });
    
});
});




// function toggleMenu() {
//     const menu = document.querySelector(".menu-links");
//     const icon = document.querySelector(".hamburger-icon");
//     menu.classList.toggle("open");
//     icon.classList.toggle("open");
// };


