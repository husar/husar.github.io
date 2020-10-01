$(document).ready(function() {

    /*Zoskrolovanie po kliknuti na tlacidlo o nas*/
    $('.js--scroll-to-about-us').click(function(){
       $('html, body').animate({scrollTop: $('.js--section-about-us').offset().top}, 1000); 
    });
    
    /*Zoskrolovanie po kliknuti na tlacidlo ukazky*/
    $('.js--scroll-to-playlist').click(function(){
       $('html, body').animate({scrollTop: $('.js--section-playlist').offset().top}, 1000); 
    });
    
    /*Zoskrolovanie po kliknuti na tlacidlo Posledne akcie*/
    $('.js--scroll-to-last-events').click(function(){
       $('html, body').animate({scrollTop: $('.js--section-last-events').offset().top}, 1000); 
    });
    
    /*Animacia pri skrolovani*/
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeIn');
    },{
        offset: '50%'
    });
    
});
