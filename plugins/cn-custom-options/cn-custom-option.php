<?php
/*
Plugin Name: Cn Theme options
Plugin URI: http://www.cybernetikz.com
Description: Cn Theme options
Version: 1.0
Author: cybernetikz
Author URI: http://www.cybernetikz.com
License: GPL2
*/

if(! defined('ABSPATH')) 
	die('-1');
	
unset($cnco_header_title, $cnco_prefix, $cnco_options);

function validate_string($str)
{
	if($str=='') return;
	return preg_replace("/[^A-Za-z0-9]/", "", $str);
}

$cnco_header_title = 'Theme Options Page';
$cnco_prefix = 'cnz_';
$cnco_options = 
array(

	//Header
	array(
		'option_name'=>'separator',
		'type'=>'line',
		'class'=>'home_class',
		'title'=>'Header',
		'instruction'=>'',
	),
	array(
		'option_name'=>'logo_header',
		'type'=>'image',
		'class'=>'regular-text',
		'title'=>'Logo',
		'instruction'=>'',
	),
	array(
		'option_name'=>'banner_header',
		'type'=>'image',
		'class'=>'regular-text',
		'title'=>'Banner',
		'instruction'=>'',
	),
	array(
		'option_name'=>'banner_text',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Banner Text',
		'instruction'=>'',
	),
	array(
		'option_name'=>'prefix_phone_text',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Prefix Phone Text',
		'instruction'=>'',
	),
	array(
		'option_name'=>'phone',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Phone number',
		'instruction'=>'',
	),
	//footer
	array(
		'option_name'=>'separator',
		'type'=>'line',
		'class'=>'footer_class',
		'title'=>'Footer',
		'instruction'=>'',
	),
	array(
		'option_name'=>'footer_contact_address',
		'type'=>'editor',
		'settings'=>array('wpautop'=>true, 'media_buttons'=>false, 'teeny'=>true, 'editor_height'=>200),
		'title'=>'Footer Contact Address',
		'instruction'=>'',
	),
	array(
		'option_name'=>'footer_map',
		'type'=>'textarea',
		'title'=>'Google Map (Iframe)',
		'class'=>'large-text',
		'instruction'=>'',
	),
	array(
		'option_name'=>'copy_right_text',
		'type'=>'editor',
		'settings'=>array('wpautop'=>true, 'media_buttons'=>false, 'teeny'=>true, 'editor_height'=>150),
		'title'=>'Copy right text',
		'instruction'=>'',
	),
	array(
		'option_name'=>'footer_text',
		'type'=>'editor',
		'settings'=>array('wpautop'=>true, 'media_buttons'=>false, 'teeny'=>true, 'editor_height'=>200),
		'title'=>'Footer Text',
		'instruction'=>'',
	),
	/*
	array(
		'option_name'=>'title_block1',
		'type'=>'input',
		'class'=>'large-text',
		'title'=>'Title Block1',
		'instruction'=>'',
	),
	array(
		'option_name'=>'link_block1',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Link Block1',
		'instruction'=>'',
	),
	array(
		'option_name'=>'content_block1',
		'type'=>'editor',
		'settings'=>array('wpautop'=>true, 'media_buttons'=>false, 'teeny'=>true, 'editor_height'=>150),
		'title'=>'Content Block1',
		'instruction'=>'',
	),
	//block2
	array(
		'option_name'=>'image_block2',
		'type'=>'image',
		'class'=>'regular-text',
		'title'=>'Image Block2',
		'instruction'=>'',
	),
	array(
		'option_name'=>'title_block2',
		'type'=>'input',
		'class'=>'large-text',
		'title'=>'Title Block2',
		'instruction'=>'',
	),
	array(
		'option_name'=>'link_block2',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Link Block2',
		'instruction'=>'',
	),
	
	array(
		'option_name'=>'content_block2',
		'type'=>'editor',
		'settings'=>array('wpautop'=>true, 'media_buttons'=>false, 'teeny'=>true, 'editor_height'=>150),
		'title'=>'Content Block2',
		'instruction'=>'',
	),
	//block3
	array(
		'option_name'=>'image_block3',
		'type'=>'image',
		'class'=>'regular-text',
		'title'=>'Image Block3',
		'instruction'=>'',
	),
	array(
		'option_name'=>'title_block3',
		'type'=>'input',
		'class'=>'large-text',
		'title'=>'Title Block3',
		'instruction'=>'',
	),
	array(
		'option_name'=>'link_block3',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Link Block3',
		'instruction'=>'',
	),
	
	array(
		'option_name'=>'content_block3',
		'type'=>'editor',
		'settings'=>array('wpautop'=>true, 'media_buttons'=>false, 'teeny'=>true, 'editor_height'=>150),
		'title'=>'Content Block3',
		'instruction'=>'',
	),

	//header
	array(
		'option_name'=>'separator',
		'type'=>'line',
		'class'=>'header_class',
		'title'=>'Header',
		'instruction'=>'',
	),
	array(
		'option_name'=>'header_logo',
		'type'=>'image',
		'class'=>'regular-text',
		'title'=>'Header logo',
		'instruction'=>'252px x 89px',
	),
	array(
		'option_name'=>'phone',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Phone number',
		'instruction'=>'',
	),
	
	//footer
	array(
		'option_name'=>'separator',
		'type'=>'line',
		'class'=>'footer_class',
		'title'=>'Footer',
		'instruction'=>'',
	),
	array(
		'option_name'=>'footer_logo',
		'type'=>'image',
		'class'=>'regular-text',
		'title'=>'Footer logo',
		'instruction'=>'260px x 88px',
	),
	array(
		'option_name'=>'footer_fb',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Facebook',
		'instruction'=>'don\'t forget <code>http://</code>',
	),
	array(
		'option_name'=>'footer_tw',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Twitter',
		'instruction'=>'don\'t forget <code>http://</code>',
	),
	array(
		'option_name'=>'footer_gp',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Google Plus',
		'instruction'=>'don\'t forget <code>http://</code>',
	),
	array(
		'option_name'=>'footer_sky',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Skype link',
		'instruction'=>'don\'t forget <code>http://</code>',
	),
	array(
		'option_name'=>'footer_in',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'LinkedIn',
		'instruction'=>'don\'t forget <code>http://</code>',
	),
	array(
		'option_name'=>'footer_yt',
		'type'=>'input',
		'class'=>'regular-text',
		'title'=>'Youtube',
		'instruction'=>'don\'t forget <code>http://</code>',
	),
	
	array(
		'option_name'=>'copy_right_text',
		'type'=>'editor',
		'settings'=>array('wpautop'=>true, 'media_buttons'=>false, 'teeny'=>true, 'editor_height'=>150),
		'title'=>'Copy right text',
		'instruction'=>'',
	),
	array(
		'option_name'=>'contact_info',
		'type'=>'textarea',
		'class'=>'large-text',
		'title'=>'Contact Info',
		'instruction'=>'',
	),
	
	/*
	//Testimonial
	array(
		'option_name'=>'separator',
		'type'=>'line',
		'class'=>'home_class',
		'title'=>'Testimonial',
		'instruction'=>'',
	),
	array(
		'option_name'=>'editor',
		'type'=>'editor',
		'class'=>'',
		'title'=>'Wysiwyg',
		'instruction'=>'',
	),	
	array(
		'option_name'=>'footer_logo',
		'type'=>'image',
		'class'=>'regular-text',
		'title'=>'Footer logo',
		'instruction'=>'400px x 200px',
	),
	array(
		'option_name'=>'nextgen_gids',
		'type'=>'textarea',
		'class'=>'large-text',
		'title'=>'Gallery Id(s)',
		'instruction'=>'',
	),
	array(
		'option_name'=>'facebook',
		'type'=>'input',
		'class'=>'large-text',
		'title'=>'facebook',
		'instruction'=>'don\'t forget <code>http://</code>',
	),
	array(
		'option_name'=>'height',
		'type'=>'input',
		'class'=>'small-text',
		'title'=>'Height',
		'instruction'=>'px',
	),
	array(
		'option_name'=>'dropdown',
		'type'=>'select',
		'class'=>'',
		'title'=>'dropdown',
		'instruction'=>'',
		'option'=>array(''=>' ','hello'=>'Hello','hello2'=>'Hello2','hello3'=>'Hello3'),
	),
	array(
		'option_name'=>'checkbox',
		'type'=>'checkbox',
		'class'=>'',
		'title'=>'checkbox',
		'instruction'=>'',
		'label'=>'Enable custom option',
	),
	array(
		'option_name'=>'show_menu',
		'type'=>'select',
		'class'=>'',
		'title'=>'Do you want to show menu?',
		'instruction'=>'',
		'option'=>array(''=>' ','1'=>'Yes','0'=>'No'),
	),
	array(
		'option_name'=>'sex',
		'type'=>'radio',
		'class'=>'',
		'title'=>'Sex',
		'instruction'=>'',
		'option'=>array('1'=>'Male','0'=>'Female'),
	),*/
	
);

