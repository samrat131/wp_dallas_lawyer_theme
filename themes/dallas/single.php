<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

get_header(); ?>

<div class="body-full">
<div class="wrapper">

	<section class="block-body">
    	<div class="blog-left">
    		<?php if (has_post_thumbnail()) : ?>
				<div class="main-body"><?php the_post_thumbnail('full'); ?></div>
    		<?php endif; ?>
             

             <?php /* ?><div class="blog-share-button"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-fblike.jpg" alt="Facebook Like" title="Facebook Like"></a><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-tweetlike.jpg" alt="Tweet Like" title="Tweet Like"></a><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-googleshare.jpg" alt="Google Share" title="Google Share"></a><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-linkedshare.jpg" alt="LinkedIn Share" title="LinkedIn Share"></a></div><?php */ ?>

          <div class="blog-details-content">
          <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
            </div>
            <div class="previous-next">
            	<ul>
                	<?php echo get_previous_post_link('<li class="nav-previous">%link</li>','« Previous Blog'); ?>
                    <?php echo get_next_post_link('<li class="nav-next">%link</li>','Next Blog »'); ?>
                </ul>
            </div>
        </div>
        <div class="blog-right">
			<?php get_sidebar('blog'); ?>
        </div>
    </section>

</div>
</div>
<?php
get_footer();
