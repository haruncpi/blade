<?php
/**
 * Plugin Root
 */
define( 'WP_BLADE_ROOT', dirname( __FILE__ ) . '/' );

/**
* Path for the application foler inside the theme
*/
define( 'WP_BLADE_APP_PATH', WP_BLADE_ROOT . 'application/' );

/**
 * Path of assets
 */
define( 'WP_BLADE_ASSETS_PATH', WP_BLADE_ROOT . 'assets/' );

/**
* Path for the config folder
*/
define( 'WP_BLADE_CONFIG_PATH', WP_BLADE_APP_PATH . 'config/' );

/**
* Path for libraries
*/
define( 'WP_BLADE_LIBRARIES_PATH', WP_BLADE_APP_PATH . 'lib/' );

/*
|-------------------------------------------------------------------------
| Start the plugin by instanciating the cain controller
|-------------------------------------------------------------------------
|
| In order to bootstrap the application we've require the initialize file
| which loads all the necessary controllers, helpers, models and other files.
|
| After that, instanciate the main controller which will add actions and the like.
*/

require_once ( WP_BLADE_CONFIG_PATH . '/initialize.php' );
WP_Blade_Main_Controller::make();
