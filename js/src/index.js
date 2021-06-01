import "./navigation.js";
import "./faq.js";
import { homepage } from "./home.js";
import { homeIntro } from "./home-intro.js";
import { peakCardsNav } from "./peak-cards-nav.js";
import { slider } from "./slider.js";
import { foundersPage } from "./founders-coins.js";

  // Homepage script only runs on Homepage (Duh)
  if ( document.querySelector('.peak-homepage') ){
    homeIntro();
    homepage();
  };
  if (document.querySelector('.card')) {
    peakCardsNav();
  };
  if (document.querySelector('.testimonial-carousel')) {
    slider(true);
  }
  if (document.querySelector('.founders')) {
    foundersPage();
  }