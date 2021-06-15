import "./navigation.js";
import "./faq.js";
import { pageScrolls } from "./pagescrolls.js";
import { homepage } from "./home.js";
import { homepage_v2 } from "./home-v2.js";
import { homeIntro } from "./home-intro.js";
import { homeIntro_v2 } from "./home-intro-v2.js";
import { peakCardsNav } from "./peak-cards-nav.js";
import { slider } from "./slider.js";
import { foundersPage } from "./founders-coins.js";
import { teamCoin } from "./team-coins.js";

  // Homepage script only runs on Homepage (Duh)
  if ( document.body.classList.contains( 'home' ) ){
    if ( document.body.classList.contains( 'home-intro-v2' ) ) {
      window.addEventListener('load', () => {
        homeIntro_v2();
        homepage_v2();
      })
    } else {
      window.addEventListener('load', () => {
        homepage();
        homeIntro();
      })
    }
  };
  if (document.querySelector('.card')) {
    peakCardsNav();
  };
  if (document.querySelector('.testimonial-carousel')) {
    slider(true);
  };
  if (document.querySelector('.founders')) {
    foundersPage();
  };
  if (document.querySelector('.team-header-coin')) {
    teamCoin();
  };
  pageScrolls();