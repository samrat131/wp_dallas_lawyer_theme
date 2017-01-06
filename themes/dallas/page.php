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
			<?php if (is_page( 'practice-areas' )): ?>
			<div class="index-content" style="margin: 0px; padding-top: 0px; border: 0px;">
			<?php endif ?>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
			<?php if (is_page( 'practice-areas' )): ?>
			</div>
			<?php endif ?>
        </div>
        <div class="right">
        	<?php get_sidebar(); ?>
        </div>
    </section>

</div>
</div>

<?php
get_footer();
