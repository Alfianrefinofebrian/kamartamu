// Toggle hamburger menu
function toggleMenu() {
    document.querySelector(".navbar ul").classList.toggle("active");
}

// Carousel
const track = document.getElementById("track");
const slides = document.querySelectorAll(".carousel img");
let currentIndex = 0;
let isDragging = false;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID;
let currentSlide = 0;

// Event desktop
track.addEventListener("mousedown", dragStart);
track.addEventListener("mouseup", dragEnd);
track.addEventListener("mouseleave", dragEnd);
track.addEventListener("mousemove", dragAction);

// Event mobile
track.addEventListener("touchstart", dragStart);
track.addEventListener("touchend", dragEnd);
track.addEventListener("touchmove", dragAction);

function dragStart(e) {
    isDragging = true;
    startPos = getPositionX(e);
    animationID = requestAnimationFrame(animation);
    track.style.transition = "none";
}

function dragAction(e) {
    if (!isDragging) return;
    const currentPosition = getPositionX(e);
    currentTranslate = prevTranslate + currentPosition - startPos;
}

function dragEnd() {
    cancelAnimationFrame(animationID);
    isDragging = false;

    const movedBy = currentTranslate - prevTranslate;

    // geser lebih dari 100px → next / prev slide
    if (movedBy < -100 && currentIndex < slides.length - 1) currentIndex++;
    if (movedBy > 100 && currentIndex > 0) currentIndex--;

    setPositionByIndex();
}

function getPositionX(e) {
    return e.type.includes("mouse") ? e.pageX : e.touches[0].clientX;
}

function animation() {
    setSliderPosition();
    if (isDragging) requestAnimationFrame(animation);
}

function setSliderPosition() {
    track.style.transform = `translateX(${currentTranslate}px)`;
}

function setPositionByIndex() {
    currentTranslate = currentIndex * -window.innerWidth;
    prevTranslate = currentTranslate;
    track.style.transition = "transform 0.4s ease-out";
    setSliderPosition();
}

// Atur ulang ukuran slide
window.addEventListener("resize", () => {
    setPositionByIndex();
});
