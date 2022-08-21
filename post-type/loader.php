<?php
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly.

if ( ! class_exists( 'DT_Module_Base' ) ) {
    dt_write_log( 'Disciple.Tools System not loaded. Cannot load custom post type.' );
    return;
}

add_filter( 'dt_post_type_modules', function( $modules ){

    $modules["org_base"] = [
        "name" => __( "Organizations", "disciple-tools-saturation-map" ),
        "enabled" => true,
        "locked" => true,
        "prerequisites" => [ "contacts_base" ],
        "post_type" => "organizations",
        "description" => __( "Default starter functionality", "disciple-tools-saturation-map" )
    ];

    return $modules;
}, 20, 1 );

require_once 'module-base.php';
DT_Saturation_Map_Orgs_Base::instance();

