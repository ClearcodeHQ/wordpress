<?php

/*
    Plugin Name: Bootstrap
    Description: WordPress environment setup
    Author:      Piotr Niewiadomski
 */

if ( ! defined( 'ABSPATH' ) ) die( '-1' );

require_once __DIR__ . '/cc-mu-plugins-loader/loader.php';

add_action( 'after_setup_theme', function() {
    add_filter( 'Clearcode\Auto_Activate_Plugins', function( $plugins ) {
        foreach ( [
            // FILL IN WITH PATHS
        ] as $plugin ) if ( isset( $plugins[$plugin] ) ) unset( $plugins[$plugin] );

        return $plugins;
    } );
} );