function get_opt($key,$wpautop = false)
{
	global $cnco_prefix;
	if($key=='')return;
	if($wpautop) 
		return wpautop(get_option($cnco_prefix.$key));
	else
		return get_option($cnco_prefix.$key);
}

add_action('admin_menu', 'cnco_add_menu_pages');
function cnco_add_menu_pages() {
	add_menu_page('Options', 'Theme Option', 'manage_options', 'cnco_plugins_option', 'cnco_plugins_option_fn','dashicons-admin-appearance');
}

add_action( 'admin_init', 'register_cnco_settings' );
function register_cnco_settings() {
	global $cnco_options,$cnco_prefix;
	foreach($cnco_options as $option)
	{
		$option_name = $cnco_prefix.$option['option_name'];
		register_setting( $cnco_prefix.'settings-group', $option_name );
	}
}

function cnco_admin_enqueue() {
	//global $pluginsURI;
	$pluginsURI = plugins_url('cn-custom-options');
	wp_enqueue_media();
	wp_register_script('cnco_admin_js', $pluginsURI . '/js/cnco_admin.js', array(), mt_rand(1,1) );
	wp_enqueue_script( 'cnco_admin_js' );
}

if( isset($_GET['page']) ) {
	if( $_GET['page']=='cnco_plugins_option' ) {
		add_action('admin_enqueue_scripts', 'cnco_admin_enqueue' );
	}
}

