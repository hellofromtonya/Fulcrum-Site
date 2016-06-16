<?php

/**
 * Intro Shortcode - Runtime Configuration Parameters
 *
 * @package     Fulcrum_Site\Shortcode
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site\Shortcode;

return array(
	'autoload'  => true,
	'config'    => array(
		'shortcode' => 'intro',
		'view'      => FULCRUM_SITE_PLUGIN_DIR . 'src/shortcode/views/intro.php',
		'defaults'  => array(
			'load_thumbnail' => 1,
			'content_filter' => 'esc_html',
		),
	),
);
