<div class="post-card">
  <div class="front">
    <h2 class="title"><?php the_title();?></h2>
  </div>
  <a class="post-url" href="<?php the_permalink(); ?>" role="button">
    <div class="back">
      <div class="content">
        <?php the_excerpt();?>
      </div>
      <span class="btn">Read More</span>
    </div>
  </a>
</div>
