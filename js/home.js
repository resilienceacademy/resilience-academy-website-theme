// var homeController = new ScrollMagic.Controller;
// var staggerSecene = new ScrollMagic.Scene({
//     triggerElement: "#baseActionsHolder",
//     triggerHook: 0.7
// })
// .setClassToggle("#baseActions", "hidden")
// .addTo(homeController);

var header = document.querySelector('header');
var body = document.body;
function toggleMenu(){
    if(!header.classList.contains('nav-open')){
        header.classList.add('nav-open');
        body.classList.add('locked');
    }
    else{
        header.classList.remove('nav-open');
        body.classList.remove('locked');
    }
}