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
			items: 4,
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
			autoplay: true,
			autoplayTimeout: 1500,
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

  // show mobile menu link tabs
  $('.mobile-menu a').click(function(e){
  	e.preventDefault();
  	var attr = $(this).attr('href');
  	if($(attr).css('display') == 'none'){
  		$(attr).animate({height: 'show'}, 500); 
  	}else{
  		$(attr).animate({height: 'hide'}, 500); 
  	}
  });

});
/*MAP*/
/* Map floors */




var floorsMap1 = document.querySelector(".floor-map-tabs__link a:nth-child(2)");

floorsMap1.onclick = function()  {

       
  document.getElementsByClassName("map1")[0].classList.add("map-active");
  document.getElementsByClassName("map2")[0].classList.remove("map-active");
  document.getElementsByClassName("map3")[0].classList.remove("map-active");
   
  
};

var floorsMap2 = document.querySelector(".floor-map-tabs__link a:nth-child(3)");

floorsMap2.onclick = function()  {

       
  document.getElementsByClassName("map1")[0].classList.remove("map-active");
  document.getElementsByClassName("map2")[0].classList.add("map-active");
  document.getElementsByClassName("map3")[0].classList.remove("map-active");
   
  
};

var floorsMap3 = document.querySelector(".floor-map-tabs__link a:nth-child(4)");

floorsMap3.onclick = function()  {

       
  document.getElementsByClassName("map1")[0].classList.remove("map-active");
  document.getElementsByClassName("map2")[0].classList.remove("map-active");
  document.getElementsByClassName("map3")[0].classList.add("map-active");
   
  
};

/*Map floors end*/

/*Map list end*/

/*MAP  hovers*/


