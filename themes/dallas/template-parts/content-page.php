<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

?>

<div id="post-<?php the_ID(); ?>" class="left-content" <?php //post_class(); ?>>
	
	<h2 class="page-title"><?php 
	if (function_exists('get_field')) {
		if (get_field('sub_title')) {
			echo get_field('sub_title');
		} else {
			the_title(); 
		}
	}
	?></h2>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dallas' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'dallas' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
		
	<?php endif; ?>
</div><!-- #post-## -->
