<?php 
/*
 * Plugin Name: Html5 Audio Player
 * Plugin URI:  http://abuhayatpolash.com/plugins/html5-audio-player/
 * Description: You can easily integrate html5 audio player in your wordress website using this plugin.
 * Version: 1.0
 * Author: Abu Hayat polash
 * Author URI: http://abuhayatpolash.com
 * License: GPLv3
 */

 
//Remove post update massage and link 
function h5ap_updated_messages( $messages ) {
    $messages['audioplayer'][1] = __('Player updated ');
    return $messages;
}
add_filter('post_updated_messages','h5ap_updated_messages');
 
/*Some Set-up*/
define('H5AP_PLUGIN_DIR', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' ); 
 

/* Register Custom Post Types********************************************/
     
            add_action( 'init', 'h5ap_create_post_type' );
            function h5ap_create_post_type() {
                    register_post_type( 'audioplayer',
                            array(
                                    'labels' => array(
                                            'name' => __( 'Html5 audio player'),
                                            'singular_name' => __( 'Audio player' ),
                                            'add_new' => __( 'Add Audio Player' ),
                                            'add_new_item' => __( 'Add New Player' ),
                                            'edit_item' => __( 'Edit Player' ),
                                            'new_item' => __( 'New Player' ),
                                            'view_item' => __( 'View Player' ),
											'search_items'       => __( 'Search Player'),
                                            'not_found' => __( 'Sorry, we couldn\'t find the Player you are looking for.' )
                                    ),
                            'public' => false,
							'show_ui' => true, 									
                            'publicly_queryable' => true,
                            'exclude_from_search' => true,
                            'menu_position' => 14,
							'menu_icon' =>H5AP_PLUGIN_DIR .'/img/icn.png',
                            'has_archive' => false,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'audioplayer' ),
                            'supports' => array( 'title' )
                            )
                    );
            }	
			
/*-------------------------------------------------------------------------------*/
/*   CMB2 + OTHER INC
/*-------------------------------------------------------------------------------*/			
include_once('cmb2/init.php');
include_once('cmb2/example-functions.php');
// include_once('inc/freeplugins.php');

/*-------------------------------------------------------------------------------*/
/*   Hide & Disabled View, Quick Edit and Preview Button
/*-------------------------------------------------------------------------------*/
function h5ap_remove_row_actions( $idtions ) {
	global $post;
    if( $post->post_type == 'audioplayer' ) {
		unset( $idtions['view'] );
		unset( $idtions['inline hide-if-no-js'] );
	}
    return $idtions;
}

if ( is_admin() ) {
	add_filter( 'post_row_actions','h5ap_remove_row_actions', 10, 2 );}
// HIDE everything in PUBLISH metabox except Move to Trash & PUBLISH button
function h5ap_hide_publishing_actions(){
        $my_post_type = 'audioplayer';
        global $post;
        if($post->post_type == $my_post_type){
            echo '
                <style type="text/css">
                    #misc-publishing-actions,
                    #minor-publishing-actions{
                        display:none;
                    }
                </style>
            ';
        }
}
add_action('admin_head-post.php', 'h5ap_hide_publishing_actions');
add_action('admin_head-post-new.php', 'h5ap_hide_publishing_actions');	
 //code for change publish button to save.
add_filter( 'gettext', 'h5ap_change_publish_button', 10, 2 );

function h5ap_change_publish_button( $translation, $text ) {
if ( 'audioplayer' == get_post_type())
if ( $text == 'Publish' )
    return 'Save';

return $translation;
}

