<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

?>
<!-- 
[text* name class:form-inputbox placeholder "Name"]
[tel* phone class:form-inputbox placeholder "Phone"]
[email* email class:form-inputbox placeholder "Email"]
[textarea* message class:form-textarea placeholder "Message"]
[submit class:form-submit "Submit"] 
-->
<div class="form-body">
	<?php echo do_shortcode( '[contact-form-7 id="232" title="Sidebar Contact form 1"]' ) ?>
</div>

<div class="right-logo">
	<ul>
    	<li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-icon2.png" alt="Image" title="Image"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-icon3.png" alt="Image" title="Image"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-icon4.png" alt="Image" title="Image"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-icon5.png" alt="Image" title="Image"></a></li>
    </ul>
</div>

<?php if (is_front_page()): ?>
<div class="success-stories">
	<h3>success stories</h3>
    <p>“A man was pulled over for speeding and police found drugs in his pocket. Walker Fults argued the search was unlawful and had the drug evidence thrown out at trial, resulting in the client being found completely not guilty.”</p>
    <p>“A woman had over ten outstanding warrants for her arrest in three different North Texas counties for multiple class B and C misdemeanors. She hired Walker Fults, who successfully arranged a coordinated plan to satisfy all warrants and put his client right with the law.”</p>
    <p style="margin:0px;"><a href="#">View More Stories</a></p>
</div>
<?php else: ?>
<div class="practice-areas">
	<h3>Practice Areas</h3>
    <?php wp_nav_menu( array( 'menu' =>'SidebarMenu','container'=>'', 'container_class'=>'','container_id'=>'', 'menu_class'=>'' ) ); ?>
</div>
<?php endif ?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif ?>

