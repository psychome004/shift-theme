<?php
 global $youtube;
 $img_path     = get_stylesheet_directory_uri().'/assets/images/';
 $video_id     = !empty( $instance['video_id'] ) ? $youtube->get_video_id( $instance['video_id'] ) : '';
 $overlay      = !empty( $instance['video_overlay'] ) ? $instance['video_overlay']/10 : '0.4';
 $video_player = 'sp-ytube-video';

 // UPDATE SETTINGS FOR VIMEO PLAYER
 if( $instance['is_vimeo_player'] ){
   $video_id = $instance['video_id'];
   $video_player = 'shift-vimeo-video';
 }
?>

<!-- SHIFT HERO VIDEO -->
<div class="shift-hero-video">
  <div class="shift-hero-video-inner">
    <div class="img-wrapper">
      <img src="<?php _e( wp_get_attachment_url( $instance['image'] ) );?>" alt="Hero Image" />
    </div>
    <div class="overlay"></div>
    <div class="btn-play" data-video="<?php _e( $video_id );?>" data-behaviour="<?php _e( $video_player );?>">
      <span class="play-icon"></span>
    </div>
    <div class="video-text">
      <div class="video-text-inner">
        FREEDOM
      </div>
    </div>
  </div>
  <span class="arrow-down"></span>
</div><!-- SHIFT HERO VIDEO ends -->

<style>
  .shift-hero-video .overlay{
    background: rgba(0,0,0,<?php _e( $overlay );?>);
  }
  .shift-hero-video .arrow-down{
  	background-image: url('<?php _e($img_path.'/arrow-down.png');?>');
  }
  .shift-hero-video .play-icon{
  	background-image: url('<?php _e($img_path.'/play-btn.svg');?>');
  }
</style>
