import React, { useEffect, useRef, useState } from "react";

const HeroSlider = () => {
  const sliderRef = useRef(null);
  const dotsRef = useRef(null);
  const [slides, setSlides] = useState([]);
  const [currentIndex, setCurrentIndex] = useState(1);
  const [isTransitioning, setIsTransitioning] = useState(false);
  const autoSlideRef = useRef(null);

  const images = ["/images/bg1.webp", "/images/bg2.webp", "/images/bg3.webp"];

  // setup clones
  useEffect(() => {
    if (!sliderRef.current) return;

    let originalSlides = images.map((src, i) => ({ id: i, src }));

    const firstClone = { id: "first-clone", src: images[0] };
    const lastClone = { id: "last-clone", src: images[images.length - 1] };

    const newSlides = [lastClone, ...originalSlides, firstClone];
    setSlides(newSlides);

    setCurrentIndex(1);
  }, []);

  // auto slide
  useEffect(() => {
    resetAutoSlide();
    return () => clearInterval(autoSlideRef.current);
  }, [currentIndex, slides]);

  const resetAutoSlide = () => {
    clearInterval(autoSlideRef.current);
    autoSlideRef.current = setInterval(() => {
      goToSlide(currentIndex + 1);
    }, 4000);
  };

  const goToSlide = (index) => {
    if (isTransitioning) return;
    setIsTransitioning(true);
    setCurrentIndex(index);
  };

  const handleTransitionEnd = () => {
    setIsTransitioning(false);
    if (slides[currentIndex]?.id === "first-clone") {
      setCurrentIndex(1);
    } else if (slides[currentIndex]?.id === "last-clone") {
      setCurrentIndex(slides.length - 2);
    }
  };

  return (
    <section className="relative min-h-screen pt-16 overflow-hidden">
      <div className="relative w-full h-[calc(100vh-64px)] overflow-hidden">
        {/* Wrapper */}
        <div
          ref={sliderRef}
          className="flex w-full h-full"
          style={{
            transform: `translateX(-${currentIndex * 100}%)`,
            transition: isTransitioning ? "transform 0.7s ease-in-out" : "none",
          }}
          onTransitionEnd={handleTransitionEnd}
        >
          {slides.map((slide, idx) => (
            <img
              key={idx}
              src={slide.src}
              alt={`slide-${idx}`}
              className="
                w-full h-full flex-shrink-0
                object-cover md:object-fill 
                sm:object-cover
              "
            />
          ))}
        </div>

        {/* Dots */}
        <div
          ref={dotsRef}
          className="absolute bottom-6 left-1/2 -translate-x-1/2 flex"
        >
          {images.map((_, i) => (
            <span
              key={i}
              onClick={() => goToSlide(i + 1)}
              className={`w-2 h-2 mx-1 rounded-full cursor-pointer inline-block ${
                i === currentIndex - 1 ? "bg-white" : "bg-white/50"
              }`}
            ></span>
          ))}
        </div>

        {/* Zones */}
        <div
          className="absolute inset-y-0 left-0 w-1/3 cursor-pointer"
          onClick={() => goToSlide(currentIndex - 1)}
        ></div>
        <div
          className="absolute inset-y-0 right-0 w-1/3 cursor-pointer"
          onClick={() => goToSlide(currentIndex + 1)}
        ></div>
      </div>
    </section>
  );
};

export default HeroSlider;
