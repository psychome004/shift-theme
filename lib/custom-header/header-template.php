<?php

  $shift_header_class = ' navbar-fixed-top';

  if( is_front_page() ) :
    $shift_header_class = '';
?>
<?php if( is_active_sidebar('shift-header-section') ){ dynamic_sidebar('shift-header-section'); } ?>
<?php endif; ?>
<div id="sticky-header-wrapper">
  <div class="sticky-transparent-header<?php _e( $shift_header_class ); ?>">
    <nav class="navbar navbar-default header5">
      <div class="container-fluid"><!-- .container-->
        <!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar top-bar "></span>
    				<span class="icon-bar middle-bar"></span>
    				<span class="icon-bar bottom-bar"></span>
    			</button>
          <?php do_action('sp_logo');?>
  			</div>
    		<?php do_action('sp_nav_menu');?>
      </div><!-- /.container-->
    </nav>
  </div>
</div>
