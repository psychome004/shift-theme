<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<div class="post-card">
  <div class="front" style="background-image: url(<?php echo( $image_url ? $image_url[0] : '' );?>)">
    <h2 class="title"><?php the_title();?></h2>
  </div>
  <a class="post-url" href="<?php the_permalink(); ?>" role="button">
    <div class="back">
      <div class="back-inner" style="background-image: url(<?php echo( $image_url ? $image_url[0] : '' );?>)"></div>
      <h4 class="title"><?php the_title();?></h4>
      <div class="content">
        <?php the_excerpt();?>
      </div>
      <span class="btn">Read More</span>
    </div>
  </a>
</div>
