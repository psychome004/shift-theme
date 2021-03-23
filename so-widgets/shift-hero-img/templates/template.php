<?php
 $overlay = !empty( $instance['img_overlay'] ) ? $instance['img_overlay']/10 : '0.4';
?>
<!-- SHIFT HERO IMAGE -->
<div class="shift-hero-img">
  <div class="img-wrapper">
    <img src="<?php _e( wp_get_attachment_url( $instance['image'] ) );?>" alt="Hero Image" />
  </div>
  <div class="overlay"></div>
  <!-- Arrow Button -->
  <div class="arrow-wrapper">
    <a id="arrow-btn" class="arrow-btn" href="<?php _e( $instance['arrow_target'] );?>">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </a>
  </div><!-- Arrow Button -->
</div><!-- SHIFT HERO IMAGE  ends -->

<style>

.shift-hero-img .overlay{
  background: rgba(0,0,0,<?php _e( $overlay );?>);
}

</style>
