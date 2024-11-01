<?php
/**
 * @package YD_setup-locale
 * @author Yann Dubois
 * @version 0.1.0
 */

/*
 Plugin Name: YD Setup Locale
 Plugin URI: http://www.yann.com/wp-plugins/yd-setup-locale
 Description: Automatically sets up the WP language environment based on first part of url. Will setup XML lang attribute + $locale variable.
 Author: Yann Dubois
 Version: 0.1.0
 Author URI: http://www.yann.com/
 */

/**
 * @copyright 2009  Yann Dubois  ( email : yann _at_ abc.fr )
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
/**
 * Usage:
 * ------
 * 
 * your blog URL structure should always begin with an official two-letter langage code,
 * for example:
 * 
 * /en/... for english
 * /es/... for Spanish
 * /ja/... for Japanese
 * /fr/... for French
 * etc.
 * 
 * pages that don't comply to this URL scheme will still get your blog's default locale setting,
 * as configured in your wp-config.php file.
 */
/**
 Revision 0.1.0:
 - First beta release
 */
/**
 *	TODO:
 *  - Test, debug, final release
 */

/** Just one filter function! **/
function yd_setup_locale( $loc ) {
	global $locale;
	if( preg_match( "<^/([a-z]{2})(/.*)?$>", $_SERVER["REQUEST_URI"], $matches ) )
		$locale = $matches[1];
	return $locale;
}
add_filter( 'locale', 'yd_setup_locale', 10 );
?>