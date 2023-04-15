<?php
/*
Plugin Name: wlticker
Plugin URI: http://wltickery/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: zahra kalbasi
Version: 1.7.2
Author URI: http::/zahrakalbasi.ir
*/

define('plagin_version','0.0.1');
define('plagin_neme','wlticker');

require_once('class/class-base.php');
global $WLTICKER;
$WLTICKER = new WLTICKER;
require_once('inc/post-type.php');

function wl_ticker_activation(){
    wlticke_post_type();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__,'wl_ticker_activation');

function wl_ticker_deactivation(){
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__,'wl_ticker_deactivation');

?>