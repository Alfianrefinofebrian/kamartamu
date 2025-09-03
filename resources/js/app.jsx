import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom"; // ⬅️ WAJIB
import Navbar from "./Navbar";
import HeroSlider from "./hero-slider"; 
import VillasPage from "./villas"; 
import PropertyDetail from "./components/villas/propertydetail";  
import "../css/app.css";

export default function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<VillasPage />} />
        <Route path="/property/:id" element={<PropertyDetail />} />
      </Routes>
    </Router>
  );
}

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
      <App />  {/* ⬅️ Ganti ini, jangan langsung VillasPage */}
    </React.StrictMode>
  );
}
