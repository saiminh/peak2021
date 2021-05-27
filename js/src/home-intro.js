import { gsap } from 'gsap';

function homeIntro(){
  var source = document.querySelector('.peak-branding'),
  destination = document.querySelector('body');
  
  let logoClone = source.cloneNode(true);
  logoClone.classList.add('logo-clone');
  destination.appendChild(logoClone);
  
  let tlIntro = gsap.timeline({ paused: false });
  tlIntro.set('.peak-branding.logo-clone', {
    
  })
}
homeIntro();
export { homeIntro };