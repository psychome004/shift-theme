jQuery.fn.shiftSlider = function(options, sliderFn = ''){

	return this.each(function(){

		var $el = jQuery( this );
		var settings = jQuery.extend({
			slidesToShow		: $el.data('items'),
			slidesToScroll	: 1,
			autoplay				: false,
			autoplaySpeed		: 1500,
			arrows					: false,
			dots						: false,
			pauseOnHover		: true,
			nextArrow     	: false,
			prevArrow     	: false,
			responsive			: [
				{
					breakpoint: 1169,
					settings: { slidesToShow: 2 }
				},
				{
	        breakpoint: 520,
					settings: { slidesToShow: 1 }
      	}
			]
		},options);

		// console.log( settings );


		$el.slick(settings);


		$el.addClass( 'loaded' );

	});

}

jQuery.fn.shiftAnimatedCardSlider = function(){

	return this.each(function(){
		var $el = jQuery( this );
				$card_wrapper	=	$el.find('.card-wrapper');
				animationWindowWidth = $el.data('enable-animation');

		// REMOVE AOS ANIMATION BASED ON WINDOW WIDTH
		if( jQuery(window).width() < animationWindowWidth ) {
			$card_wrapper.each(function( index, selectedWrapper ){
				jQuery(selectedWrapper).removeAttr("data-aos data-aos-delay");
			});
		}

	});

}



jQuery(document).ready(function(){

	/* STICKY HEADER */
	var $stickyNavbar = jQuery(".sticky-transparent-header");
	var navbarOffset = $stickyNavbar.offset().top;

	function shiftHeader(){
		if(jQuery(window).scrollTop() >= navbarOffset) {
      $stickyNavbar.addClass("navbar-fixed-top").css({
				backgroundColor: '#ffffff',
				position			 : 'fixed'
			});
    } else {
      $stickyNavbar.removeClass("navbar-fixed-top").css({
				backgroundColor: 'transparent',
				position			 : 'absolute'
			});
    }

	}

	jQuery(window).on("scroll", function(){ shiftHeader(); });

	// ANIMATED SLICK CARD SLIDER
	jQuery('.card-slider-wrapper.with-animation').shiftAnimatedCardSlider();

	/* SLIDER */
	jQuery('[data-behaviour~=cards-slick]').shiftSlider({
		arrows					: true,
		dots						: true,
		nextArrow     	: '<button type="button" class="slick-next slick-nav"></button>',
		prevArrow     	: '<button type="button" class="slick-prev slick-nav"></button>'
	});

	jQuery('[data-behaviour~=shift-logos-slick]').shiftSlider({
		arrows					: true,
		nextArrow     	: '<button type="button" class="slick-next slick-nav"></button>',
		responsive			: [
			{
				breakpoint: 1169,
				settings: { slidesToShow: 3 }
			},
			{
				breakpoint: 992,
				settings: { slidesToShow: 2 }
			},
			{
				breakpoint: 520,
				settings: { slidesToShow: 1 }
			}
		]
	});

	// INITIALIZE AOS ANIMATION
	AOS.init({
    duration: 1000,
    once: false,
  });

	// EXECUTE ON LOAD - DEFAULT
	shiftHeader();


});
