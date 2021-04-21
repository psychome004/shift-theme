<?php

 $overlay  = !empty( $instance['video_overlay'] ) ? $instance['video_overlay']/10 : '0.4';

?>

<!-- SHIFT HERO VIDEO BUILDER -->
<div class="shift-hero-builder">
  <div class="shift-hero-video-inner">
    <div class="video-wrapper">
      <video autoplay loop="true">
        <source src="<?php _e( $instance['video_url'] );?>" type="video/mp4" />
      </video>
    </div>
    <div class="overlay"></div>
    <div class="video-content">
      <?php echo siteorigin_panels_render( 'video-content', true, $instance['video_content'] );?>
    </div>
  </div>
</div><!-- SHIFT HERO BUILDER ends -->

<style>

  .shift-hero-builder .overlay{ background: rgba(0,0,0,<?php _e( $overlay );?>); }

</style>
