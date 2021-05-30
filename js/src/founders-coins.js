import { gsap } from "gsap";

function foundersPage(){
  let allCoins = document.querySelectorAll( '.card-preview' );
  //gsap.set( '.founder-photograph', { rotationY: -90 } )
  for ( let i = 0; i < allCoins.length; i++ ) {
    let thisCoin = allCoins[i].querySelector( '.founder-coin' );
    let thisPhoto = allCoins[i].querySelector( '.founder-photograph' );
    let coinFlip = gsap.timeline( { paused: true } )
      .to( thisCoin, { rotationY: 90, duration: .333, ease: "cubic.inOut" })
      .from( thisPhoto, { rotationY: -90, duration: .333, ease: "cubic.inOut" }, .333) ;
    allCoins[i].addEventListener( 'mouseover', () => {
      coinFlip.play().timeScale( 2.5 );
    } )
    allCoins[i].addEventListener( 'mouseleave', () => {
      coinFlip.reverse();
    } )
  }
  gsap.to( '.founder-exit .founder-coin::after', {
    rotationZ: 360, duration: 4, repeat: -1
  } )
  
  let founders = document.querySelector( '.founders' );
  let saasBtn = document.querySelector( '.founder-filter-saas' );
  let pmBtn = document.querySelector( '.founder-filter-pm' );
  let exitBtn = document.querySelector( '.founder-filter-exits' );
  saasBtn.addEventListener( 'click', () => {
    saasBtn.classList.toggle('toggled');
    founders.classList.toggle('saas-filtered')
  } );
  pmBtn.addEventListener( 'click', () => {
    pmBtn.classList.toggle('toggled');
    founders.classList.toggle('pm-filtered')
  } );
  exitBtn.addEventListener( 'click', () => {
    exitBtn.classList.toggle('toggled');
    founders.classList.toggle('exit-filtered')
  } );
}
export { foundersPage };