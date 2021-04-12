jQuery.fn.shift_vimeo_video = function() {

	return this.each(function() {

		var $el = jQuery(this),
				video_id 	= $el.data( 'video' );

    // CREATES DYNAMIC VIDEO MODAL
		$el.on( 'click', function() {
      createModal();
		});

		function getVimeoURL(){
			var vimeo_params = '?autoplay=1"';
			return 'https://player.vimeo.com/video/' + video_id + vimeo_params;
		}

		// VIDEO MODAL LAYOUT
		function createModal() {
			var html = '<div id="shift-vimeo-modal">';
					html += '<button class="shift-vimeo-modal-close-btn">&times;</button>';
					html += '<div class="shift-vimeo-modal-body">';
					html += '<iframe allow="autoplay" src="'+getVimeoURL();
		      html += 'frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'
		      html +=	'</div></div>';

      jQuery("body").append( html );

			jQuery( '#shift-vimeo-modal .shift-vimeo-modal-close-btn' ).click( function( ev ){
				ev.preventDefault();
				jQuery( '#shift-vimeo-modal' ).remove();
			});

    }

	}); //End each()

};

// HTML5 VIDEO PLAYER
jQuery.fn.shift_html5_video = function() {

	return this.each(function() {

		var $el = jQuery(this),
				video_url 	= $el.data( 'video' );

    // CREATES DYNAMIC VIDEO MODAL
		$el.on( 'click', function() {
      createModal();
		});

		// VIDEO MODAL LAYOUT
		function createModal() {
			var html = '<div id="shift-video-modal">';
					html += '<button class="shift-video-modal-close-btn">&times;</button>';
					html += '<div class="shift-video-modal-body">';
					html += '<video controls autoplay>';
					html += '<source src="'+video_url+'" type="video/mp4" />';
		      html += '</video>';
		      html +=	'</div></div>';

      jQuery("body").append( html );

			jQuery( '#shift-video-modal .shift-video-modal-close-btn' ).click( function( ev ){
				ev.preventDefault();
				jQuery( '#shift-video-modal' ).remove();
			});

    }

	}); //End each()

};


jQuery(document).ready(function () {
	jQuery('[data-behaviour~=shift-vimeo-video]').shift_vimeo_video();
	jQuery('[data-behaviour~=shift_html5_video]').shift_html5_video();

});
