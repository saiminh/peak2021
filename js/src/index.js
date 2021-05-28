import "./navigation.js";
import { homepage } from "./home.js";
import { peakCardsNav } from "./peak-cards-nav.js";
import { slider } from "./slider.js";

  // Homepage script only runs on Homepage (Duh)
  if ( document.querySelector('.peak-homepage') ){
    homepage();
  };
  if (document.querySelector('.card')) {
    peakCardsNav();
  };
  if (document.querySelector('.testimonial-carousel')) {
    slider(true);
  }