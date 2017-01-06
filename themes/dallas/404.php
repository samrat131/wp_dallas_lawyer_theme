<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

get_header(); ?>

<div class="body-full">
<div class="wrapper">

	<section class="block-body">
		<div class="left">
			<div class="left-content">

				<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dallas' ); ?></h2>

				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'dallas' ); ?></p>

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