document.getElementsByClassName("respect")[0].onmouseover = function(){
	document.getElementsByClassName("respect")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("respect")[0].onmouseout = function(){
	document.getElementsByClassName("respect")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("respect")[1].onmouseover = function(){
	document.getElementsByClassName("respect")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("respect")[1].onmouseout = function(){
	document.getElementsByClassName("respect")[1].style.cssText = "fill:#D2D3D5";

}



document.getElementsByClassName("outlet__city")[0].onmouseover = function(){
	document.getElementsByClassName("outlet__city")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("outlet__city")[0].onmouseout = function(){
	document.getElementsByClassName("outlet__city")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("outlet__city")[1].onmouseover = function(){
	document.getElementsByClassName("outlet__city")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("outlet__city")[1].onmouseout = function(){
	document.getElementsByClassName("outlet__city")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("intertop")[0].onmouseover = function(){
	document.getElementsByClassName("intertop")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("intertop")[0].onmouseout = function(){
	document.getElementsByClassName("intertop")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("intertop")[1].onmouseover = function(){
	document.getElementsByClassName("intertop")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("intertop")[1].onmouseout = function(){
	document.getElementsByClassName("intertop")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("flo")[0].onmouseover = function(){
	document.getElementsByClassName("flo")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("flo")[0].onmouseout = function(){
	document.getElementsByClassName("flo")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("flo")[1].onmouseover = function(){
	document.getElementsByClassName("flo")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("flo")[1].onmouseout = function(){
	document.getElementsByClassName("flo")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("cabani")[0].onmouseover = function(){
	document.getElementsByClassName("cabani")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("cabani")[0].onmouseout = function(){
	document.getElementsByClassName("cabani")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("cabani")[1].onmouseover = function(){
	document.getElementsByClassName("cabani")[1].style.cssText = "fill:#52658C";

}
document.getElementsByClassName("cabani")[1].onmouseout = function(){
	document.getElementsByClassName("cabani")[1].style.cssText = "fill:#D2D3D5";

}


/*#52658C END*/

document.getElementsByClassName("iclean")[0].onmouseover = function(){
	document.getElementsByClassName("iclean")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("iclean")[0].onmouseout = function(){
	document.getElementsByClassName("iclean")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("iclean")[1].onmouseover = function(){
	document.getElementsByClassName("iclean")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("iclean")[1].onmouseout = function(){
	document.getElementsByClassName("iclean")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("beeline")[0].onmouseover = function(){
	document.getElementsByClassName("beeline")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("beeline")[0].onmouseout = function(){
	document.getElementsByClassName("beeline")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("beeline")[1].onmouseover = function(){
	document.getElementsByClassName("beeline")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("beeline")[1].onmouseout = function(){
	document.getElementsByClassName("beeline")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("atelie")[0].onmouseover = function(){
	document.getElementsByClassName("atelie")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("atelie")[0].onmouseout = function(){
	document.getElementsByClassName("atelie")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("atelie")[1].onmouseover = function(){
	document.getElementsByClassName("atelie")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("atelie")[1].onmouseout = function(){
	document.getElementsByClassName("atelie")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("terminal")[0].onmouseover = function(){
	document.getElementsByClassName("terminal")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("terminal")[0].onmouseout = function(){
	document.getElementsByClassName("terminal")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("terminal")[1].onmouseover = function(){
	document.getElementsByClassName("terminal")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("terminal")[1].onmouseout = function(){
	document.getElementsByClassName("terminal")[1].style.cssText = "fill:#D2D3D5";

}




document.getElementsByClassName("trolley")[0].onmouseover = function(){
	document.getElementsByClassName("trolley")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("trolley")[0].onmouseout = function(){
	document.getElementsByClassName("trolley")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("trolley")[1].onmouseover = function(){
	document.getElementsByClassName("trolley")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("trolley")[1].onmouseout = function(){
	document.getElementsByClassName("trolley")[1].style.cssText = "fill:#D2D3D5";

}




document.getElementsByClassName("fun_party")[0].onmouseover = function(){
	document.getElementsByClassName("fun_party")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("fun_party")[0].onmouseout = function(){
	document.getElementsByClassName("fun_party")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("fun_party")[1].onmouseover = function(){
	document.getElementsByClassName("fun_party")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("fun_party")[1].onmouseout = function(){
	document.getElementsByClassName("fun_party")[1].style.cssText = "fill:#D2D3D5";

}



document.getElementsByClassName("terminal")[0].onmouseover = function(){
	document.getElementsByClassName("terminal")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("terminal")[0].onmouseout = function(){
	document.getElementsByClassName("terminal")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("terminal")[1].onmouseover = function(){
	document.getElementsByClassName("terminal")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("terminal")[1].onmouseout = function(){
	document.getElementsByClassName("terminal")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("kazpost")[0].onmouseover = function(){
	document.getElementsByClassName("kazpost")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("kazpost")[0].onmouseout = function(){
	document.getElementsByClassName("kazpost")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("kazpost")[1].onmouseover = function(){
	document.getElementsByClassName("kazpost")[1].style.cssText = "fill:#0098DA";

}
document.getElementsByClassName("kazpost")[1].onmouseout = function(){
	document.getElementsByClassName("kazpost")[1].style.cssText = "fill:#D2D3D5";

}

/*#0098DA END*/


document.getElementsByClassName("zelenaya_apteka")[0].onmouseover = function(){
	document.getElementsByClassName("zelenaya_apteka")[1].style.cssText = "fill:#71A72B";

}
document.getElementsByClassName("zelenaya_apteka")[0].onmouseout = function(){
	document.getElementsByClassName("zelenaya_apteka")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("zelenaya_apteka")[1].onmouseover = function(){
	document.getElementsByClassName("zelenaya_apteka")[1].style.cssText = "fill:#71A72B";

}
document.getElementsByClassName("zelenaya_apteka")[1].onmouseout = function(){
	document.getElementsByClassName("zelenaya_apteka")[1].style.cssText = "fill:#D2D3D5";

}




document.getElementsByClassName("lift")[0].onmouseover = function(){
	document.getElementsByClassName("lift")[1].style.cssText = "fill:#71A72B";

}
document.getElementsByClassName("lift")[0].onmouseout = function(){
	document.getElementsByClassName("lift")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("lift")[1].onmouseover = function(){
	document.getElementsByClassName("lift")[1].style.cssText = "fill:#71A72B";

}
document.getElementsByClassName("lift")[1].onmouseout = function(){
	document.getElementsByClassName("lift")[1].style.cssText = "fill:#D2D3D5";

}

document.querySelectorAll(".toilet").onmouseover = function(){
	document.querySelectorAll(".toilet").style.cssText = "fill:#71A72B";

}
document.querySelectorAll(".toilet").onmouseout = function(){
	document.querySelectorAll(".toilet").style.cssText = "fill:#D2D3D5";
}




document.getElementsByClassName("wardrobe")[0].onmouseover = function(){
	document.getElementsByClassName("wardrobe")[1].style.cssText = "fill:#71A72B";

}
document.getElementsByClassName("wardrobe")[0].onmouseout = function(){
	document.getElementsByClassName("wardrobe")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("wardrobe")[1].onmouseover = function(){
	document.getElementsByClassName("wardrobe")[1].style.cssText = "fill:#71A72B";

}
document.getElementsByClassName("wardrobe")[1].onmouseout = function(){
	document.getElementsByClassName("wardrobe")[1].style.cssText = "fill:#D2D3D5";

}





/*#71A72B END*/

document.getElementsByClassName("honey")[0].onmouseover = function(){
	document.getElementsByClassName("honey")[1].style.cssText = "fill:#A8CF45";

}
document.getElementsByClassName("honey")[0].onmouseout = function(){
	document.getElementsByClassName("honey")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("honey")[1].onmouseover = function(){
	document.getElementsByClassName("honey")[1].style.cssText = "fill:#A8CF45";

}
document.getElementsByClassName("honey")[1].onmouseout = function(){
	document.getElementsByClassName("honey")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("detskii_mir")[0].onmouseover = function(){
	document.getElementsByClassName("detskii_mir")[1].style.cssText = "fill:#A8CF45";

}
document.getElementsByClassName("detskii_mir")[0].onmouseout = function(){
	document.getElementsByClassName("detskii_mir")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("detskii_mir")[1].onmouseover = function(){
	document.getElementsByClassName("detskii_mir")[1].style.cssText = "fill:#A8CF45";

}
document.getElementsByClassName("detskii_mir")[1].onmouseout = function(){
	document.getElementsByClassName("detskii_mir")[1].style.cssText = "fill:#D2D3D5";

}

/*#A8CF45 END*/


document.getElementsByClassName("ltb")[0].onmouseover = function(){
	document.getElementsByClassName("ltb")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("ltb")[0].onmouseout = function(){
	document.getElementsByClassName("ltb")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("ltb")[1].onmouseover = function(){
	document.getElementsByClassName("ltb")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("ltb")[1].onmouseout = function(){
	document.getElementsByClassName("ltb")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("ds_damat")[0].onmouseover = function(){
	document.getElementsByClassName("ds_damat")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("ds_damat")[0].onmouseout = function(){
	document.getElementsByClassName("ds_damat")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("ds_damat")[1].onmouseover = function(){
	document.getElementsByClassName("ds_damat")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("ds_damat")[1].onmouseout = function(){
	document.getElementsByClassName("ds_damat")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("giovane")[0].onmouseover = function(){
	document.getElementsByClassName("giovane")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("giovane")[0].onmouseout = function(){
	document.getElementsByClassName("giovane")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("giovane")[1].onmouseover = function(){
	document.getElementsByClassName("lgiovanetb")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("giovane")[1].onmouseout = function(){
	document.getElementsByClassName("giovane")[1].style.cssText = "fill:#D2D3D5";

}



document.getElementsByClassName("koton")[0].onmouseover = function(){
	document.getElementsByClassName("koton")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("koton")[0].onmouseout = function(){
	document.getElementsByClassName("koton")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("koton")[1].onmouseover = function(){
	document.getElementsByClassName("koton")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("koton")[1].onmouseout = function(){
	document.getElementsByClassName("koton")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("ltb")[0].onmouseover = function(){
	document.getElementsByClassName("ltb")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("ltb")[0].onmouseout = function(){
	document.getElementsByClassName("ltb")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("ltb")[1].onmouseover = function(){
	document.getElementsByClassName("ltb")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("ltb")[1].onmouseout = function(){
	document.getElementsByClassName("ltb")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("colins")[0].onmouseover = function(){
	document.getElementsByClassName("colins")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("colins")[0].onmouseout = function(){
	document.getElementsByClassName("colins")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("colins")[1].onmouseover = function(){
	document.getElementsByClassName("colins")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("colins")[1].onmouseout = function(){
	document.getElementsByClassName("colins")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("glasman")[0].onmouseover = function(){
	document.getElementsByClassName("glasman")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("glasman")[0].onmouseout = function(){
	document.getElementsByClassName("glasman")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("glasman")[1].onmouseover = function(){
	document.getElementsByClassName("glasman")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("glasman")[1].onmouseout = function(){
	document.getElementsByClassName("glasman")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("enrico_marinelli")[0].onmouseover = function(){
	document.getElementsByClassName("enrico_marinelli")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("enrico_marinelli")[0].onmouseout = function(){
	document.getElementsByClassName("enrico_marinelli")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("enrico_marinelli")[1].onmouseover = function(){
	document.getElementsByClassName("enrico_marinelli")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("enrico_marinelli")[1].onmouseout = function(){
	document.getElementsByClassName("enrico_marinelli")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("lichi")[0].onmouseover = function(){
	document.getElementsByClassName("lichi")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("lichi")[0].onmouseout = function(){
	document.getElementsByClassName("lichi")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("lichi")[1].onmouseover = function(){
	document.getElementsByClassName("lichi")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("lichi")[1].onmouseout = function(){
	document.getElementsByClassName("lichi")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("ikki")[0].onmouseover = function(){
	document.getElementsByClassName("ikki")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("ikki")[0].onmouseout = function(){
	document.getElementsByClassName("ikki")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("ikki")[1].onmouseover = function(){
	document.getElementsByClassName("ikki")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("ikki")[1].onmouseout = function(){
	document.getElementsByClassName("ikki")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("mavi_jeans")[0].onmouseover = function(){
	document.getElementsByClassName("mavi_jeans")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("mavi_jeans")[0].onmouseout = function(){
	document.getElementsByClassName("mavi_jeans")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("mavi_jeans")[1].onmouseover = function(){
	document.getElementsByClassName("mavi_jeans")[1].style.cssText = "fill:#51A8B1";

}
document.getElementsByClassName("mavi_jeans")[1].onmouseout = function(){
	document.getElementsByClassName("mavi_jeans")[1].style.cssText = "fill:#D2D3D5";

}

/* fill:#51A8B1 END */



document.getElementsByClassName("code_de_vie")[0].onmouseover = function(){
	document.getElementsByClassName("code_de_vie")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("code_de_vie")[0].onmouseout = function(){
	document.getElementsByClassName("code_de_vie")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("code_de_vie")[1].onmouseover = function(){
	document.getElementsByClassName("code_de_vie")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("code_de_vie")[1].onmouseout = function(){
	document.getElementsByClassName("code_de_vie")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("missha")[0].onmouseover = function(){
	document.getElementsByClassName("missha")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("missha")[0].onmouseout = function(){
	document.getElementsByClassName("missha")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("missha")[1].onmouseover = function(){
	document.getElementsByClassName("missha")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("missha")[1].onmouseout = function(){
	document.getElementsByClassName("missha")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("rocher")[0].onmouseover = function(){
	document.getElementsByClassName("rocher")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("rocher")[0].onmouseout = function(){
	document.getElementsByClassName("rocher")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("rocher")[1].onmouseover = function(){
	document.getElementsByClassName("rocher")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("rocher")[1].onmouseout = function(){
	document.getElementsByClassName("rocher")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("wycon")[0].onmouseover = function(){
	document.getElementsByClassName("wycon")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("wycon")[0].onmouseout = function(){
	document.getElementsByClassName("wycon")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("wycon")[1].onmouseover = function(){
	document.getElementsByClassName("wycon")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("wycon")[1].onmouseout = function(){
	document.getElementsByClassName("wycon")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("nature_republic")[0].onmouseover = function(){
	document.getElementsByClassName("nature_republic")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("nature_republic")[0].onmouseout = function(){
	document.getElementsByClassName("nature_republic")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("nature_republic")[1].onmouseover = function(){
	document.getElementsByClassName("nature_republic")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("nature_republic")[1].onmouseout = function(){
	document.getElementsByClassName("nature_republic")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("asian_cosmetics")[0].onmouseover = function(){
	document.getElementsByClassName("asian_cosmetics")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("asian_cosmetics")[0].onmouseout = function(){
	document.getElementsByClassName("asian_cosmetics")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("asian_cosmetics")[1].onmouseover = function(){
	document.getElementsByClassName("asian_cosmetics")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("asian_cosmetics")[1].onmouseout = function(){
	document.getElementsByClassName("asian_cosmetics")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("neri_karra")[0].onmouseover = function(){
	document.getElementsByClassName("neri_karra")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("neri_karra")[0].onmouseout = function(){
	document.getElementsByClassName("neri_karra")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("neri_karra")[1].onmouseover = function(){
	document.getElementsByClassName("neri_karra")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("neri_karra")[1].onmouseout = function(){
	document.getElementsByClassName("neri_karra")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("inglot")[0].onmouseover = function(){
	document.getElementsByClassName("inglot")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("inglot")[0].onmouseout = function(){
	document.getElementsByClassName("inglot")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("inglot")[1].onmouseover = function(){
	document.getElementsByClassName("inglot")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("inglot")[1].onmouseout = function(){
	document.getElementsByClassName("inglot")[1].style.cssText = "fill:#D2D3D5";

}



document.getElementsByClassName("eyfel")[0].onmouseover = function(){
	document.getElementsByClassName("eyfel")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("eyfel")[0].onmouseout = function(){
	document.getElementsByClassName("eyfel")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("eyfel")[1].onmouseover = function(){
	document.getElementsByClassName("eyfel")[1].style.cssText = "fill:#F7ADAF";

}
document.getElementsByClassName("eyfel")[1].onmouseout = function(){
	document.getElementsByClassName("eyfel")[1].style.cssText = "fill:#D2D3D5";

}

/*#F7ADAF END */



document.getElementsByClassName("miniso")[0].onmouseover = function(){
	document.getElementsByClassName("miniso")[1].style.cssText = "fill:#FFCC29";

}
document.getElementsByClassName("miniso")[0].onmouseout = function(){
	document.getElementsByClassName("miniso")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("miniso")[1].onmouseover = function(){
	document.getElementsByClassName("miniso")[1].style.cssText = "fill:#FFCC29";

}
document.getElementsByClassName("miniso")[1].onmouseout = function(){
	document.getElementsByClassName("miniso")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("euromagia")[0].onmouseover = function(){
	document.getElementsByClassName("euromagia")[1].style.cssText = "fill:#FFCC29";

}
document.getElementsByClassName("euromagia")[0].onmouseout = function(){
	document.getElementsByClassName("euromagia")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("euromagia")[1].onmouseover = function(){
	document.getElementsByClassName("euromagia")[1].style.cssText = "fill:#FFCC29";

}
document.getElementsByClassName("euromagia")[1].onmouseout = function(){
	document.getElementsByClassName("euromagia")[1].style.cssText = "fill:#D2D3D5";

}



document.getElementsByClassName("vtrende_lux")[0].onmouseover = function(){
	document.getElementsByClassName("vtrende_lux")[1].style.cssText = "fill:#FFCC29";

}
document.getElementsByClassName("vtrende_lux")[0].onmouseout = function(){
	document.getElementsByClassName("vtrende_lux")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("vtrende_lux")[1].onmouseover = function(){
	document.getElementsByClassName("vtrende_lux")[1].style.cssText = "fill:#FFCC29";

}
document.getElementsByClassName("vtrende_lux")[1].onmouseout = function(){
	document.getElementsByClassName("vtrende_lux")[1].style.cssText = "fill:#D2D3D5";

}



document.getElementsByClassName("diva")[0].onmouseover = function(){
	document.getElementsByClassName("diva")[1].style.cssText = "fill:#FFCC29";

}
document.getElementsByClassName("diva")[0].onmouseout = function(){
	document.getElementsByClassName("diva")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("diva")[1].onmouseover = function(){
	document.getElementsByClassName("diva")[1].style.cssText = "fill:#FFCC29";

}
document.getElementsByClassName("diva")[1].onmouseout = function(){
	document.getElementsByClassName("diva")[1].style.cssText = "fill:#D2D3D5";

}


/* #FFCC29 END*/



document.getElementsByClassName("glo_studio")[0].onmouseover = function(){
	document.getElementsByClassName("glo_studio")[1].style.cssText = "fill:#A98F71";

}
document.getElementsByClassName("glo_studio")[0].onmouseout = function(){
	document.getElementsByClassName("glo_studio")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("glo_studio")[1].onmouseover = function(){
	document.getElementsByClassName("glo_studio")[1].style.cssText = "fill:#A98F71";

}
document.getElementsByClassName("glo_studio")[1].onmouseout = function(){
	document.getElementsByClassName("glo_studio")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("sherlock")[0].onmouseover = function(){
	document.getElementsByClassName("sherlock")[1].style.cssText = "fill:#A98F71";

}
document.getElementsByClassName("sherlock")[0].onmouseout = function(){
	document.getElementsByClassName("sherlock")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("sherlock")[1].onmouseover = function(){
	document.getElementsByClassName("sherlock")[1].style.cssText = "fill:#A98F71";

}
document.getElementsByClassName("sherlock")[1].onmouseout = function(){
	document.getElementsByClassName("sherlock")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("faber_castell")[0].onmouseover = function(){
	document.getElementsByClassName("faber_castell")[1].style.cssText = "fill:#A98F71";

}
document.getElementsByClassName("faber_castell")[0].onmouseout = function(){
	document.getElementsByClassName("faber_castell")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("faber_castell")[1].onmouseover = function(){
	document.getElementsByClassName("faber_castell")[1].style.cssText = "fill:#A98F71";

}
document.getElementsByClassName("faber_castell")[1].onmouseout = function(){
	document.getElementsByClassName("faber_castell")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("administration")[0].onmouseover = function(){
	document.getElementsByClassName("administration")[1].style.cssText = "fill:#A98F71";

}
document.getElementsByClassName("administration")[0].onmouseout = function(){
	document.getElementsByClassName("administration")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("administration")[1].onmouseover = function(){
	document.getElementsByClassName("administration")[1].style.cssText = "fill:#A98F71";

}
document.getElementsByClassName("administration")[1].onmouseout = function(){
	document.getElementsByClassName("administration")[1].style.cssText = "fill:#D2D3D5";

}

/*  #A98F71 END */


document.getElementsByClassName("anawa_kids")[0].onmouseover = function(){
	document.getElementsByClassName("anawa_kids")[1].style.cssText = "fill:#D2AE6D";

}
document.getElementsByClassName("anawa_kids")[0].onmouseout = function(){
	document.getElementsByClassName("anawa_kids")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("anawa_kids")[1].onmouseover = function(){
	document.getElementsByClassName("anawa_kids")[1].style.cssText = "fill:#D2AE6D";

}
document.getElementsByClassName("anawa_kids")[1].onmouseout = function(){
	document.getElementsByClassName("anawa_kids")[1].style.cssText = "fill:#D2D3D5";

}


document.getElementsByClassName("mama_pochitai")[0].onmouseover = function(){
	document.getElementsByClassName("mama_pochitai")[1].style.cssText = "fill:#D2AE6D";

}
document.getElementsByClassName("mama_pochitai")[0].onmouseout = function(){
	document.getElementsByClassName("mama_pochitai")[1].style.cssText = "fill:#D2D3D5";

}

document.getElementsByClassName("mama_pochitai")[1].onmouseover = function(){
	document.getElementsByClassName("mama_pochitai")[1].style.cssText = "fill:#D2AE6D";

}
document.getElementsByClassName("mama_pochitai")[1].onmouseout = function(){
	document.getElementsByClassName("mama_pochitai")[1].style.cssText = "fill:#D2D3D5";

}
	/*  #D2AE6D END */


	document.getElementsByClassName("kfc")[0].onmouseover = function(){
		document.getElementsByClassName("kfc")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("kfc")[0].onmouseout = function(){
		document.getElementsByClassName("kfc")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("kfc")[1].onmouseover = function(){
		document.getElementsByClassName("kfc")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("kfc")[1].onmouseout = function(){
		document.getElementsByClassName("kfc")[1].style.cssText = "fill:#D2D3D5";
	}




	document.getElementsByClassName("coffee_like")[0].onmouseover = function(){
		document.getElementsByClassName("coffee_like")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("coffee_like")[0].onmouseout = function(){
		document.getElementsByClassName("coffee_like")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("coffee_like")[1].onmouseover = function(){
		document.getElementsByClassName("coffee_like")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("coffee_like")[1].onmouseout = function(){
		document.getElementsByClassName("coffee_like")[1].style.cssText = "fill:#D2D3D5";
	}


	document.getElementsByClassName("chuchvara2")[0].onmouseover = function(){
		document.getElementsByClassName("chuchvara2")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("chuchvara2")[0].onmouseout = function(){
		document.getElementsByClassName("chuchvara2")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("chuchvara2")[1].onmouseover = function(){
		document.getElementsByClassName("chuchvara2")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("chuchvara2")[1].onmouseout = function(){
		document.getElementsByClassName("chuchvara2")[1].style.cssText = "fill:#D2D3D5";
	}
	
	document.getElementsByClassName("chuchvara")[0].onmouseover = function(){
		document.getElementsByClassName("chuchvara")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("chuchvara")[0].onmouseout = function(){
		document.getElementsByClassName("chuchvara")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("chuchvara")[1].onmouseover = function(){
		document.getElementsByClassName("chuchvara")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("chuchvara")[1].onmouseout = function(){
		document.getElementsByClassName("chuchvara")[1].style.cssText = "fill:#D2D3D5";
	
	}


	document.getElementsByClassName("bambino")[0].onmouseover = function(){
		document.getElementsByClassName("bambino")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("bambino")[0].onmouseout = function(){
		document.getElementsByClassName("bambino")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("bambino")[1].onmouseover = function(){
		document.getElementsByClassName("bambino")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("bambino")[1].onmouseout = function(){
		document.getElementsByClassName("bambino")[1].style.cssText = "fill:#D2D3D5";
	}

	document.getElementsByClassName("pizzaro")[0].onmouseover = function(){
		document.getElementsByClassName("pizzaro")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("pizzaro")[0].onmouseout = function(){
		document.getElementsByClassName("pizzaro")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("pizzaro")[1].onmouseover = function(){
		document.getElementsByClassName("pizzaro")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("pizzaro")[1].onmouseout = function(){
		document.getElementsByClassName("pizzaro")[1].style.cssText = "fill:#D2D3D5";
	}
		
	

	document.getElementsByClassName("pappas_pizza")[0].onmouseover = function(){
		document.getElementsByClassName("pappas_pizza")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("pappas_pizza")[0].onmouseout = function(){
		document.getElementsByClassName("pappas_pizza")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("pappas_pizza")[1].onmouseover = function(){
		document.getElementsByClassName("pappas_pizza")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("pappas_pizza")[1].onmouseout = function(){
		document.getElementsByClassName("pappas_pizza")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("redway")[0].onmouseover = function(){
		document.getElementsByClassName("redway")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("redway")[0].onmouseout = function(){
		document.getElementsByClassName("redway")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("redway")[1].onmouseover = function(){
		document.getElementsByClassName("redway")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("redway")[1].onmouseout = function(){
		document.getElementsByClassName("redway")[1].style.cssText = "fill:#D2D3D5";
	}


	document.getElementsByClassName("burger_time")[0].onmouseover = function(){
		document.getElementsByClassName("burger_time")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("burger_time")[0].onmouseout = function(){
		document.getElementsByClassName("burger_time")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("burger_time")[1].onmouseover = function(){
		document.getElementsByClassName("burger_time")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("burger_time")[1].onmouseout = function(){
		document.getElementsByClassName("burger_time")[1].style.cssText = "fill:#D2D3D5";
	}


	document.getElementsByClassName("best_shawarma")[0].onmouseover = function(){
		document.getElementsByClassName("best_shawarma")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("best_shawarma")[0].onmouseout = function(){
		document.getElementsByClassName("best_shawarma")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("best_shawarma")[1].onmouseover = function(){
		document.getElementsByClassName("best_shawarma")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("best_shawarma")[1].onmouseout = function(){
		document.getElementsByClassName("best_shawarma")[1].style.cssText = "fill:#D2D3D5";
	}


	document.getElementsByClassName("zhekas_ice")[0].onmouseover = function(){
		document.getElementsByClassName("zhekas_ice")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("zhekas_ice")[0].onmouseout = function(){
		document.getElementsByClassName("zhekas_ice")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("zhekas_ice")[1].onmouseover = function(){
		document.getElementsByClassName("zhekas_ice")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("zhekas_ice")[1].onmouseout = function(){
		document.getElementsByClassName("zhekas_ice")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("actual_optics")[0].onmouseover = function(){
		document.getElementsByClassName("actual_optics")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("actual_optics")[0].onmouseout = function(){
		document.getElementsByClassName("actual_optics")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("actual_optics")[1].onmouseover = function(){
		document.getElementsByClassName("actual_optics")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("actual_optics")[1].onmouseout = function(){
		document.getElementsByClassName("actual_optics")[1].style.cssText = "fill:#D2D3D5";
	}


	document.getElementsByClassName("travelers_coffee")[0].onmouseover = function(){
		document.getElementsByClassName("travelers_coffee")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("travelers_coffee")[0].onmouseout = function(){
		document.getElementsByClassName("travelers_coffee")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("travelers_coffee")[1].onmouseover = function(){
		document.getElementsByClassName("travelers_coffee")[1].style.cssText = "fill:#ED2F59";
	
	}
	document.getElementsByClassName("travelers_coffee")[1].onmouseout = function(){
		document.getElementsByClassName("travelers_coffee")[1].style.cssText = "fill:#D2D3D5";
	}


	/* #ED2F59 END  */




	document.getElementsByClassName("trolley")[0].onmouseover = function(){
		document.getElementsByClassName("trolley")[1].style.cssText = "fill:#A46080";
	
	}
	document.getElementsByClassName("trolley")[0].onmouseout = function(){
		document.getElementsByClassName("trolley")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("trolley")[1].onmouseover = function(){
		document.getElementsByClassName("trolley")[1].style.cssText = "fill:#A46080";
	
	}
	document.getElementsByClassName("trolley")[1].onmouseout = function(){
		document.getElementsByClassName("trolley")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("rk-tel")[0].onmouseover = function(){
		document.getElementsByClassName("rk-tel")[1].style.cssText = "fill:#A46080";
	
	}
	document.getElementsByClassName("rk-tel")[0].onmouseout = function(){
		document.getElementsByClassName("rk-tel")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("rk-tel")[1].onmouseover = function(){
		document.getElementsByClassName("rk-tel")[1].style.cssText = "fill:#A46080";
	
	}
	document.getElementsByClassName("rk-tel")[1].onmouseout = function(){
		document.getElementsByClassName("rk-tel")[1].style.cssText = "fill:#D2D3D5";
	}


	

	document.getElementsByClassName("lego_qala")[0].onmouseover = function(){
		document.getElementsByClassName("lego_qala")[1].style.cssText = "fill:#A46080";
	
	}
	document.getElementsByClassName("lego_qala")[0].onmouseout = function(){
		document.getElementsByClassName("lego_qala")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("lego_qala")[1].onmouseover = function(){
		document.getElementsByClassName("lego_qala")[1].style.cssText = "fill:#A46080";
	
	}
	document.getElementsByClassName("lego_qala")[1].onmouseout = function(){
		document.getElementsByClassName("lego_qala")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("play_park")[0].onmouseover = function(){
		document.getElementsByClassName("play_park")[1].style.cssText = "fill:#A46080";
	
	}
	document.getElementsByClassName("play_park")[0].onmouseout = function(){
		document.getElementsByClassName("play_park")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("play_park")[1].onmouseover = function(){
		document.getElementsByClassName("play_park")[1].style.cssText = "fill:#A46080";
	
	}
	document.getElementsByClassName("play_park")[1].onmouseout = function(){
		document.getElementsByClassName("play_park")[1].style.cssText = "fill:#D2D3D5";
	}


	/* end #A46080 */

	document.getElementsByClassName("baby_room")[0].onmouseover = function(){
		document.getElementsByClassName("baby_room")[1].style.cssText = "fill:#EC268F";
	
	}
	document.getElementsByClassName("baby_room")[0].onmouseout = function(){
		document.getElementsByClassName("baby_room")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("baby_room")[1].onmouseover = function(){
		document.getElementsByClassName("baby_room")[1].style.cssText = "fill:#EC268F";
	
	}
	document.getElementsByClassName("baby_room")[1].onmouseout = function(){
		document.getElementsByClassName("baby_room")[1].style.cssText = "fill:#D2D3D5";
	}


	/* end #EC268F */

	document.getElementsByClassName("ELP")[0].onmouseover = function(){
		document.getElementsByClassName("ELP")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("ELP")[0].onmouseout = function(){
		document.getElementsByClassName("ELP")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("ELP")[1].onmouseover = function(){
		document.getElementsByClassName("ELP")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("ELP")[1].onmouseout = function(){
		document.getElementsByClassName("ELP")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("mix_imperia")[0].onmouseover = function(){
		document.getElementsByClassName("mix_imperia")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("mix_imperia")[0].onmouseout = function(){
		document.getElementsByClassName("mix_imperia")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("mix_imperia")[1].onmouseover = function(){
		document.getElementsByClassName("mix_imperia")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("mix_imperia")[1].onmouseout = function(){
		document.getElementsByClassName("mix_imperia")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("pandora")[0].onmouseover = function(){
		document.getElementsByClassName("pandora")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("pandora")[0].onmouseout = function(){
		document.getElementsByClassName("pandora")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("pandora")[1].onmouseover = function(){
		document.getElementsByClassName("pandora")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("pandora")[1].onmouseout = function(){
		document.getElementsByClassName("pandora")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("anelli")[0].onmouseover = function(){
		document.getElementsByClassName("anelli")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("anelli")[0].onmouseout = function(){
		document.getElementsByClassName("anelli")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("anelli")[1].onmouseover = function(){
		document.getElementsByClassName("anelli")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("anelli")[1].onmouseout = function(){
		document.getElementsByClassName("anelli")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("serebroff")[0].onmouseover = function(){
		document.getElementsByClassName("serebroff")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("serebroff")[0].onmouseout = function(){
		document.getElementsByClassName("serebroff")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("serebroff")[1].onmouseover = function(){
		document.getElementsByClassName("serebroff")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("serebroff")[1].onmouseout = function(){
		document.getElementsByClassName("serebroff")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("lalo")[0].onmouseover = function(){
		document.getElementsByClassName("lalo")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("lalo")[0].onmouseout = function(){
		document.getElementsByClassName("lalo")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("lalo")[1].onmouseover = function(){
		document.getElementsByClassName("lalo")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("lalo")[1].onmouseout = function(){
		document.getElementsByClassName("lalo")[1].style.cssText = "fill:#D2D3D5";
	}



	document.getElementsByClassName("national-jewerly")[0].onmouseover = function(){
		document.getElementsByClassName("national-jewerly")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("national-jewerly")[0].onmouseout = function(){
		document.getElementsByClassName("national-jewerly")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("national-jewerly")[1].onmouseover = function(){
		document.getElementsByClassName("national-jewerly")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("national-jewerly")[1].onmouseout = function(){
		document.getElementsByClassName("national-jewerly")[1].style.cssText = "fill:#D2D3D5";
	}




	document.getElementsByClassName("parovozik")[0].onmouseover = function(){
		document.getElementsByClassName("parovozik")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("parovozik")[0].onmouseout = function(){
		document.getElementsByClassName("parovozik")[1].style.cssText = "fill:#D2D3D5";
	
	}
	
	document.getElementsByClassName("parovozik")[1].onmouseover = function(){
		document.getElementsByClassName("parovozik")[1].style.cssText = "fill:#A8518A";
	
	}
	document.getElementsByClassName("parovozik")[1].onmouseout = function(){
		document.getElementsByClassName("parovozik")[1].style.cssText = "fill:#D2D3D5";
	}

	




/*MAP END */