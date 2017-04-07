<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bottle
 */
 
?>
 
    </div><!-- #content -->
 
<?php
/* The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 * If the footer sidebar has widgets, show them.
 * If our footer sidebar does not have widgets, then let's populate it.
 */
?>
 
    <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-widgets">
                <div class="footer-inner">
                 
                <?php  if ( is_active_sidebar( 'footer-1' ) ) { ?>
                <aside id="secondary" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'footer-1' ); ?>
                </aside><!-- #secondary -->
                <?php } else { ?>
                <aside id="secondary" class="widget-area" role="complementary">
                <?php the_widget( 'WP_Widget_Pages' ); ?>
                <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                <?php the_widget('WP_Widget_Categories'); ?> 
                <?php the_widget( 'WP_Widget_Meta' ); ?>
                </aside><!-- #secondary -->
                <?php } ?>
                 
                </div>
        </div><!-- .site-info -->   
    </div>
    <div class="container">
        <div class="site-info">   
                <?php printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'bottle' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?>   
        </div><!-- .site-info -->       
    </div>
    </footer><!-- #colophon -->
</div><!-- #page -->
 
<?php wp_footer(); ?>
 
</body>
</html>