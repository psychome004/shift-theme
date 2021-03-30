jQuery.fn.shift_user_popup = function() {

	return this.each(function() {

		var $el           = jQuery(this),
        $image         = $el.find('img'),
				imageUrl			=	$image.attr('src'),
        name          = $el.find('.name').text(),
        bio           = $el.find('.bio').html();


    // CREATES DYNAMIC USER MODAL
		$el.on( 'click', function() { $el.createModal(); });

    // shift USER MODAL LAYOUT
    $el.createModal = function() {

      html = `
      <div class="modal fade" id="shift-user-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <a id="close" data-toggle="modal" data-target="#shift-user-modal" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></a>
            </div>
            <div class="modal-body">
              <div class="shift-user-body">
                <div class="user-thumbnail-bg" style="background-image:url(${imageUrl});"></div>
                <div class="user-meta">
                  <h5 class="name">${name}</h5>
                  <div class="separator"></div>
                  <div class="bio">${bio}</div>
                </div>
              </div>
            </div><!-- Modal Body -->
          </div><!-- Modal Content -->
        </div><!-- Modal Dialog -->
      </div>
      `;

      jQuery("body").append(html);
			jQuery('#shift-user-modal').modal('show');
    }

    // REMOVES MODAL FROM THE DOM
    jQuery(document).on('hidden.bs.modal', function () {
			jQuery('#shift-user-modal').remove();
      jQuery('.modal-backdrop.in').remove();
		});


	}); //End each()

};

jQuery(document).ready(function () {

	if( jQuery(window).width() >= 768 ) {
		jQuery('a[data-behaviour~=shift-user-popup]').shift_user_popup();
	}

});
