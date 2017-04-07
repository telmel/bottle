<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bottle
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bottle' ); ?></a>

	<?php if ( get_header_image() ) { ?>
		<header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)" role="banner">
	<?php } else { ?>
		<header id="masthead" class="site-header" role="banner">
	<?php } ?>
	
		<div class="site-branding">
            <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php show_custom_logo(); ?></div>
            <?php else : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php endif; ?>
             
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php
            endif; ?>
        </div><!-- .site-branding -->
		<div class="header-container">
		<?php  if ( is_active_sidebar( 'header-1' ) ) { ?>
                <aside id="secondary" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'header-1' ); ?>
                </aside><!-- #secondary -->
                <?php } else { ?>
                <aside id="secondary" class="widget-area" role="complementary">
				<?php the_widget( 'WP_Widget_Text', 'text=<div class="home-headline">Discover innovative theme</div><div class="home-tagline">Bottle is a lightweight and fast theme.</div><div class="home-tagline">Quick and easy website creation.</div><br><button class="button-green">Learn more</button>' ); ?>
                </aside><!-- #secondary -->
        <?php } ?>
		</div>
		</div>
		
	</header><!-- #masthead -->
	

	<div id="content" class="site-content">