function cnco_plugins_option_fn() {
	global $cnco_options,$cnco_header_title,$cnco_prefix;
	?>
	<div class="wrap">
	<h2 id="top"><?php echo $cnco_header_title ?></h2>

	<?php 
	if(isset($_GET['settings-updated'])) { 
		if($_GET['settings-updated']=='true') { 
	?>
	<div id="setting-error-settings_updated" class="updated settings-error"><p><strong>Settings saved.</strong></p></div>
	<?php } } ?>
    
	|<?php
    foreach($cnco_options as $option)
    {
    	if($option['type']=='line') {
			echo ' <a href="#'.validate_string($option['title']).'">'.$option['title'] . '</a> | ';
		}
		else continue;
	}
	?>
    <style type="text/css">.wp-editor-area{ height:300px;}</style>
	<form method="post" action="options.php" enctype="multipart/form-data">
		<?php settings_fields( $cnco_prefix.'settings-group' ); ?>
		<table class="form-table">
			<?php
			foreach($cnco_options as $option)
			{
				$option_name = $cnco_prefix.$option['option_name'];
				
			if($option['type']=='line') {
			?>
			<tr valign="top">
				<td style="padding:0" colspan="2">
				<p id="<?php echo validate_string($option['title']); ?>" class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /><a style="text-decoration:none; float:right;" href="#top">Top &uarr;</a></p>
				<h3 style="border-bottom:#CCCCCC 1px dotted;" class="<?php echo $option['class'] ?>"><?php echo $option['title'] ?></h3></td>
			</tr>
			<?php
			} 
			else
			{
			?>
			<tr valign="top">
				<th scope="row"><?php echo $option['title'] ?></th>
				<td>
					<?php
					if($option['type']=='input') {
					?>
					<input type="text" name="<?php echo $option_name ?>" id="<?php echo $option_name ?>" class="<?php echo $option['class'] ?>" value="<?php echo get_option($option_name) ?>" />&nbsp;<em><?php echo $option['instruction'] ?></em>
					<?php
					}
					if($option['type']=='textarea') {
					?>
					<textarea name="<?php echo $option_name ?>" id="<?php echo $option_name ?>" class="<?php echo $option['class'] ?>"><?php echo get_option($option_name) ?></textarea><?php echo $option['instruction'] ?>
					<?php
					}
					if($option['type']=='select') {
					?>
					<select name="<?php echo $option_name ?>" id="<?php echo $option_name ?>" class="<?php echo $option['class'] ?>">
					<?php 
					foreach ($option['option'] as $key=>$value)
					{
					?>
						<option <?php if(get_option($option_name)==$key) echo 'selected="selected"'; ?> value="<?php echo $key ?>"><?php echo $value ?></option>
					<?php
					}
					?>
					</select><?php echo $option['instruction'] ?>
					<?php
					}
					if($option['type']=='radio') { ?>
					<?php 
						foreach ($option['option'] as $key=>$value)
						{
							$radio_id = $option_name.'-'.strtolower(str_replace(' ','-',$value));
						?>
						<input type="radio" name="<?php echo $option_name ?>" id="<?php echo $radio_id ?>" value="<?php echo $key; ?>" <?php if(get_option($option_name)==$key) echo 'checked="checked"' ?> />
						<label for="<?php echo $radio_id ?>"><?php echo $value; ?></label>&nbsp;&nbsp;&nbsp;
						<?php
						}
					}
					if($option['type']=='checkbox') {
					?>
					<input type="checkbox" name="<?php echo $option_name ?>" id="<?php echo $option_name ?>" class="<?php echo $option['class'] ?>" <?php if(get_option($option_name)==1) echo 'checked="checked"' ?> value="1" />&nbsp;<label for="<?php echo $option_name ?>"><?php echo $option['label'] ?></label>
					<?php
					}
					if($option['type']=='editor') {
						$content = get_option($option_name);
						$editor_id = $option_name;
						wp_editor( $content, $editor_id, $settings = is_array($option['settings'])?$option['settings']:array() );
					}
					
					if($option['type']=='image') { 
						if(get_option($option_name)=='')
							$imgsrc = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
						else
							$imgsrc = get_option($option_name);
					?>
					<div id="<?php echo $option_name ?>_image_wrap">
						<input type="text" name="<?php echo $option_name ?>" id="<?php echo $option_name ?>" class="<?php echo $option['class'] ?>" value="<?php echo get_option($option_name) ?>" />
						<input data-field="<?php echo $option_name ?>" data-image="<?php echo $option_name ?>_placeholder" class="cnco_image_button button" type="button" value="Choose Image" />
						<em><?php echo $option['instruction'] ?></em><br />
						<img style="margin:2px; max-width:460px; height:auto;" id="<?php echo $option_name ?>_placeholder" src="<?php echo $imgsrc ?>" border="0" alt="img" />
					</div>
					<?php
					}
					?>
				</td>
			</tr>
			<?php
			} 
			}
			?>
		</table>
		<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /><a style="text-decoration:none; float:right;" href="#top">Top &uarr;</a></p>
	</form>
	</div>
	<?php
}