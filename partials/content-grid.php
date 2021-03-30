<div class="post-wrapper">
  <div class="post-inner">
    <h2 class="title"><?php the_title();?></h2>
    <div class="content">
      <?php the_excerpt();?>
    </div>
    <a class="post-btn" href="<?php the_permalink(); ?>" role="button">Read More</a>
  </div>
</div>
