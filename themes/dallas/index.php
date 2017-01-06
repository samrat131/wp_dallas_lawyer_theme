<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

get_header(); ?>

<div class="body-full">
<div class="wrapper">

    <section class="block-body">
        <div class="blog-left">

            <?php
            $i = 0;
            if ( have_posts() ) :

                while ( have_posts() ) : the_post();

                    //get_template_part( 'template-parts/content', 'post' );
            ?>
            <?php if ($i%2==0): ?>
                <div class="main-body">
            <?php endif ?>
                    <div class="blog-post<?php if ($i%2==1) echo '2'; ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('blog-thumb'); ?></a></div>
                        <?php endif; ?>
                        <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
                    
                        <p><?php dallas_posted_on(); ?></p>
                    
                        <div class="font2"><a href="<?php echo esc_url( get_permalink() ); ?>">Read Full Post <i class="fa fa-long-arrow-right"></i></a></div>
                    </div>
            <?php if (++$i%2==0): ?>
                </div>
            <?php endif ?>
            <?php

                endwhile;

                //echo $i;
                //the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>


            <?php if ($i%2==1): ?>
                </div>
            <?php endif ?>
                       
            <?php wp_pagenavi(); ?>
        </div>
        <div class="blog-right">
            <?php get_sidebar('blog'); ?>
        </div>
    </section>

</div>
</div>
<?php
get_footer();
