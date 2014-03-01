$(document).ready(function() {
    $(".slider-link").on("click", function(event) {
        var target = $(this).attr("href");
        goto(target, this);
        event.preventDefault();
    });

    $('.flexslider').flexslider({
        animation: "slide",
        pauseOnAction: true,
        pauseOnHover: true,
        touch: true,
        slideshowSpeed: 4000,
        animationSpeed: 500, 
    });
});
 
function goto(id, t){
    //animate to the div id.
    $(".slide-wrapper").animate({"left": -($(id).position().left)}, 1200);
 
    // remove "active" class from all links inside #nav
    $('#nav a').removeClass('active');
 
    // add active class to the current link
    $(t).addClass('active');
}

$(function() {
    $('ul.slide-thumb li').hover(function(){
    $(this).find('img').animate({top:'182px'},{queue:false,duration:500});
    }, function(){
    $(this).find('img').animate({top:'0px'},{queue:false,duration:500});
    });
});