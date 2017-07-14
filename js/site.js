// init ScrollMagic Controller
var controller = new ScrollMagic.Controller();

// Scene Handler
var scene1 = new ScrollMagic.Scene({
  triggerElement: "#portfolio", // point of execution
  duration: $(window).height() - 25,
  triggerHook: 0, // don't trigger until #pinned-trigger1 hits the top of the viewport
  reverse: true // allows the effect to trigger when scrolled in the reverse direction
  // tweenChanges: true;
})
.setPin("#projects") // the element we want to pin
.addTo(controller);

// Scene2 Handler
var scene2 = new ScrollMagic.Scene({
  triggerElement: "#resume", // point of execution
  duration: 150 // pin the element for a total of 400px
})
.setPin("#resumeGraphic") // the element we want to pin
.addTo(controller);


  $(".icon").html('<svg width="74px" height="76px" viewBox="0 0 74 76" style="fill:white"><g><path d="M65.6,55.1c0-6,0-12,0-18h0c0-11.4,0-22.7,0-34.1c0-2.3-0.6-2.9-2.9-2.9C49.8,0,36.8,0,23.9,0c-0.8,0-1.7,0.4-2.3,0.9      c-5,5.1-10,10.2-15,15.4c-0.5,0.5-0.8,1.3-0.8,2c0,12.3,0,24.5,0,36.8H0V76h74V55.1H65.6z M22.6,8.6v8.8h-9.1c-0.1-0.1-0.1-0.2-0.2-0.3C16.5,14.1,19.7,11.2,22.6,8.6z M11.2,20.9h15V5.4h34.1v49.7H11.2V20.9z"/></g></svg>');
