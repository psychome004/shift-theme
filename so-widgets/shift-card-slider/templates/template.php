<?php

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 6;
	}

	$img_path = get_stylesheet_directory_uri().'/assets/images/';

	$classes = "card-slider-wrapper";
	$is_animated_card = $instance['is_animated_card'];
	$enable_card_editor = $instance['enable_card_editor'];
	$animation_window_width = !empty( $instance['animation_pixel'] ) ? $instance['animation_pixel'] : '1024';
	if( $is_animated_card ){
		$classes .= " with-animation";
	}

?>

<!-- Cards -->
<div class="fullwidth">
	<div class="<?php _e( $classes );?>" <?php if( $is_animated_card ){ echo "data-enable-animation='".$animation_window_width."'"; }?>>
		<div data-behaviour="cards-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="shift-card-slider">
			<?php foreach( $instance['cards'] as $key => $card ):?>
				<div class="card-wrapper" <?php if( $is_animated_card ):?>data-aos="fade-up" data-aos-delay="<?php _e( $key * 200 );?>" <?php endif;?> >
					<div class="card">
	          <div class="card-header">
	            <img src="<?php _e( wp_get_attachment_url( $card['image'] ) );?>" alt="Card Image" />
	          </div>
	          <div class="card-content">
	            <?php
								if( ! $enable_card_editor ){ echo $card['card_content']; } else{ echo $card['card_editor_content']; }
							?>
	          </div>
	        </div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<!-- End Cards -->

<style>
.card-slider-wrapper .slick-prev:before{
	background-image: url('<?php _e($img_path.'/left-arrow.png');?>');
}

.card-slider-wrapper .slick-next:before{
  background-image: url('<?php _e($img_path.'/right-arrow.png');?>');
}

</style>
