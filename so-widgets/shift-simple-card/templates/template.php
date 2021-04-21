<!-- SHIFT SIMPLE CARD -->
<div class="card-container" style="max-width: 1170px;">
<?php foreach ( $instance['simple_cards_repeater'] as $simple_card ) :?>
  <div class="card-simple-inner" style="background-color:<?php _e( $instance['bg_color'] );?>;">
    <div class="simple-card-body">
      <div class="simple-card-header" style="color:<?php _e( $instance['title_color'] );?>">
        <h4><?php _e( $simple_card['card_title'] );?></h4>
      </div>
      <?php if( $simple_card['card_desc'] ):?>
      <div style="color:<?php _e( $instance['desc_color'] );?>" >
        <?php _e( $simple_card['card_desc'] );?>
      </div>
      <?php endif;?>
    </div>
  </div>
<?php endforeach; ?>
</div><!-- .card-container -->
