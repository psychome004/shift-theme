<?php

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 6;
	}

	$img_path = get_stylesheet_directory_uri().'/assets/images/';

?>

<!-- Logos -->
<div class="fullwidth">
	<div class="shift-logos-wrapper" style="max-width:1170px;">
		<section data-behaviour="shift-logos-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="shift-logos-slider">
			<?php foreach( $instance['slides'] as $slide ):?>
				<div class="slide">
					<div class="slide-inner">
						<img src="<?php _e( wp_get_attachment_url( $slide['image'] ) );?>" alt="Slider Image" />
					</div>
				</div>
			<?php endforeach;?>
		</section>
	</div>
</div>
