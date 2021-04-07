<!-- SHIFT POST -->
<div class="shift-post-wrapper">
	<?php $image = wp_get_attachment_url( $instance['image'] );?>
	<div class="post-item">
		<div class="post-title" data-aos="fade-down">
			<div class="title-left" style="color: <?php _e( $instance['tl_color'] );?>;">
				<?php _e( $instance['title_left'] );?>
			</div>
			<div class="title-right" style="color: <?php _e( $instance['tr_color'] );?>;">
				<?php _e( $instance['title_right'] );?>
			</div>
		</div>
		<div class="post-bg-wrapper">
			<div class="post-bg">
				<img src="<?php _e( $image );?>" alt="Background image">
			</div>
			<div class="overlay"></div>
		</div>
		<div class="post-content-wrapper">
			<div class="post-content"><?php _e( $instance['content'] );?></div>
		</div>
	</div>
</div><!-- SHIFT POST -->
