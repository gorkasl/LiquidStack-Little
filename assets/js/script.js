gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
let smoother = ScrollSmoother.create({
  smooth: .8,
  effects: true
});

smoother.scrollTo("", false, "center center");

