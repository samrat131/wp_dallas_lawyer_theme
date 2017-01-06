<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

?>

<article id="post-<?php the_ID(); ?> " <?php post_class(); ?>>

	
		<div class="blog-post">
            <div><img src="<?php bloginfo('template_directory') ?>/images/dcl-blog-image.jpg" alt="Image" title="Image"></div>
            <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?><?php echo $i.'555' ?>
        
			<p><?php dallas_posted_on(); ?></p>
		
            <div class="font2"><a href="blog-details.html">Read Full Post <i class="fa fa-long-arrow-right"></i></a></div>
        </div>
	
</article><!-- #post-## -->
