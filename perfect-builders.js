document.addEventListener('DOMContentLoaded', () => {
    let slides = document.querySelectorAll('.carousel');
    M.Carousel.init(slides, {indicators: false, fullWidth: false, noWrap: false, duration: 400, padding: 45, dist: -50,});
});

document.addEventListener('DOMContentLoaded', () => {
    let colapPanel = document.querySelectorAll(".collapsible");
    M.Collapsible.init(colapPanel, {inDuration: 400, outDuration: 300})
});

document.addEventListener('DOMContentLoaded', () => {
    let scrollspy = document.querySelectorAll(".scrollspy");
    M.ScrollSpy.init(scrollspy, {throttle: 1500})
});

document.addEventListener('DOMContentLoaded', () => {
    let sidenav = document.querySelector(".sidenav");
    M.Sidenav.init(sidenav, {}) 
});

let year = document.getElementById("year");
let date = new Date();
let getYear = date.getFullYear();
year.innerHTML = `<i>&copy</i> From 2020 - ${getYear}`;

document.addEventListener('DOMContentLoaded', () => {
    let modal = document.querySelectorAll(".modal");
    M.Modal.init(modal, { 
        opacity: 0.4
    });
});

    const tl = new TimelineMax();
    let mainImg = document.querySelector(".main-image");
    let mainText = document.getElementById("main-text");
    let mainIcon = document.getElementById("builders-icon");
    tl.fromTo(mainImg, 1.2, {y: -1000, opacity: 0}, {y: 0, opacity: 1, ease: "easeOutQuad"})
    .fromTo(mainText, 1.2, {x: -300, opacity: 0}, {x: 0, opacity: 1, ease: "easeOutBack"}, '+=.5')
    .fromTo(mainIcon, 1.1, {x: -100, opacity: 0}, {x: 0, opacity: 1, ease: "easeOutBack"}, '-=2.2');

let openOrder = document.querySelectorAll("createorder");
openOrder.addEventListener('click', () => {
    let modal = document.getElementById("ordermodal");
    modal.style.display = "block";
});