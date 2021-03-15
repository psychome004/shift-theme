jQuery.fn.shiftSlider = function(options){

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


jQuery(document).ready(function(){

	jQuery('[data-behaviour~=cards-slick]').shiftSlider({
		arrows					: true,
		dots						: true,
		nextArrow     	: '<button type="button" class="slick-next slick-nav"></button>',
		prevArrow     	: '<button type="button" class="slick-prev slick-nav"></button>'
	});

});
