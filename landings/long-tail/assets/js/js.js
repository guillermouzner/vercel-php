$(function(){
	$('.ellos__slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    $(".modal-close").click(function(){
        $(".modal").fadeOut();
        $('#video1').get(0).pause();
        $('#video1').get(0).currentTime = 0;
        $('#video2').get(0).pause();
        $('#video2').get(0).currentTime = 0;
        $('#video3').get(0).pause();
        $('#video3').get(0).currentTime = 0;
        $("body").removeClass("noscroll");
    });
    
    $(".show-conquitos").click(function(e){
        e.preventDefault();
        $(".coquitos").slideDown();
        $("body").addClass("noscroll");
    });
    
    $(".show-presencial").click(function(e){
        e.preventDefault();
        $(".presencial").slideDown();
        $("body").addClass("noscroll");
    });
    
    $(".show-remoto").click(function(e){
        e.preventDefault();
        $(".remoto").slideDown();
        $("body").addClass("noscroll");
    });
    
    /*$(".show-solicitar").click(function(e){
        e.preventDefault();
        $(".solicitar").slideDown();
        $("body").addClass("noscroll");
    });*/
    
    function alert3pm() {
        $(".solicitar").slideDown();
        $("body").addClass("noscroll");
    }
    
    //setTimeout(alert3pm, 50000);
    
    ScrollReveal().reveal('.hero');
    ScrollReveal().reveal('.hero__title', {delay: 350, duration: 900, distance: '50%', origin: 'left'});
    ScrollReveal().reveal('.pix-intro__title', {delay: 750, duration: 900, distance: '50%', origin: 'left'});
    ScrollReveal().reveal('.pix-intro__cellphone', {delay: 750, duration: 900, distance: '50%', origin: 'bottom'});
    ScrollReveal().reveal('.pix-intro__images', {delay: 750, duration: 900, distance: '50%', origin: 'right'});
    ScrollReveal().reveal('.tickets', {delay: 250});
    ScrollReveal().reveal('.asesoramiento', {delay: 500, duration: 900, distance: '50%', origin: 'bottom'});
    ScrollReveal().reveal('.testimonial__box', {delay: 150});
    ScrollReveal().reveal('.testimonial__pic', {delay: 450});
    ScrollReveal().reveal('.testimonial-media__grid', {delay: 550, duration: 900, distance: '50%', origin: 'bottom', scale: 0.40});
    ScrollReveal().reveal('.que-es__pic img', {delay: 750, duration: 900, distance: '10%', origin: 'left', scale: 0.85});
    ScrollReveal().reveal('.que-es__box:nth-child(1)', {delay: 650, duration: 900, distance: '15%', origin: 'right', scale: 0.55});
    ScrollReveal().reveal('.que-es__box:nth-child(2)', {delay: 650, duration: 900, distance: '30%', origin: 'right', scale: 0.55});
    ScrollReveal().reveal('.beneficios__item:nth-child(1)', {delay: 250, duration: 900, distance: '50%', origin: 'bottom'});
    ScrollReveal().reveal('.beneficios__item:nth-child(2)', {delay: 400, duration: 900, distance: '50%', origin: 'bottom'});
    ScrollReveal().reveal('.beneficios__item:nth-child(3)', {delay: 550, duration: 900, distance: '50%', origin: 'bottom'});
    ScrollReveal().reveal('.beneficios__item:nth-child(4)', {delay: 700, duration: 900, distance: '50%', origin: 'bottom'});
    ScrollReveal().reveal('.beneficios__pictures', {delay: 500, duration: 900, distance: '40%', origin: 'bottom', scale: 0.15});
    ScrollReveal().reveal('.quiero', {delay: 250});
    ScrollReveal().reveal('.como__grid:nth-child(1)', {delay: 300, duration: 900, distance: '50%', origin: 'left'});
    ScrollReveal().reveal('.como__grid:nth-child(2)', {delay: 400, duration: 900, distance: '50%', origin: 'right'});
    ScrollReveal().reveal('.como__grid:nth-child(3)', {delay: 500, duration: 900, distance: '50%', origin: 'left'});
    ScrollReveal().reveal('.multimedia__grid', {delay: 450, duration: 900, distance: '50%', origin: 'bottom'});
    ScrollReveal().reveal('.esperando__head', {delay: 450, duration: 900, distance: '20%', origin: 'top', scale: 0.40});
    ScrollReveal().reveal('.esperando__text', {delay: 450});  
    ScrollReveal().reveal('.dudas__title', {delay: 450, duration: 900, distance: '40%', origin: 'right'});
    ScrollReveal().reveal('.dudas .green-btn', {delay: 600, duration: 900, distance: '30%', origin: 'bottom', scale: 0.55, x: 20});
    ScrollReveal().reveal('.dudas__list', {delay: 700});
    ScrollReveal().reveal('.final', {delay: 400, duration: 900, distance: '50%', origin: 'bottom'});
    ScrollReveal().reveal('footer', {delay: 300});
	//
	//ScrollReveal().reveal('.head_card h2', {delay: 350, duration: 900, distance: '50%', origin: 'left'});
	//ScrollReveal().reveal('.head_card p', {delay: 350, duration: 900, distance: '50%', origin: 'left'});
	ScrollReveal().reveal('#kp_modernize', {delay: 500, duration: 900, distance: '50%', origin: 'bottom'});
});