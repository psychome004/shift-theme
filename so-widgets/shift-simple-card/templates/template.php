<!-- SHIFT SIMPLE CARD -->
<div class="card-container" style="max-width: 1170px;">
  <?php
    $card_type = $instance['card_type'];

    foreach ( $instance['simple_cards_repeater'] as $key => $simple_card ) :

    $image_url = "";
    $classes = "card-simple-inner";

    if( $card_type == 'card-with-image' ){
      $classes .=" with-image";
      $image_url = ( !empty( $simple_card['image'] ) ) ? wp_get_attachment_url( $simple_card['image'] ) : '';
    }

  ?>
  <div class="<?php echo $classes; ?>" style="background-color:<?php _e( $instance['bg_color'] );?>;" data-aos="fade-up" data-aos-delay="<?php _e( $key * 200 );?>">

    <?php if( !empty( $image_url ) && $image_url ): ?>
      <div class="simple-card-bg" style="background-image: url( <?php _e( $image_url );?> );"></div>
    <?php endif; ?>
    
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
