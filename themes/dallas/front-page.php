<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

get_header(); ?>

<div class="body-full">
<div class="wrapper">

	<section class="block-body">
		<div class="left">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
			<div class="index-content">
			<?php
			// WP_Query arguments
			$args = array (
				'post_type'             => 'page',
				'post_status'           => 'publish',
				'pagename'				=> 'practice-areas',
				'orderby'				=> 'menu_order',
				'order'					=> 'ASC',
				'posts_per_page'		=> 1
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					get_template_part( 'template-parts/content', 'page' );
				}
			} else {
				echo '<p>Sorry, no post found.</p>';
			}
			// Restore original Post Data
			wp_reset_postdata();
			?>
			</div>
        </div>
        <div class="right">
        	<?php get_sidebar(); ?>
        </div>
    </section>

</div>
</div>

<?php
get_footer();
