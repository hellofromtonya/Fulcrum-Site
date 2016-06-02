/*!
 * Fullpage Nav handling
 *
 * @package     FullpageNav
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */
;(function( $, window, document, undefined ) {
	"use strict";

	var $window,
		$body,
		$container;

	function init() {
		$window = $( window );
		$body = $('body');

		initMenu();
	}

	function initMenu() {

		$container = $('#menu-container');

		$('#hamburger-menu').on('click', function(){
			initClickHandler();
		});
	}

	function initClickHandler() {
		if ( $body.hasClass('menu__open') ) {
			closeContainer();

		} else {
			openContainer();
		}
	}

	function closeContainer() {
		$body.removeClass('menu__open');
		$container.removeClass('slideInRight').addClass('slideOutRight');
	}

	function openContainer() {
		$body.addClass('menu__open');
		$container.addClass('slideInRight').removeClass('slideOutRight');

		itemClickHandler();
	}

	function itemClickHandler() {
		$('.menu__item a').on('click', function(){
			closeContainer();
		});
	}

	$('document').ready(function(){
		init();
	});

}( jQuery, window, document ) );