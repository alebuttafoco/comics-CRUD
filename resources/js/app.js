require('./bootstrap');

// IMPLEMENTA LO GRAB-SCROLLING
const scrollContainer = document.querySelector(".cards");
scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});