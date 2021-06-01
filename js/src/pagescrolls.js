import gsap from "gsap/gsap-core";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

gsap.to('.peak-logo-svg path', {
  transformOrigin: "50% 50%",
  rotationZ: 1800,
  scrollTrigger: {
    trigger: '#page',
    start: "0% 0%",
    end: "100% center",
    scrub: true
  },
})