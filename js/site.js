

// init
var controller = new ScrollMagic.Controller();

// define movement of panels
var wipeAnimation = new TimelineMax()
    // .fromTo("#portfolio", 1, {y: "0"}, {y: "-100%", ease: Linear.easeNone})
    // .to("#projects", 1, {y: "-100%", ease: Linear.easeNone})
    .to("#portfolio", 1, {y: "-100%", ease: Linear.easeNone})
    .fromTo("#resume",    1, {y:  "-50%"}, {y: "-100%", ease: Linear.easeNone})

// create scene to pin and link animation
new ScrollMagic.Scene({
    triggerElement: "#allContent",
    triggerHook: "onLeave",
    duration: "400%"
})
    .setPin("#allContent")
    .setTween(wipeAnimation)
    .addTo(controller);
// // init ScrollMagic Controller
// var controller = new ScrollMagic.Controller();
//
// // Scene Handler
// var scene0 = new ScrollMagic.Scene({
//   triggerElement:"#intro",
//   duration: $(window).height(),
//   triggerHook: 0,
//   reverse: true
// })
// .setPin("#introContent")
// .addTo()
// var scene1 = new ScrollMagic.Scene({
//   triggerElement: "#portfolio",
//   duration: $(window).height() - 25,
//   triggerHook: 0, // don't trigger until #pinned-trigger1 hits the top of the viewport
//   reverse: true // allows the effect to trigger when scrolled in the reverse direction
//   // tweenChanges: true;
// })
// .setPin("#projects") // the element we want to pin
// .addTo(controller);
//
// // Scene2 Handler
// var scene2 = new ScrollMagic.Scene({
//   triggerElement: "#resume", // point of execution
//   duration: 150 // pin the element for a total of 400px
// })
// .setPin("#resumeGraphic") // the element we want to pin
// .addTo(controller);


  $(".icon").html('<svg width="125.9px" height="125.3px" style="fill:white"><style type="text/css">.st0{opacity:0.5;}</style><g class="st0"><path d="M117.9,99.1H111c0-13.2,0-26.4,0-39.6h0c0-18.2,0-36.5,0-54.7c0-3.7-1-4.7-4.7-4.7C85.5,0,64.7,0,43.9,0 c-1.2,0-2.8,0.6-3.7,1.5c-8.1,8.1-16.1,16.4-24,24.7c-0.8,0.8-1.3,2.2-1.3,3.3c-0.1,23.2-0.1,46.5,0,69.7H8c-4.4,0-8,3.6-8,8v10.1 c0,4.4,3.6,8,8,8h109.9c4.4,0,8-3.6,8-8v-10.1C125.9,102.7,122.3,99.1,117.9,99.1z M41.8,13.8v14.1H27.2c-0.1-0.2-0.2-0.3-0.3-0.5 C32.1,22.7,37.2,18,41.8,13.8z M23.5,33.5h24.1V8.6h54.8v90.5H23.5V33.5z"/></g></svg>');

  // <svg width="184.3px" height="161.8px" viewBox="0 0 184.3 161.8" style="fill:white"><g><path d="M150.8,119c0-14.3,0-28.6,0-43c0,0,0,0,0,0c0-23.3,0-46.6,0-69.9c0-4.8-1.3-6-6-6C118.3,0.1,91.8,0,65.2,0
  // 			c-1.6,0-3.6,0.8-4.7,1.9C50.2,12.3,40,22.8,29.9,33.4c-1,1-1.7,2.8-1.7,4.2c-0.1,27.1-0.1,54.3-0.1,81.4H0v42.8h184.3V119H150.8z
  // 			 M62.5,17.7c0,5.2,0,11.6,0,18c-6.4,0-12.5,0-18.6,0c-0.1-0.2-0.2-0.4-0.3-0.6C50.1,29,56.7,23,62.5,17.7z M39.2,42.8
  // 			c10.4,0,20.5,0,30.8,0C70,32,70,21.7,70,11c23.6,0,46.7,0,70,0c0,36.1,0,72,0,108H39.2C39.2,93.7,39.2,68.4,39.2,42.8z"/>
  // 	</g></svg>
