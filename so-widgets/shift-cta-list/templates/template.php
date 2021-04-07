<!-- SHIFT CTA LIST -->
<?php
	$img_path = get_stylesheet_directory_uri().'/assets/images/';
?>
<div class="shift-cta-wrapper">
	<?php foreach( $instance['ctas'] as $cta ): $image = wp_get_attachment_url( $cta['image'] );?>
		<div class="cta-item">
			<div class="cta-title" data-aos="fade-down">
				<div class="title-left" style="color: <?php _e($cta['tl_color']);?>;">
					<?php _e( $cta['title_left'] );?>
				</div>
				<div class="title-right" style="color: <?php _e($cta['tr_color']);?>;">
					<?php _e( $cta['title_right'] );?>
				</div>
			</div>
			<div class="cta-bg" style="background-image: url(<?php _e( $image );?>);">
				<div class="overlay"></div>
			</div>
			<div class="cta-content-wrapper">
				<div class="cta-content"><?php _e( $cta['content'] );?></div>
				<a href="<?php _e( $cta['btn_url'] );?>" class="cta-btn"><?php _e( $cta['btn_text'] );?></a>
			</div>
		</div>
	<?php endforeach;?>
</div><!-- SHIFT CTA LIST -->

<style>
	.shift-cta-wrapper::before,
	.shift-cta-wrapper .cta-item:nth-child(1) .cta-content-wrapper::after{
		background-image: url(<?php _e($img_path.'/cta-one-texture.png');?>);
	}

	.shift-cta-wrapper .cta-item:nth-child(2) .cta-content-wrapper::after{
		background-image: url(<?php _e($img_path.'/cta-two-texture.png');?>);
	}

</style>
