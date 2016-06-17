<?php
/**
 * Site Specific Plugin - This plugin is an addon for Fulcrum.
 *
 * @package         Fulcrum_Site
 * @author          hellofromTonya
 * @license         GPL-2.0+
 * @link            http://hellofromtonya.com
 *
 * @wordpress-plugin
 * Plugin Name:     Site Specific Fulcrum Addon Plugin
 * Plugin URI:      http://hellofromtonya.com
 * Description:     Site Specific Addon for Fulcrum
 * Version:         1.0.2
 * Author:          hellofromTonya
 * Author URI:      http://hellofromtonya.com
 * Text Domain:     fulcrum_site
 * Requires WP:     3.5
 * Requires PHP:    5.4
 */

/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace Fulcrum_Site;

use Fulcrum\Config\Config;
use Fulcrum\Fulcrum_Contract;

fulcrum_prevent_direct_file_access();

fulcrum_declare_plugin_constants( 'FULCRUM_SITE', __FILE__ );

add_action( 'fulcrum_is_loaded', __NAMESPACE__ . '\launch', 1 );
/**
 * Launch the plugin
 *
 * @since 1.0.0
 *
 * @param Fulcrum_Contract $fulcrum Instance of Fulcrum
 *
 * @return void
 */
function launch( Fulcrum_Contract $fulcrum ) {
	load_dependencies();

	$path = __DIR__ . '/config/plugin.php';

	$fulcrum['fulcrum_site'] = $instance = new Plugin(
		new Config( $path ),
		__FILE__,
		$fulcrum
	);
	
	return $instance;
}

/**
 * To speed everything up, we are loading files directly here.
 *
 * @since 1.0.3
 *
 * @return void
 */
function load_dependencies() {
	include_once( __DIR__ . '/src/shortcode/class-info-box.php' );
	require_once( __DIR__ . '/src/foundation/emojis-support.php' );

	require_once( __DIR__ . '/src/class-plugin.php' );
}
