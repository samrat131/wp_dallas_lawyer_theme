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
<?php /* ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php */ ?>
<div class="body-full">
<div class="wrapper">

	<section class="block-body">
    	<div class="left">
        	<div class="left-content">
            	<h2>Dallas Criminal Defense Lawyer home</h2>
                <div class="image">
                	<div><img src="<?php bloginfo('template_directory') ?>/images/dcl-image.jpg" alt="Image" title="Image"></div>
                    <div class="image-font">Walker Fults</div>
                </div>
                <p>Facing criminal charges can be a frightening prospect. A criminal conviction can block work opportunities, damage relationships, ruin your finances, and even land you in prison.</p>
                <p>You don’t have to go through it alone. You’re entitled to a strong defense. Hire Walker Fults to confidently fight for your best interests and maximize your chance of a positive outcome. Walker Fults has years of experience and will handle every step of the process to ensure you get the best outcome possible.</p>
                <p>Your future is too important to leave to chance. If you have been charged, deadlines are already approaching for you to take action. Call or request a free consultation right now to find out what your options are, and apply for your case to be accepted by our legal team.</p>
            </div>
            <div class="index-content">
            	<h2>Criminal Defense Practice Areas</h2>
                <p>There is a wide variety of different criminal charges that can confront you, each with different potential impacts on your future. Walker Fults prides himself on his client oriented approach: he treats you as a person, not a case number. He will meet you individually, learn all the facts and circumstances surrounding your unique scenario, advise you of different possible defense paths, and work to create the best possible solution that is both strategic and results-oriented.</p>
                <ul>
                	<li>
                    	<img src="<?php bloginfo('template_directory') ?>/images/dcl-image4.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3>Alcohol Offenses</h3>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory') ?>/images/dcl-image10.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3>Assault and Battery Offenses</h3>
                        </div>
                    </li>
                    <li>
                    	<img src="<?php bloginfo('template_directory') ?>/images/dcl-image3.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3>Drug Offenses</h3>
                        </div>
                    </li>
                    <li>
                    	<img src="<?php bloginfo('template_directory') ?>/images/dcl-image7.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3>Expunction</h3>
                        </div>
                    </li>
                    <li>
                    	<img src="<?php bloginfo('template_directory') ?>/images/dcl-image5.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3>Gun Crimes</h3>
                        </div>
                    </li>
                    <li>
                    	<img src="<?php bloginfo('template_directory') ?>/images/dcl-image6.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3>Juvenile Offenses</h3>
                        </div>
                    </li> 
                    <li>
                    	<img src="<?php bloginfo('template_directory') ?>/images/dcl-image8.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3>Sex Crimes</h3>
                        </div>
                    </li>                    
                	<li>
                    	<img src="<?php bloginfo('template_directory') ?>/images/dcl-image2.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3><a href="texas-open-carry-violations.html">Texas Open Carry Violations</a></h3>
                        </div>
                    </li>
                    <li>
                    	<img src="<?php bloginfo('template_directory') ?>/images/dcl-image9.jpg" alt="Image" title="Image">
                        <div class="index-image-popup">
                        	<h3>Theft and Robbery Offenses</h3>
                        </div>
                    </li>
                </ul>
                <p>Seldom do the accused get a second chance to present their best defense. Do it right the first time by hiring Walker Fults.</p>
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
