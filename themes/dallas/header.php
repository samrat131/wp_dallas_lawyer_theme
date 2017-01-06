<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<?php 
if ( has_post_thumbnail() ) {
    $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
        echo '<style type="text/css">body.home .index-full{background-image: url(' . esc_url( $large_image_url[0] ) . ')}</style>';
    }
}
?>
</head>

<body <?php body_class(); ?>>

<div class="header-full">
<div class="wrapper">

	<header>
        <?php $description = get_bloginfo( 'description', 'display' ); ?>
    	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory') ?>/images/dcl-logo.png" alt="<?php echo $description; ?>" title="<?php echo $description; ?>"></a></div>
        <div class="header-right">
            <div class="calltoday">
                <p>Call Today for a Free Consultation:</p>
                <p class="prepand2"><a><i class="fa fa-phone"></i> (214) 797-1861</a></p>
            </div>
            <div class="header-button">
            	<ul>
                	<li><input name="" type="button" class="free-case" value="Free Case Evaluation"></li>
                    <li>
                    	<input name="" type="button" class="search-button" onclick="jQuery('.search-body').slideToggle()">
                        <div class="search-body">
                            <?php get_search_form(true); ?>
                        </div>
                    </li>
                </ul>                
            </div>
        </div>
    </header>

</div>
</div>
<?php 
$menuClassPrefix = '';
if ( is_front_page() ) {
    $menuClassPrefix = 'index-';
}
?>
<div class="<?php echo $menuClassPrefix ?>nav-full">
<div class="wrapper">

    	<div>
        	<div class="btn" onClick="display(1);">Menu</div>
        </div>
        <?php wp_nav_menu( array( 'menu' =>'TopMenu','container'=>'nav', 'container_class'=>'','container_id'=>'myslidemenu1', 'menu_class'=>'' ) ); ?>
</div>
</div>

<?php if ( is_front_page() ): ?>
<div class="index-full" style="<?php  
            if (function_exists('get_opt')) {
                if (get_opt('banner_header') != '') {
                    echo "background-image: url('".get_opt('banner_header')."')";
                }
            }
            ?>">
    <section class="index-header">
        <h1><?php  
            if (function_exists('get_opt')) {
                echo get_opt('banner_text');
            }
            ?></h1>
    </section>
</div>
<?php endif ?>

<?php /* ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dallas' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dallas' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<?php */ ?>