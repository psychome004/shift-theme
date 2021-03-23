<!-- SHIFT CTA LIST -->
<div class="shift-cta-wrapper">
	<?php foreach( $instance['ctas'] as $cta ): $image = wp_get_attachment_url( $cta['image'] );?>
		<div class="cta-item">
			<div class="cta-title">
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
