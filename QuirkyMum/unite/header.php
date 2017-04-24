<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package unite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" id="unite-style-css" href="http://thequirkyandopinionatedmum.com/wp452/wp-content/themes/unite/fonts.css?ver=4.5.2" type="text/css" media="all">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="container header-area">
		<?php do_action( 'before' ); ?>
		<?php if( get_header_image() != '' ) : ?>
		      <header id="masthead" class="site-header col-sm-12" role="banner" style="background: url(<?php header_image(); ?>);">
		<?php endif; ?>
		<?php if ( !get_header_image() ) : ?>
		      <header id="masthead" class="site-header col-sm-12" role="banner">
		<?php endif; ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

			<!--div class="social-header col-md-6">
				<?php unite_social_icons(); // Social icons in header ?>
			</div-->

		</header><!-- #masthead -->
	</div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>

		        </div>
			<?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
			<?php get_search_form(); ?>
		    </div>
		</nav><!-- .site-navigation -->

	<?php if ( is_home() ) {
	      // dynamic_sidebar( 'slider-1' );
	      echo do_shortcode("[metaslider id=52]"); 
	      // echo do_shortcode("[smoothslider id='1']");
	      // echo do_shortcode("[soliloquy id='55']");
	} ?>

	<div id="content" class="site-content container"><?php
            global $post;
            if( is_singular() && get_post_meta($post->ID, 'site_layout', true) ){
                $layout_class = get_post_meta($post->ID, 'site_layout', true);
            }
            else{
                $layout_class = of_get_option( 'site_layout' );
            }
            ?>
            <div class="row <?php echo $layout_class; ?>">
