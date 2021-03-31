
<!-- USER POPUP -->
<div class="shift-honeycomb">

  <?php if( !empty( $instance['headline'] ) ):?>
    <h1 class="title"><?php _e( $instance['headline'] );?></h1>
  <?php endif; ?>
  <div class="articles-users">
    <?php foreach( $instance['shift_users'] as $item ): $image_url = wp_get_attachment_url( $item['user_image'] ); ?>
      <?php
        $image = !empty( $image ) ? true : false;
        $name = !empty( $item['user_name'] ) ? true : false;
        $bio  = !empty( $item['user_bio'] ) ? true :  false;
      ?>
      <div class="shift-user-card">
        <a data-target="#shift-user-modal" data-behaviour="shift-user-popup">
          <div class="shift-user-body">
            <div class="user-thumbnail-bg" style="position: relative;">
              <?php if( $name ): ?>
                <img src="<?php _e( $image_url );?>" alt="Profile Picture">
              <?php endif; ?>
              <div class="overlay">
                <?php if( $name ): ?>
                  <h5 class="name"><?php _e( $item['user_name'] );?></h5>
                <?php endif; ?>
              </div>
            </div>
            <?php if( $bio ):?>
              <div class="bio" style="display:none;height:0;">
                <?php echo $item['user_bio'];?>
              </div>
            <?php endif; ?>
          </div>
        </a>
      </div>
      <div class="user-meta-sm">
        <?php if( $name ): ?>
				  <h5 class="name"><?php _e( $item['user_name'] );?></h5>
        <?php endif; ?>
        <?php if( $bio ): ?>
          <div class="bio">
            <?php echo $item['user_bio'];?>
          </div>
        <?php endif; ?>
		  </div>
    <?php endforeach;?>
  </div>
</div>
