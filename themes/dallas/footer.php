<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

?>
<div class="bottom-full">
<div class="wrapper">

	<section class="bottom">
    	<div class="main-body">
        	<div class="bottom-left">
            	<h2>Recent Posts</h2>
                <ul>
                <?php
                    $recent_posts = wp_get_recent_posts(array('numberposts' => 5));
                    foreach( $recent_posts as $recent ){
                        echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                    }
                    wp_reset_query();
                ?>
                </ul>
            </div>
            <div class="bottom-mid">
                <?php  
                if (function_exists('get_opt')) {
                    echo get_opt('footer_contact_address', true);
                }
                ?>
            </div>
            <div class="bottom-right"><?php  
            if (function_exists('get_opt')) {
                if (get_opt('footer_map')!='') {
                    echo '<div class="video-wrap">';
                    echo get_opt('footer_map', true);
                    echo '</div>';
                }
            }
            ?></div>
        </div>
        <div class="bottom-nav">
        	<div>
                <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>   
            </div>
            <?php wp_nav_menu( array( 'menu' =>'FooterMenu','container'=>'', 'container_class'=>'','container_id'=>'', 'menu_class'=>'' ) ); ?>
            <?php  
            if (function_exists('get_opt')) {
                echo get_opt('copy_right_text', true);
            }
            ?>
        </div>
    </section>

</div>
</div>

<div class="footer-full">
<div class="wrapper">

	<footer>
        <?php  
        if (function_exists('get_opt')) {
            echo get_opt('footer_text', true);
        }
        ?>
    </footer>

</div>
</div>

<?php /* ?>
<div class="free-case-popup">
	<div class="free-case-cross"><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-cross.png" alt="Cross" title="Cross"></a></div>
    <h2>Confidential Free Case Evaluation</h2>
    <div><input name="" type="text" class="free-case-inputbox" value="Name" onblur="this.value=(this.value=='') ? 'Name' : this.value;" onfocus="this.value=(this.value=='Name') ? '' : this.value;"></div>
    <div><input name="" type="text" class="free-case-inputbox" value="Phone" onblur="this.value=(this.value=='') ? 'Phone' : this.value;" onfocus="this.value=(this.value=='Phone') ? '' : this.value;"></div>
    <div><input name="" type="text" class="free-case-inputbox" value="Email" onblur="this.value=(this.value=='') ? 'Email' : this.value;" onfocus="this.value=(this.value=='Email') ? '' : this.value;"></div>
    <div><textarea name="" cols="" rows="" class="free-case-textarea" onblur="this.value=(this.value=='') ? 'Message' : this.value;" onfocus="this.value=(this.value=='Message') ? '' : this.value;">Message</textarea></div>
    <div><input name="" type="button" class="free-case-submit" value="submit"></div>
</div><?php */ ?>

<?php wp_footer(); ?>

</body>
</html>
