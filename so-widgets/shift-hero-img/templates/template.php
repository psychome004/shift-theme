<?php
  $img_path = get_stylesheet_directory_uri().'/assets/images/';
?>
<!-- SHIFT HERO IMAGE -->
<div class="shift-hero-img">
  <div class="img-wrapper">
    <img src="<?php _e( wp_get_attachment_url( $instance['image'] ) );?>" alt="Hero Image" />
    <div class="bg-left"></div>
    <div class="bg-right"></div>
  </div>
  <!-- Arrow Button -->
  <div class="arrow-wrapper">
    <a id="arrow-btn" class="arrow-btn" href="<?php _e( $instance['arrow_target'] );?>">
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </a>
  </div><!-- Arrow Button -->
</div><!-- SHIFT HERO IMAGE  ends -->
<style>

.shift-hero-img .img-wrapper .bg-right{ background-image: url(<?php _e($img_path.'/header-texture.png');?>); }

</style>
