const slider = document.getElementById("hero-slider");
let slides = slider.querySelectorAll(".slide");
const dotsContainer = document.getElementById("slider-dots");

let currentIndex = 1; // karena kita tambahkan clone di awal
let autoSlide;
let isTransitioning = false;

// clone first & last
const firstClone = slides[0].cloneNode(true);
const lastClone = slides[slides.length - 1].cloneNode(true);

firstClone.id = "first-clone";
lastClone.id = "last-clone";

slider.appendChild(firstClone);
slider.insertBefore(lastClone, slides[0]);

slides = slider.querySelectorAll(".slide");

// set awal posisi ke slide[1] (asli pertama)
slider.style.transform = `translateX(-${currentIndex * 100}%)`;

// buat dots
for (let i = 0; i < slides.length - 2; i++) {
  const dot = document.createElement("span");
  dot.className =
    "dot w-3 h-3 mx-1 rounded-full bg-white/50 cursor-pointer inline-block";
  dot.addEventListener("click", () => goToSlide(i + 1));
  dotsContainer.appendChild(dot);
}

function updateDots() {
  const dots = dotsContainer.querySelectorAll(".dot");
  dots.forEach((dot, i) => {
    dot.classList.remove("bg-white");
    dot.classList.add("bg-white/50");
    if (i === currentIndex - 1) {
      dot.classList.add("bg-white");
      dot.classList.remove("bg-white/50");
    }
  });
}

function goToSlide(index) {
  if (isTransitioning) return;
  isTransitioning = true;
  slider.style.transition = "transform 0.7s ease-in-out";
  currentIndex = index;
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  updateDots();
}

function nextSlide() {
  goToSlide(currentIndex + 1);
}

function prevSlide() {
  goToSlide(currentIndex - 1);
}

// transition end → cek clone
slider.addEventListener("transitionend", () => {
  isTransitioning = false;
  if (slides[currentIndex].id === "first-clone") {
    slider.style.transition = "none";
    currentIndex = 1;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  }
  if (slides[currentIndex].id === "last-clone") {
    slider.style.transition = "none";
    currentIndex = slides.length - 2;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  }
});

// auto slide
function resetAutoSlide() {
  clearInterval(autoSlide);
  autoSlide = setInterval(nextSlide, 4000);
}

// klik kiri/kanan
document.getElementById("left-zone").addEventListener("click", prevSlide);
document.getElementById("right-zone").addEventListener("click", nextSlide);

// init
updateDots();
resetAutoSlide();
