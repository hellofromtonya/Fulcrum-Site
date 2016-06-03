<?php
/**
 * Fulcrum Site Plugin Runtime Configuration Parameters.
 *
 * @package     Fulcrum_Site
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site;

return array(

	'plugin_activation_keys' => array(),

	'service_providers' => array(

		/****************************
		 * Assets
		 ****************************/
		'style.fontawesome'   => array(
			'provider' => 'provider.asset',
			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/assets/font-awesome.php',
		),
		// This is the minified live site scripts
		'script.fulcrum_site'   => array(
			'provider' => 'provider.asset',
			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/assets/plugin-build.php',
		),

		/****************************
		 * Shortcodes
		 ****************************/
		'shortcode.clearfix'  => array(
			'provider' => 'provider.shortcode',
			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/shortcodes/clearfix.php',
		),
		'shortcode.info_box'  => array(
			'provider' => 'provider.shortcode',
			'config'   => FULCRUM_SITE_PLUGIN_DIR . 'config/shortcodes/info-box.php',
		),
	),
);
