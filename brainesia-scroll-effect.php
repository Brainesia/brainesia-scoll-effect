<?php 
/*
Plugin Name: Brainesia Scroll Effect
Plugin URI: http://brainesia.com/plugin/brainesia-scroll-effect
Description: Insert effect into your content
Version: 1.0.2
Author: brainesia
Author URI: http://brainesia.com
*/


// Hooks your functions into the correct filters
function bse_add_mce_button() {
 // check user permissions
 if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
     return;
 }
 // check if WYSIWYG is enabled
 if ( 'true' == get_user_option( 'rich_editing' ) ) {
     add_filter( 'mce_external_plugins', 'bse_add_tinymce_plugin' );
     add_filter( 'mce_buttons', 'bse_register_mce_button' );
 }
}
add_action('admin_head', 'bse_add_mce_button');
 
// Declare script for new button
function bse_add_tinymce_plugin( $plugin_array ) {
 $plugin_array['bse_mce_button'] = plugins_url(null, __FILE__) .'/assets/js/brainesia-scroll-effect.js';
 return $plugin_array;
}
 
// Register new button in the editor
function bse_register_mce_button( $buttons ) {
 array_push( $buttons, 'bse_mce_button' );
 return $buttons;
}
//include css for admin panel
function bse_admin_css() {
	wp_enqueue_style('style_shortcodes-bse', plugins_url('assets/css/style.css', __FILE__) );
    wp_enqueue_style('animate_shortcodes-bse', plugins_url('assets/css/animate.css', __FILE__) );
}

function bse_register_script(){
    wp_enqueue_script('bse', plugins_url('assets/js/bse.js', __FILE__),array(),'', true);
}

add_action('wp_enqueue_scripts', 'bse_register_script');
add_action('wp_enqueue_scripts', 'bse_admin_css');
add_action( 'admin_enqueue_scripts', 'bse_admin_css' );

add_shortcode( 'bse', 'brainesia_scroll_effect' );
function brainesia_scroll_effect( $atts, $content=null ) {
    extract( shortcode_atts( array(
        'class' => '',
        'effect' => ''
    ), $atts ) );
    
    switch ($effect) {
        case 'fadeIn':
            $effect1 = 'fadeIn';
            break;
        case 'fadeInDown':
            $effect1 = 'fadeInDown';
            break;
        case 'fadeInDownBig':
            $effect1 = 'fadeInDownBig';
            break;
        case 'fadeInLeft':
            $effect1 = 'fadeInLeft';
            break;
        case 'fadeInLeftBig':
            $effect1 = 'fadeInLeftBig';
            break;
        case 'fadeInUp':
            $effect1 = 'fadeInUp';
            break;
        case 'fadeInLeft':
            $effect1 = 'fadeInLeft';
            break;
        case 'fadeInLeftBig':
            $effect1 = 'fadeInLeftBig';
            break;
        case 'fadeInRight':
            $effect1 = 'fadeInRight';
            break;
        case 'fadeInRightBig':
            $effect1 = 'fadeInRightBig';
            break;
        case 'fadeInUp':
            $effect1 = 'fadeInUp';
            break;
        case 'fadeInUpBig':
            $effect1 = 'fadeInUpBig';
            break;
        case 'fadeOut':
            $effect1 = 'fadeOut';
            break;
        case 'fadeOutDown':
            $effect1 = 'fadeOutDown';
            break;
        case 'fadeOutDownBig':
            $effect1 = 'fadeOutDownBig';
            break;
        case 'fadeOutLeft':
            $effect1 = 'fadeOutLeft';
            break;
        case 'fadeOutLeftBig':
            $effect1 = 'fadeOutLeftBig';
            break;
        case 'fadeOutRight':
            $effect1 = 'fadeOutRight';
            break;
        case 'fadeOutRightBig':
            $effect1 = 'fadeOutRightBig';
            break;
        case 'fadeOutUp':
            $effect1 = 'fadeOutUp';
            break;
        case 'fadeOutUpBig':
            $effect1 = 'fadeOutUpBig';
            break;
        case 'flip':
            $effect1 = 'flip';
            break;
        case 'flipInX':
            $effect1 = 'flipInX';
            break;
        case 'flipInY':
            $effect1 = 'flipInY';
            break;
        case 'flipOutX':
            $effect1 = 'flipOutX';
            break;
        case 'flipOutY':
            $effect1 = 'flipOutY';
            break;
        case 'lightSpeedIn':
            $effect1 = 'lightSpeedIn';
            break;
        case 'lightSpeedOut':
            $effect1 = 'lightSpeedOut';
            break;
        case 'rotateIn':
            $effect1 = 'rotateIn';
            break;
        case 'rotateInDownLeft':
            $effect1 = 'rotateInDownLeft';
            break;
        case 'rotateInDownRight':
            $effect1 = 'rotateInDownRight';
            break;
        case 'rotateInUpLeft':
            $effect1 = 'rotateInUpLeft';
            break;
        case 'rotateInUpRight':
            $effect1 = 'rotateInUpRight';
            break;
        case 'rotateOut':
            $effect1 = 'rotateOut';
            break;
        case 'rotateOutDownLeft':
            $effect1 = 'rotateOutDownLeft';
            break;
        case 'rotateoutDownRight':
            $effect1 = 'rotateoutDownRight';
            break;
        case 'rotateOutUpLeft':
            $effect1 = 'rotateOutUpLeft';
            break;
        case 'rotateOutUpRight':
            $effect1 = 'rotateOutUpRight';
            break;
        case 'bounce':
            $effect1 = 'bounce';
            break;
        case 'bounceIn':
            $effect1 = 'bounceIn';
            break;
        case 'bounceInDown':
            $effect1 = 'bounceInDown';
            break;
        case 'bounceInLeft':
            $effect1 = 'bounceInLeft';
            break;
        case 'bounceInRight':
            $effect1 = 'bounceInRight';
            break;
        case 'bounceInUp':
            $effect1 = 'bounceInUp';
            break;
        case 'bounceOut':
            $effect1 = 'bounceOut';
            break;
        case 'bounceOutDown':
            $effect1 = 'bounceOutDown';
            break;
        case 'bounceOutLeft':
            $effect1 = 'bounceOutLeft';
            break;
        case 'bounceOutRight':
            $effect1 = 'bounceOutRight';
            break;
        case 'bounceOutUp':
            $effect1 = 'bounceOutUp';
            break;
        case 'flash':
            $effect1 = 'flash';
            break;
        case 'pulse':
            $effect1 = 'pulse';
            break;
        case 'rubberBand':
            $effect1 = 'rubberBand';
            break;
        case 'shake':
            $effect1 = 'shake';
            break;
        case 'swing':
            $effect1 = 'swing';
            break;
        case 'tada':
            $effect1 = 'tada';
            break;
        case 'wobble':
            $effect1 = "wobble";
            break;
        case 'hinge':
            $effect1 = 'hinge';
            break;
        case 'rollIn':
            $effect1 = 'rollIn';
            break;
        case 'rollOut':
            $effect1 = 'rollOut';
            break;
        default:
            $effect1 = 'fadeInDown';
    }
        $html = '<div class="bse '.$class.' '.$effect1.'">'.$content.'</div>';
    return $html;
}
