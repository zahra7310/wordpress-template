<?php

class WLTICKER{

 public function __construct(){
    add_action('plugins_loaded',array($this,'wl_plugins_textdomain'));
    add_action('wp_enqueue_script',array($this,'wl_enqueue_script'));
    add_action('admin_enqueue_scripts',array($this,'wl_admin_enqueue_scripts'));
 }

 public function wl_plugins_textdomain(){
    load_plugin_textdomain(plagin_neme,false,'wlticker/languages');
 }

 public function wl_admin_enqueue_scripts($hook){
   var_dump($hook);
 }

 public function wl_enqueue_script(){

 }

 public function wl_plugins_url($url){
   return plugins_url('wlticker/'.$url);
 }

}


?>