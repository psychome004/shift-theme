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

jQuery(document).ready(function () {
	jQuery('[data-behaviour~=shift-vimeo-video]').shift_vimeo_video();
});
