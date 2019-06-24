$(document).ready(function() {

	// WOW
	$(function() {
		new WOW().init();
	});
	// WOW end

	// AOS
	AOS.init({
		offset: 1000,
		delay: 0,
		duration: 800,
		once: true
	});
	// AOS end

	$(function() {
		var headerWidth = $('.header').height();
		$('.main-banner').css('margin-top', headerWidth);
	});

	// START paricles init
	$(function() {

		particlesJS("particles-js", {
			particles: {
				number: { value: 34, density: { enable: true, value_area: 800 } },
				color: { value: "#298eb9" },
				shape: {
					type: "triangle",
					stroke: { width: 0, color: "#000000" },
					polygon: { nb_sides: 5 },
					image: { src: "img/github.svg", width: 100, height: 100 }
				},
				opacity: {
					value: 0.07891476416322726,
					random: true,
					anim: { enable: false, speed: 1, opacity_min: 0.05, sync: false }
				},
				size: {
					value: 50,
					random: true,
					anim: { enable: false, speed: 10, size_min: 0.1, sync: false }
				},
				line_linked: {
					enable: false,
					distance: 20,
					color: "#ffffff",
					opacity: 0.2762016745712954,
					width: 2.2
				},
				move: {
					enable: true,
					speed: 4,
					direction: "none",
					random: false,
					straight: false,
					out_mode: "out",
					bounce: false,
					attract: { enable: false, rotateX: 600, rotateY: 1200 }
				}
			},
			interactivity: {
				detect_on: "canvas",
				events: {
					onhover: { enable: true, mode: "grab" },
					onclick: { enable: true, mode: "repulse" },
					resize: true
				},
				modes: {
					grab: { distance: 400, line_linked: { opacity: 1 } },
					bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
					repulse: { distance: 200, duration: 0.4 },
					push: { particles_nb: 4 },
					remove: { particles_nb: 2 }
				}
			},
			retina_detect: true
		});
	});
	// END paricles init

	// cooperation 

	$('.box a').click(function(e){
		e.preventDefault();

		var attrhref = $(this).attr('href');
		$('.advertising__main').removeClass('advertising__main-active');
		$(attrhref).addClass('advertising__main-active');
	});

	// START revelator options
	$(function() {

		Revealator.effects_padding = '-500';
		

	});
	// END revelator options


	// hamburger menu
	$('.hamburger').click(function(e) {

		e.preventDefault();

		var href = $(this).attr('href');

		$('body').toggleClass('body-overflow-hidden');
		$(this).toggleClass('is-active');
		$(this).toggleClass('hamburger__active');
		$(href).toggleClass('hamburger-menu__active');
		$('.hamburger-menu__overlay').toggleClass('hamburger-menu__overlay__active');

	})
	// hamburger menu end


	// mobile menu
	$(function() {

		$('.mobile-menu__btn').click(function (e) {
			e.preventDefault();
			$('.mobile-menu__item').addClass('mobile-menu__item__active');
			$('.hamburger-menu__overlay').addClass('hamburger-menu__overlay__active');
			$('.hamburger').css('z-index', '9');
		})

		$('.mobile-menu__close').click(function (e) {
			e.preventDefault();
			$('.mobile-menu__item').removeClass('mobile-menu__item__active');
			$('.hamburger-menu__overlay').removeClass('hamburger-menu__overlay__active');
			$('.hamburger').css('z-index', '99999');
		})

	});
	// mobile menu end

	// menu
	$(function() {
		$('#main-menu').superfish({
			animation:   {opacity:'show',height:'show'},
			animationOut:   {opacity:'hide',height:'hide'},
			delay: 200
		});
	});
	// menu end


	// open menu tabs
	$('.open-menu__link a').hover(function(e) {

		e.preventDefault();

		var href = $(this).attr('href');

		$('.open-menu__tab').removeClass('open-menu__tab__active');
		$(href).addClass('open-menu__tab__active');
		$(href).addClass('fadeIn');

	});
	// open menu tabs end


	// search click
	$('.search a').click(function(e) {

		e.preventDefault();
		var thsHref = $(this).attr('href');

		$(thsHref).toggleClass('search__item__active');
		$(thsHref).parent('.search__wrap').addClass('search__wrap__active');

		$(document).mouseup(function (e){
			var div = $(".search__item");
			if (!div.is(e.target) && div.has(e.target).length === 0) {
				div.removeClass('search__item__active');
				$(thsHref).parent('.search__wrap').removeClass('search__wrap__active');
			}
		});

	})
	// search click end

	$(function(){
		var owl = $('.about__banner');

		owl.owlCarousel({
			loop: true,
			items:2
		});
	});


	// main banner slider
	$(function() {
		var owl = $('.main-banner__owl');

		owl.owlCarousel({
			dots: true,
			dotsContainer: '#custom-dots',
			items: 1,
			loop: true,
			smartSpeed: 800,
			autoplay: true,
			autoplayTimeout: 4000
		});

		// custom dots
		$('.owl-dot').click(function () {
			owl.trigger('to.owl.carousel', [$(this).index(), 300]);
		});
		// custom dots end


		// scroll slide
		// owl.on('mousewheel', '.owl-stage', function (e) {
		// 	if (e.deltaY>0) {
		// 		owl.trigger('next.owl');
		// 	} else {
		// 		owl.trigger('prev.owl');
		// 	}
		// 	e.preventDefault();
		// });
		// scroll slide end

		
		// arrows
		$('.banner-arrow__left').click(function(e) {
			e.preventDefault();
			owl.trigger('prev.owl.carousel', [300]);
		})

		$('.banner-arrow__right').click(function(e) {
			e.preventDefault();
			owl.trigger('next.owl.carousel');
		})
		// arrows end

	});
	// main banner slider end

	// START floor map tabs
	$('.floor-map-tabs__link a').click(function(e) {

		new WOW().init();

		e.preventDefault();

		var attrHref = $(this).attr('href');

		$('.floor-map-tabs__link a').removeClass('floor-map-tabs__link__active');
		$(this).addClass('floor-map-tabs__link__active');

		$('.floor-map-tabs__accordion').removeClass('floor-map-tabs__accordion__active');
		$(attrHref).addClass('floor-map-tabs__accordion__active');
		$(attrHref).addClass('fadeIn');

	})
	// END floor map tabs

	// START floor map zoom

	// zoom in
	$('.floor-plus').click(function(e) {

		e.preventDefault();

		$('.floor-map__right img').css('transform', 'scale(1.3)');

	});
	// zoom in end


	// zoom out
	$('.floor-minus').click(function(e) {

		e.preventDefault();

		$('.floor-map__right img').css('transform', 'scale(1)');

	});
	// zoom out end

	// END floor map zoom


	// accordion tabs
	$('.floor-map-tabs__accordion li').click(function(e) {

		e.preventDefault();

		$(this).find('.accordion__arrow').toggleClass('accordion__arrow__rotate');
		$(this).find('.floor-map__submenu').slideToggle(400);

		$('.floor-map__submenu li').click(function() {
			return false;
		})

	});

	// accordion tabs end

	// map open close
	$('.autopsy-floor-map a').click(function(e) {

		e.preventDefault();

		var attrhref = $(this).attr('href');
		$(attrhref).slideToggle(400);
		$(this).toggleClass('floor-map__toggle');

		if ($(this).hasClass('floor-map__toggle')) {
			$(this).html('<img src="images/location.png" alt="Закрыть карту этажей"> Закрыть карту этажей');

		}

		else {
			$(this).html('<img src="images/location.png" alt="Открыть карту этажей"> Открыть карту этажей');
		}

	});
	// map open close end

	// jobs tabs

	$('.jobs__tabs a').click(function(e){

		e.preventDefault();

		var attrhref = $(this).attr('href');
		$(attrhref).slideToggle(400)

		if ($(this).hasClass('active')) {
			$(this).removeClass('active').addClass('dis');
		}else {
			$(this).removeClass('dis').addClass('active');
		}

		if ($('.jobs__tabs a').hasClass('dis')) {
			$(this).html('<span>-</span>');
		}else {
			$(this).html('<span>+</span>');
		}
	});


	// discounts owl
	$(function() {

		var owl = $('.discount-slide__owl');
		owl.owlCarousel({
			items: 3,
			loop: true,
			dots: false,
			autoplay: true,
			autoplayTimeout: 3500,

			responsive : {
				0 : {
					items: 1
				},

				600 : {
					items: 2
				},

				1024 : {
					items: 3
				}
			}
		});
		// arrows
		$('.dicsount-arrow__left').click(function(e) {
			e.preventDefault();
			owl.trigger('prev.owl.carousel', [300]);
		})

		$('.dicsount-arrow__right').click(function(e) {
			e.preventDefault();
			owl.trigger('next.owl.carousel');
		})
		// arrows end


	});
	// discounts owl end

	// development owl
	$(function() {

		var owl = $('.developments-slide');
		owl.owlCarousel({
			items: 1,
			loop: false,
			dots: false,
			nav: false,
			autoWidth: true,
			margin: 15,
		});

		// arrows
		$('.development-arrow__left').click(function(e) {
			e.preventDefault();
			owl.trigger('prev.owl.carousel', [300]);
		})

		$('.development-arrow__right').click(function(e) {
			e.preventDefault();
			owl.trigger('next.owl.carousel');
		})
		// arrows end

	});
	// development owl end


	// about baizar owl
	$(function() {

		var owl = $('.about-baizar__content');
		owl.owlCarousel({
			items: 1,
			loop: true,
			dots: false,
			smartSpeed: 1000,
		});

		// arrows
		$('.about-arrow__left').click(function(e) {
			e.preventDefault();
			owl.trigger('prev.owl.carousel', [300]);
		})

		$('.about-arrow__right').click(function(e) {
			e.preventDefault();
			owl.trigger('next.owl.carousel');
		})
		// arrows end

	});
	// about baizar owl end


	// partners owl
	$(function() {

		var owl = $('.partners__owl');
		owl.owlCarousel({
			loop: true,
			dots: false,

			responsive : {
				992 : {
					items: 6
				},

				600 : {
					items: 4
				},

				460 : {
					items: 3
				},

				400 : {
					items: 2
				},

				0 : {
					items: 1
				}
			}
		});

		// arrows
		$('.partners-arrow__left').click(function(e) {
			e.preventDefault();
			owl.trigger('prev.owl.carousel', [300]);
		})

		$('.partners-arrow__right').click(function(e) {
			e.preventDefault();
			owl.trigger('next.owl.carousel');
		})
		// arrows end

	});
	// partners owl end

});