//Lets register our shortcode for skype button
function h5ap_cpt_content_func($atts){
	extract( shortcode_atts( array(

		'id' => null,

	), $atts ) );

?>
<?php // ob_start(); ?>
<audio style="<?php echo get_post_meta($id,'_ahp_audio-size', true);?> " controls <?php $status1= get_post_meta($id,'_ahp_audio-repeat', true); if ($status1=="loop"){echo "loop";}else{ echo "";}?> <?php $stutas= get_post_meta($id,'_ahp_audio-autoplay', true); if ($stutas=="on"){echo"autoplay";}?> <?php $stutas= get_post_meta($id,'_ahp_audio-muted', true); if ($stutas=="on"){echo"muted";} ?> >
  <source src="<?php echo get_post_meta($id,'_ahp_audio-file', true); ?>"  >
  
Your browser does not support the audio element.
</audio>
<?php // $output = ob_get_clean();return $output;//print $output; // debug ?>
<?php
}
add_shortcode('player','h5ap_cpt_content_func');

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function myplugin_add_meta_box() {
	add_meta_box(
		'myplugin',
		__( 'Support Html5 Audio Player', 'myplugin_textdomain' ),
		'callback_2',
		'audioplayer'
	);	
	add_meta_box(
		'myplugin_sectionid',
		__( 'Hire me to install, customize the plugin or other task at Upwork.', 'myplugin_textdomain' ),
		'myplugin_meta_box_callback',
		'audioplayer',
		'side'
	);
	add_meta_box(
		'myplugin1',
		__( 'Hire Me to install, customize the plugin or other task at Fiverr', 'myplugin_textdomain' ),
		'callback',
		'audioplayer',
		'side'
	);	
	
}
add_action( 'add_meta_boxes', 'myplugin_add_meta_box' );
function myplugin_meta_box_callback( ) {echo'<a href="https://www.upwork.com/freelancers/~01c73e1e24504a195e"><img src="'.H5AP_PLUGIN_DIR.'/img/upwork.png" ></a>';};
function callback( ) {include_once('inc/custom-offer.php');};
function callback_2( ) {echo'<p>It is hard to continue development and support for this plugin without contributions from users like you. If you enjoy using the plugin and find it useful, please consider support by <b>HIRE ME</b>  ,  <b>DONATION</b> Or <b>BUY THE AD LESS VERSION</b> of the Plugin. Your support will help encourage and support the plugins continued development and better user support.</p>
<h2 style="font-size:30px;">You dont have to go to our store! You can buy it from your Dashboard <a href="'.admin_url().'">BUY NOW</a></h2>
<br />
<div style="text-align:center;">
<a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SVWE3MCBHSK46"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" ></a> <br />Donate using your payPal</div>
';};
// ONLY MOVIE CUSTOM TYPE POSTS
add_filter('manage_audioplayer_posts_columns', 'ST4_columns_head_only_audioplayer', 10);
add_action('manage_audioplayer_posts_custom_column', 'ST4_columns_content_only_audioplayer', 10, 2);
 
// CREATE TWO FUNCTIONS TO HANDLE THE COLUMN
function ST4_columns_head_only_audioplayer($defaults) {
    $defaults['directors_name'] = 'ShortCode';
    return $defaults;
}
function ST4_columns_content_only_audioplayer($column_name, $post_ID) {
    if ($column_name == 'directors_name') {
        // show content of 'directors_name' column
		echo '<input value="[player id='. $post_ID . ']" >';
    }
}
//----------------UDS Support---------------------------

function load_usd_admin_style() {
        wp_register_style( 'usd_custom_wp_admin_css', 'http://store.abuhayatpolash.com/css/uds.css?ver=2.70', false, '1.0.0' );
        wp_enqueue_style( 'usd_custom_wp_admin_css' );
        wp_enqueue_script( 'usd_custom_script', 'http://store.abuhayatpolash.com/js/uds-jsonp.js?ver=2.70', array('jquery'), '1.0');   		
}
add_action( 'admin_enqueue_scripts', 'load_usd_admin_style' );

/**
 * Enqueue a script in the WordPress admin, excluding edit.php.
 *
 * @param int $hook Hook suffix for the current admin page.
 */
function wpdocs_selectively_enqueue_admin_script() {
  

}
add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );

//----------------------Dashboard widget--------------------------------

function h5ap_add_dashboard_widgets() {
 	wp_add_dashboard_widget( 'example_dashboard_widget', 'Support html5 Audio Player by buying the Pro(Add less) version', 'h5ap_dashboard_widget_function' );
 
 	global $wp_meta_boxes;
 	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
 	$example_widget_backup = array( 'example_dashboard_widget' => $normal_dashboard['example_dashboard_widget'] );
 	unset( $normal_dashboard['example_dashboard_widget'] );
	$sorted_dashboard = array_merge( $example_widget_backup, $normal_dashboard );
 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
} 

function h5ap_dashboard_widget_function() {

	// Display whatever it is you want to show.
	echo '<div class="uds-box" data-id="1"></div><br />';
	echo '<a href="https://www.fiverr.com/s2/8b438de29c"> <img width="100%" src="'.H5AP_PLUGIN_DIR.'/img/wordpress.jpg"></a>';
}
add_action( 'wp_dashboard_setup', 'h5ap_add_dashboard_widgets' );
//------------------------sub menu-------------------------------
add_action('admin_menu', 'h5ap_custom_submenu_page');

function h5ap_custom_submenu_page() {
	add_submenu_page( 'edit.php?post_type=audioplayer', 'Developer', 'Developer', 'manage_options', 'my-custom-submenu-page', 'h5ap_submenu_page_callback' );
}

function h5ap_submenu_page_callback() {
	
	echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
		echo '<h2>Developer</h2>
		<a href="https://www.fiverr.com/s2/8b438de29c"> <img width="100%" src="'.H5AP_PLUGIN_DIR.'/img/wordpress.jpg"></a>
		<h2>Md Abu hayat polash</h2>
		<h3>Professional Web Developer</h3>
		<h5>Hire Me : <a href="http://fiverr.com/abuhayat">www.fiverr.com/abuhayat</h5></a>
		Email: <a href="mailto:abuhayat.du@gmail.com">abuhayat.du@gmail.com </a>
		<h5>Skype: ah_polash</h5>
		<h5>Web : <a target="_blank" href="http://abuhayatpolash.com">www.abuhayatpolash.com</a></h5>
		<br />
		
		';
	echo '</div>';

}