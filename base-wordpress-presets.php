<?php
/*
   Plugin Name: Base Wordpress Presets
   Version: 1.0
   Plugin URI: https://jaiminho.redelivre.org.br
   Description: Pré definições para a fazenda Base Wordpress
   Author: MinC/HEPTa
   Author URI: 
   License: GPLv3
   Developer: https://github.com/fernao
   
 */

define( 'BASE_WORDPRESS_PRESETS_URL', plugin_dir_url( __FILE__ ) );
define( 'BASE_WORDPRESS_PRESETS_VERSION', 0.1 );
define( 'BASE_WORDPRESS_PRESETS_PATH', plugin_dir_path( __FILE__ ) );

if (!class_exists('Base_Wordpress_Presets')) {
    class Base_Wordpress_Presets
    {
        public function __construct() {
            self::set_mail_from();
        }
        
        public static  function set_mail_from() {
            add_filter( 'wp_mail_from', function() {
                return 'automatico@minc.gov.br';
            });
        }
    }
}

if(class_exists('Base_Wordpress_Presets')) {
    $base_wordpress_presets = new Base_Wordpress_Presets();
}