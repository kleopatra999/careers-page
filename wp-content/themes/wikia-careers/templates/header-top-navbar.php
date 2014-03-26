<header class="" role="banner">
	<div class="logo">
		<!-- logo -->
		  <?php if ( get_theme_mod( 'wikia_careers_logo' ) ) : ?>
				  <a class="navbar-brand image-logo" href="<?php echo home_url(); ?>/" rel='home'><img src='<?php echo esc_url( get_theme_mod( 'wikia_careers_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
		  <?php else : ?>
			  <hgroup>
				  <a class="navbar-brand" href="<?php echo home_url(); ?>/" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
			  </hgroup>
		  <?php endif; ?>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>


</header>
<?php if ( get_header_image() ) : ?>
	<!-- header background image -->
	<div id="site-header" style="background-image:url('<?php header_image(); ?>')" class="container-fluid site-header">
		<?php if ( get_theme_mod( 'wikia_careers_header_desc' ) ) : ?>
			<!-- header background message -->
			<p class="site-header-message"><?php echo get_theme_mod( 'wikia_careers_header_desc' ); ?></p>
		<?php endif; ?>
		<div class="scroll-down">v</div>
	</div>
<?php endif; ?>