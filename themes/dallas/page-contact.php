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
		<div class="contact-left">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
        
            
            
            
        </div>

        <div class="contact-right">
        	<div class="form-body">
        	<?php echo do_shortcode( '[contact-form-7 id="233" title="Contact Form"]' ) ?>
			<!-- <h2>Contact Form</h2>
			<div class="main-body">[text* cname class:form-inputbox placeholder "Name*"]</div>
			<div class="main-body">[tel cphone class:form-inputbox placeholder "Phone*"]</div>
			<div class="main-body">[email cemail class:form-inputbox placeholder "Email*"]</div>                
			<div class="main-body">[text caddress class:form-inputbox placeholder "Address"]</div>
			<div class="main-body">[text caddress2 class:form-inputbox placeholder "Street Address"]</div>
			<div class="main-body">[text caddress3 class:form-inputbox placeholder "Address Line 2"]</div>
			<div class="main-body">
			<div class="city">[text ccity class:form-inputbox placeholder "City"]</div>
			<div class="state">[select cstate class:form-selectbox include_blank "Dallas" "Florida" "New York"]</div>
			</div>
			<div class="main-body">[text czipcode class:form-inputbox placeholder "Zip Code"]</div>
			<div class="main-body">[textarea ccomments class:form-textarea placeholder "Comments"]</div>
			<div class="main-body">[submit class:form-submit "Submit"]</div> -->
            </div>            
        </div>
    </section>

</div>
</div>

<?php //get_sidebar(); ?>
<?php
get_footer();
