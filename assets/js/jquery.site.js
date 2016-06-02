/**
 * Fulcrum Site JavaScript handling.  This script handles opening/closing of the questions and answers,
 * toggling of the icon handle, and setting of the class states.
 *
 * @package     Fulcrum Site
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        http://hellofromtonya.com
 * @license     GNU General Public License 2.0+
 */
;(function ( $, window, document, undefined ) {
	'use strict'

	function init() {
		_scrollToTop();
		_smoothScroll();
	}

	function _scrollToTop() {
		var $scrollup = $('.scrollup');

		_scrollupScrollHandler( $scrollup );
		_scrollupClickHandler( $scrollup );
	}

	function _scrollupScrollHandler( $element ) {
		var height = $( window ).height() / 2;

		$( window ).scroll( function () {
			var position =  $( this ).scrollTop();

			if ( position > height ) {
				$element.slideDown();
			} else {
				$element.slideUp();
			}
		} );
	}
	
	function _scrollupClickHandler( $element ) {

		$element.on('click', function(){

			$("html, body").animate({
				scrollTop: 0
			}, 2000);

			return false;
		});
	}

	function _smoothScroll() {

		$( 'a[href^="#"]' ).on('click',function( event ) {
			event.preventDefault();

			var target = this.hash,
				$target = $(target);

			if ( typeof $target == "undefined" || ! $target.length ) {
				return false;
			}

			$('html, body').stop().animate({
				'scrollTop': $target.offset().top - 150

			}, 2000, 'swing', function () {
				window.location.hash = target;

			});
		});
	}

	$( document ).ready( function () {
		init();
	} );

}( jQuery, window, document ));