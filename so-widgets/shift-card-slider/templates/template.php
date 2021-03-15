<?php

	if( !isset( $instance['show_slides'] ) ){
		$instance['show_slides'] = 6;
	}

	$img_path = get_stylesheet_directory_uri().'/assets/images/';

?>

<!-- Cards -->
<div class="fullwidth">
	<div class="card-slider-wrapper">
		<div data-behaviour="cards-slick" data-items="<?php _e( $instance['show_slides'] );?>" class="shift-card-slider">
			<?php foreach( $instance['cards'] as $card ):?>
				<div class="card-wrapper">
					<div class="card">
	          <div class="card-header">
	            <img src="<?php _e( wp_get_attachment_url( $card['image'] ) );?>" alt="Card Image" />
	          </div>
	          <div class="card-content">
	            <?php echo $card['card_content'];?>
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
