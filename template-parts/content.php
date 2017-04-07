<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bottle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
	
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<div id="post" class="picturesque" style="background-image: url('<?php echo $thumb['0'];?>')">
		
		<div class="standard-container">
		<!-- BEGIN CONTENT -->
		<?php the_content( $more_link_text = null, $strip_teaser = false) ?>
		<!-- END CONTENT -->
		</div>
		
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->