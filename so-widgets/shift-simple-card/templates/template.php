<!-- SHIFT SIMPLE CARD -->
<div class="card-container" style="max-width: 1170px;">
<?php foreach ( $instance['simple_cards_repeater'] as $key => $simple_card ) :?>
  <div class="card-simple-inner" style="background-color:<?php _e( $instance['bg_color'] );?>;" data-aos="fade-up" data-aos-delay="<?php _e( $key * 200 );?>">
    <div class="simple-card-body">
      <div class="simple-card-header" style="color:<?php _e( $instance['title_color'] );?>">
        <h4><?php _e( $simple_card['card_title'] );?></h4>
      </div>
      <?php if( $simple_card['card_desc'] ):?>
        <div style="color:<?php _e( $instance['desc_color'] );?>" >
          <?php echo siteorigin_panels_render( 'card-description', true, $simple_card['card_desc'] );?>
        </div>
      <?php endif;?>
    </div>
  </div>
<?php endforeach; ?>
</div><!-- .card-container -->