$(document).ready(function(){

  // owl carousel

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    autoplay: false,
    dots: false,
    navText: ['<i class="fas fa-arrow-left prev"></i>','<i class="fas fa-arrow-right next"></i>'],
  }).on('changed.owl.carousel', syncPosition2);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : 4,
    dots: false,
    nav: true,
    margin: 20,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100,
    navText: ['<i class="fas fa-arrow-left prev-dot"></i>','<i class="fas fa-arrow-right next-dot"></i>'],
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });


  // slider counter 

  $('#sync1').on('initialized.owl.carousel changed.owl.carousel', function(e) {
    if (!e.namespace)  {
      return;
    }
    var carousel = e.relatedTarget;
    $('.slider').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
  }).owlCarousel({
    items: 1,
    loop:true,
    margin:0,
    nav:true
  });

  $('.info__head_tab-link a').click(function(e){

  	e.preventDefault();
  	var attrHref = $(this).attr('href');

  	$('.info__head_tab-link a').removeClass('info__head_tab-link_active');
  	$(this).addClass('info__head_tab-link_active');

  	$('.info__body-text').removeClass('info__body-active');
  	$(attrHref).addClass('info__body-active');
  	$(attrHref).addClass('fadeInLeft')
  });


});


// mobile menu

function showMenu(mobileMenu){ 
    if ($(mobileMenu).css('display') == 'none'){ 
        $(mobileMenu).animate({height: 'show'}, 500); 
    }else{     
        $(mobileMenu).animate({height: 'hide'}, 500); 
    }} 

	//end mobile menu 

// function show(job__1){ 
//     if ($(job__1).css('display') == 'none'){ 
//         $(job__1).animate({height: 'show'}, 500); 
//     }else{     
//         $(job__1).animate({height: 'hide'}, 500); 
//     }} 
