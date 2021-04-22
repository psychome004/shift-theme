<!-- SHIFT BG CARD -->
<div class="shift-bg-card" style="max-width: 1170px;">
<?php foreach( $instance['bg_cards_repeater'] as $key => $simple_card ) : $image = wp_get_attachment_url( $simple_card['image'] ); ?>
  <div class="card-simple-inner" data-aos="fade-up" data-aos-delay="<?php _e( $key * 200 );?>">
    <div class="simple-card-body" style="background-image: url(<?php _e( $image );?>);">
      <div class="overlay" style="background-image: linear-gradient(to top, <?php _e($simple_card['bg_color']);?> 25%, rgba(0, 0, 0, 0) );"></div>
      <div class="simple-card-header" style="color:<?php _e( $instance['title_color'] );?>">
        <h4><?php _e( $simple_card['card_title'] );?></h4>
      </div>
      <?php if( $simple_card['card_desc'] ):?>
        <div class="simple-card-desc" style="color:<?php _e( $instance['desc_color'] );?>" >
          <?php echo $simple_card['card_desc'];?>
        </div>
      <?php endif;?>
    </div>
  </div>
<?php endforeach; ?>
</div><!-- .card-container -->
