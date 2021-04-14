<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.post-item');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled shift-grid-4">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
    <li class="post-item">
      <?php get_template_part( 'partials/content', 'grid'); ?>
    </li>
  <?php endwhile;?>
</ul>
