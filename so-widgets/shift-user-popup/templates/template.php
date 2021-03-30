<!-- USER POPUP -->
<div class="shift-honeycomb">
  <h1 class="title"><?php _e( $instance['headline'] );?></h1>
  <div class="articles-users">
    <?php foreach( $instance['shift_users'] as $item ): $image = wp_get_attachment_url( $item['user_image'] ); ?>
      <div class="shift-user-card">
        <a data-target="#shift-user-modal" data-behaviour="shift-user-popup">
          <div class="shift-user-body">
            <div class="user-thumbnail-bg" style="position: relative;">
              <img src="<?php _e( $image );?>" alt="Profile Picture">
              <div class="overlay">
                <h5 class="name"><?php _e( $item['user_name'] );?></h5>
              </div>
            </div>
            <div class="bio" style="display:none;height:0;">
              <?php echo $item['user_bio'];?>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach;?>
  </div>
</div>
