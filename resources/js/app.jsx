import React from "react";
import ReactDOM from "react-dom/client";
import Navbar from "./Navbar";
import HeroSlider from "./hero-slider"; 
import VillasPage from "./villas"; 
import "../css/app.css";

// Navbar
const navbarElement = document.getElementById("navbar");
if (navbarElement) {
  ReactDOM.createRoot(navbarElement).render(
    <React.StrictMode>
      <Navbar />
    </React.StrictMode>
  );
}

// Hero
const heroElement = document.getElementById("hero");
if (heroElement) {
  ReactDOM.createRoot(heroElement).render(
    <React.StrictMode>
      <HeroSlider />
    </React.StrictMode>
  );
}

// Villas
const villasElement = document.getElementById("villas");
if (villasElement) {
  ReactDOM.createRoot(villasElement).render(
    <React.StrictMode>
      <VillasPage />
    </React.StrictMode>
  );
}
