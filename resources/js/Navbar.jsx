import React, { useState, useRef } from "react";

export default function Navbar() {
  const [open, setOpen] = useState(false);
  const headerRef = useRef(null);

  const scrollToSection = (id) => {
    const el = document.getElementById(id);
    if (el && headerRef.current) {
      const headerOffset = headerRef.current.offsetHeight;
      const extraOffset = -40; // 👉 kasih tambahan biar lebih turun sedikit
      const offsetTop = el.offsetTop - headerOffset - extraOffset;

      window.scrollTo({
        top: offsetTop,
        behavior: "smooth",
      });

      setOpen(false);
    }
  };

  return (
    <header
      ref={headerRef}
      className="w-full bg-[#FFFBF0] border-b border-gray-200 fixed top-0 left-0 z-50 transition-all duration-300"
    >
      <div className="max-w-7xl mx-auto px-6 flex justify-between items-center h-16">
        <a href="#" className="transition-opacity hover:opacity-80">
          <img
            src="/images/logo.png"
            alt="Kamar Tamu Logo"
            className="h-12 w-auto"
          />
        </a>

        <nav className="hidden lg:flex items-center space-x-12 text-[15px] font-medium text-gray-900">
          <button
            onClick={() => scrollToSection("benefits")}
            className="hover:text-gray-600 transition-colors duration-200"
          >
            Benefits
          </button>
          <button
            onClick={() => scrollToSection("villas")}
            className="hover:text-gray-600 transition-colors duration-200"
          >
            Top Properties
          </button>
          <button
            onClick={() => scrollToSection("booking")}
            className="hover:text-gray-600 transition-colors duration-200"
          >
            Booking Cepat
          </button>
          <button
            onClick={() => scrollToSection("contact")}
            className="hover:text-gray-600 transition-colors duration-200"
          >
            Contact Us
          </button>
        </nav>

        {/* Hamburger */}
        <button
          onClick={() => setOpen(!open)}
          className="lg:hidden flex flex-col space-y-1.5 focus:outline-none transition-transform duration-200 hover:scale-105"
        >
          <span
            className={`block w-6 h-0.5 bg-gray-800 transition-all duration-300 ${
              open ? "rotate-45 translate-y-2" : ""
            }`}
          />
          <span
            className={`block w-6 h-0.5 bg-gray-800 transition-all duration-300 ${
              open ? "opacity-0" : ""
            }`}
          />
          <span
            className={`block w-6 h-0.5 bg-gray-800 transition-all duration-300 ${
              open ? "-rotate-45 -translate-y-2" : ""
            }`}
          />
        </button>
      </div>

      {/* Mobile Menu */}
      <div
        className={`lg:hidden bg-[#FFFBF0] border-t border-gray-200 transition-all duration-300 ${
          open ? "max-h-64 opacity-100" : "max-h-0 opacity-0 overflow-hidden"
        }`}
      >
        <nav className="flex flex-col space-y-4 py-4 px-6 text-[15px] font-medium text-gray-900">
          <button
            onClick={() => scrollToSection("benefits")}
            className="hover:text-gray-600 transition-colors duration-200 text-left"
          >
            Benefits
          </button>
          <button
            onClick={() => scrollToSection("villas")}
            className="hover:text-gray-600 transition-colors duration-200 text-left"
          >
            Top Properties
          </button>
          <button
            onClick={() => scrollToSection("booking")}
            className="hover:text-gray-600 transition-colors duration-200 text-left"
          >
            Booking Cepat
          </button>
          <button
            onClick={() => scrollToSection("contact")}
            className="hover:text-gray-600 transition-colors duration-200 text-left"
          >
            Contact Us
          </button>
        </nav>
      </div>
    </header>
  );
}
