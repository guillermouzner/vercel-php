$(function(){
    
    const lazyContent = new LazyLoad({
      use_native: true // <-- there you go
    });
    
    const lazyBackground = new LazyLoad({
      // DON'T PASS use_native: true HERE
    });

    $("#myWords").wordsrotator({
    animationIn: "animate__slideInUp",
    animationOut: "animate__slideOutUp",
    words: ['Paga altas comisiones', 'Pierde margen', 'Está limitado al efectivo', 'Pierde oportunidades', 'Tiene delay de cobros', 'Pierde por el cambio'],
    autoLoop: true,
    });
    
    const swiper = new Swiper('.nosviste__swiper', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 0,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 0,
            },
            1050: {
              slidesPerView: 4,
              spaceBetween: 0,
            },
            1150: {
              slidesPerView: 5,
              spaceBetween: 0,
            },
        },
        navigation: {
            nextEl: ".nosviste__swiper-button-next",
            prevEl: ".nosviste__swiper-button-prev",
        },
    });
    
    const swiper2 = new Swiper('.testimonials__swiper', {
        slidesPerView: 1,
        loop: true,
        autoHeight: true,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".testimonials__swiper-button-next",
            prevEl: ".testimonials__swiper-button-prev",
        },
    });
    
    const swiper3 = new Swiper('.marcas__swiper', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 0,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 0,
            },
            1050: {
              slidesPerView: 4,
              spaceBetween: 0,
            },
            1150: {
              slidesPerView: 5,
              spaceBetween: 0,
            },
        },
        navigation: {
            nextEl: ".marcas__swiper-button-next",
            prevEl: ".marcas__swiper-button-prev",
        },
    });

    $(".hamburguer").click(function(){
      $(this).toggleClass("open");
      $(".navigation").slideToggle();
      $(".navigation li a").click(function(){
        $(".hamburguer").removeClass("open");
        $(".navigation").slideUp();
      });
    });
    
    $("a.anchorLink").anchorAnimate();
    
    const swiper4 = new Swiper('.prensa-swiper', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 0,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 0,
            },
            1050: {
              slidesPerView: 4,
              spaceBetween: 0,
            },
            1150: {
              slidesPerView: 5,
              spaceBetween: 0,
            },
        },
        navigation: {
            nextEl: ".prensa__swiper-button-next",
            prevEl: ".prensa__swiper-button-prev",
        },
    });
    
    $(".modal-close").click(function(){
        $(".modal").fadeOut();
        $('#video2').get(0).pause();
        $('#video2').get(0).currentTime = 0;
        $('#video3').get(0).pause();
        $('#video3').get(0).currentTime = 0;
        $("body").removeClass("noscroll");
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
    
    $(".close-trigger").on('click', function(e){
		$(".modal").fadeOut();
        $('#video2').get(0).pause();
        $('#video2').get(0).currentTime = 0;
        $('#video3').get(0).pause();
        $('#video3').get(0).currentTime = 0;
		$("body").removeClass("noscroll");
	}).on('click', 'div', function(e) {
		// clicked on descendant div
		e.stopPropagation();
	});
    
    /*HOME*/
    ScrollReveal().reveal('.header__home', {delay: 700, origin: 'top', distance: '150px'});
    ScrollReveal().reveal('.hero', {delay: 500, origin: 'bottom', distance: '100%'});
    ScrollReveal().reveal('.hero__subtitle', {delay: 600, origin: 'top', distance: '150%', duration: 1200});
    ScrollReveal().reveal('.hero__title', {delay: 700, origin: 'bottom', distance: '50%', duration: 500});
    ScrollReveal().reveal('.hero__image', {delay: 900, origin: 'right', distance: '50%', duration: 500});
    /**/
    ScrollReveal().reveal('.intro', {delay: 900, origin: 'bottom', distance: '100%'});
    ScrollReveal().reveal('.intro__content', {delay: 1000, origin: 'left', distance: '150%', duration: 500});
    ScrollReveal().reveal('.intro__cta', {delay: 1100, origin: 'right', distance: '150%', duration: 500, mobile: false});
    ScrollReveal().reveal('.intro__cta', {delay: 900, origin: 'bottom', distance: '50%', duration: 500, desktop: false});
    /**/
    ScrollReveal().reveal('.beneficios__item-title', {delay: 700, origin: 'left', distance: '150%', duration: 1100, mobile: false});
    ScrollReveal().reveal('.beneficios__item:nth-child(2), .beneficios__item:nth-child(3)', {delay: 800, origin: 'bottom', distance: '150%', duration: 1000, mobile: false});
    ScrollReveal().reveal('.beneficios__item:nth-child(4), .beneficios__item:nth-child(5), .beneficios__item:nth-child(6)', {delay: 900, origin: 'bottom', distance: '150%', duration: 1000, mobile: false});
    ScrollReveal().reveal('.beneficios__item:nth-child(7), .beneficios__item:nth-child(8), .beneficios__item:nth-child(9)', {delay: 1000, origin: 'bottom', distance: '150%', duration: 1000, mobile: false});
    ScrollReveal().reveal('.beneficios__cta .btn', {delay: 500, origin: 'right', distance: '150%', duration: 800, mobile: false});
    /**/
    ScrollReveal().reveal('.dicen', {delay: 500, origin: 'bottom', distance: '100%', mobile: false});
    ScrollReveal().reveal('.dicen__title', {delay: 700, origin: 'bottom', distance: '100%', mobile: false});
    ScrollReveal().reveal('.dicen__media', {delay: 1000, origin: 'bottom', distance: '100%', mobile: false});
    /**/
    ScrollReveal().reveal('.nosviste__title', {delay: 600, origin: 'left', distance: '150%', duration: 1100, mobile: false});
    ScrollReveal().reveal('.nosviste__swiper', {delay: 700, mobile: false});
    ScrollReveal().reveal('.nosviste__cta .btn', {delay: 800, origin: 'right', distance: '150%', duration: 1100, mobile: false});
    /**/
    ScrollReveal().reveal('.testimonials', {delay: 500, origin: 'bottom', distance: '50%', mobile: false});
    /**/
    ScrollReveal().reveal('.marcas', {delay: 500, origin: 'left', distance: '100%', duration: 1000, mobile: false});
    /**/
    ScrollReveal().reveal('.notequedes__image', {delay: 700, duration: 500, scale: 1.6, mobile: false});
    ScrollReveal().reveal('.notequedes__title', {delay: 800, origin: 'left', distance: '130%', duration: 1000, mobile: false});
    ScrollReveal().reveal('.notequedes__subtitle', {delay: 900, origin: 'right', distance: '100%', duration: 1000, mobile: false});
    ScrollReveal().reveal('.notequedes__text, .notequedes__btn', {delay: 1000, origin: 'bottom', distance: '130%', duration: 900, mobile: false});
    /**/
    ScrollReveal().reveal('.contacto__grid', {delay: 500, duration: 700, scale: 1.3, mobile: false});
    /*INTERNAS*/
    ScrollReveal().reveal('.hero-internal', {delay: 500, origin: 'bottom', distance: '100%'});
    ScrollReveal().reveal('.hero-internal__title', {delay: 700, origin: 'left', distance: '100%', duration: 1000});
    ScrollReveal().reveal('.hero-internal__subtitle', {delay: 800, origin: 'left', distance: '100%', duration: 1000});
    ScrollReveal().reveal('.hero-interal__image', {delay: 900, scale: '1.3', duration: 700});
    /**/
    ScrollReveal().reveal('.pioneros', {delay: 700, origin: 'bottom', distance: '100%'});
    /**/
    ScrollReveal().reveal('.empresas', {delay: 700, origin: 'bottom', distance: '100%'});
    ScrollReveal().reveal('.suscribir__image', {delay: 600, scale: '1.3', duration: 700});
    ScrollReveal().reveal('.suscribir__btn', {delay: 800, origin: 'top', distance: '100%', duration: 900});
    /**/
    ScrollReveal().reveal('.simplifica', {delay: 1000, origin: 'bottom', distance: '100%'});
    ScrollReveal().reveal('.apis__image', {delay: 700, scale: '1.3', duration: 700});
    ScrollReveal().reveal('.apis__content', {delay: 800, origin: 'left', distance: '100%', duration: 900});
    ScrollReveal().reveal('.sectores__list-item:nth-child(1)', {delay: 500, origin: 'bottom', distance: '100%', duration: 800, mobile: false});
    ScrollReveal().reveal('.sectores__list-item:nth-child(2)', {delay: 700, origin: 'bottom', distance: '100%', duration: 800, mobile: false});
    ScrollReveal().reveal('.sectores__list-item:nth-child(3)', {delay: 900, origin: 'bottom', distance: '100%', duration: 800, mobile: false});
    ScrollReveal().reveal('.sectores__list-item:nth-child(4)', {delay: 1100, origin: 'bottom', distance: '100%', duration: 800, mobile: false});
    ScrollReveal().reveal('.sectores__list-item:nth-child(5)', {delay: 1300, origin: 'bottom', distance: '100%', duration: 800, mobile: false});
    ScrollReveal().reveal('.sectores__list-item:nth-child(6)', {delay: 1500, origin: 'bottom', distance: '100%', duration: 800, mobile: false});
    /**/
    ScrollReveal().reveal('.prensa-logos', {delay: 700, origin: 'bottom', distance: '100%'});
});

/*ANCHOR*/
jQuery.fn.anchorAnimate = function(settings) {

 	settings = jQuery.extend({
		speed : 800
	}, settings);	
	return this.each(function(){
		var caller = this
		$(caller).click(function (event) {	
			//event.preventDefault()
			var locationHref = window.location.href
			var elementClick = $(caller).attr("href")
			  var destination = $(elementClick).offset().top;
  			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
  				window.location.hash = elementClick
  			});
		  	return false;
		})
	})
}