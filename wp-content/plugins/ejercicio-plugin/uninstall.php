<?php

    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

    // código que ejecuta el plugin cuando de desinstala, podemos borrar las tablas del plugin por ejemplo
    if (!defined('WP_UNINSTALL_PLUGIN')) {
        die;
    }
    
    // global $wpdb;
    //     $tbl_array = [   
    //     $wpdb->prefix . "tbl_name"
    // ];

    // foreach ($tbl_array as $tbl_name) {
    //     $wpdb->query("DROP TABLE IF EXISTS $tbl_name");
    // } 

