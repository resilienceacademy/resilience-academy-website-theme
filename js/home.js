var homeController = new ScrollMagic.Controller;
var staggerSecene = new ScrollMagic.Scene({
    triggerElement: "#baseActionsHolder",
    triggerHook: 0.7
})
.setClassToggle("#baseActions", "hidden")
.addTo(homeController);