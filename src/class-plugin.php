<?php
/**
 * Fulcrum Site Specific plugin for hellofromtonya
 *
 * @package     Fulcrum_Site
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */

namespace Fulcrum_Site;

use Fulcrum\Addon\Addon;

class Plugin extends Addon {

	/**
	 * The plugin's version
	 *
	 * @var string
	 */
	const VERSION = '1.0.0';

	/**
	 * The plugin's minimum WordPress requirement
	 *
	 * @var string
	 */
	const MIN_WP_VERSION = '3.5';

	/*************************
	 * Instantiate & Init
	 ************************/

	/**
	 * Addons can overload this method for additional functionality
	 *
	 * @since 1.0.0
	 *
	 * @return null
	 */
	protected function init_addon() {
		do_action( 'fulcrum_site_loaded' );

		add_action( 'edit_form_after_title', array( $this, 'enable_page_for_posts_editor' ) );

		add_filter( 'genesis_load_deprecated', '__return_false' );
	}

	/**
	 * Enable the editor again on the page_for_posts.
	 *
	 * @since 1.0.0
	 *
	 * @param $post
	 *
	 * @return void
	 */
	public function enable_page_for_posts_editor( $post ) {
		if ( $post->ID == get_option( 'page_for_posts' ) ) {
			add_post_type_support( 'page', 'editor' );
		}
	}
}
