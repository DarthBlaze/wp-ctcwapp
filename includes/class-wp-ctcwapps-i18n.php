<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/DarthBlaze
 * @since      1.0.0
 *
 * @package    Wp_Ctcwapps
 * @subpackage Wp_Ctcwapps/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Ctcwapps
 * @subpackage Wp_Ctcwapps/includes
 * @author     Nelson Rivera <Rivera.nelson.r@gmail.com>
 */
class Wp_Ctcwapps_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-ctcwapps',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
