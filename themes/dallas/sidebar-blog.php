<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

?>
<div class="blog-list">
    <?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-blog' ); ?>
    <?php endif ?>
</div>
<div class="blog-logo">
    <ul>
        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-icon2.png" alt="Image" title="Image"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-icon3.png" alt="Image" title="Image"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-icon4.png" alt="Image" title="Image"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/dcl-icon5.png" alt="Image" title="Image"></a></li>
    </ul>
</div>