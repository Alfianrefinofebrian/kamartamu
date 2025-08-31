// public/js/app.js

// === Navbar toggle ===
const menuBtn = document.getElementById('menu-btn');
const menu = document.getElementById('menu');

if (menuBtn) {
  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
}

// === Hero slider ===
let current = 1;
setInterval(() => {
  const slide1 = document.getElementById('slide1');
  const slide2 = document.getElementById('slide2');
  if (slide1 && slide2) {
    slide1.classList.toggle('opacity-0');
    slide2.classList.toggle('opacity-0');
  }
}, 9000);


