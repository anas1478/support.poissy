<?php
/**
 * Diff API: WP_Text_Diff_Renderer_inline class
 *
 * @package WordPress
 * @subpackage Diff
 * @since 4.7.0
 */

/**
 * Better word splitting than the PEAR package provides.
 *
 * @since 2.6.0
 * @uses Text_Diff_Renderer_inline Extends
 */
class WP_Text_Diff_Renderer_inline extends Text_Diff_Renderer_inline {

	/**
	 * @ignore
	 * @since 2.6.0
	 *
	 * @param string $string
	 * @param string $newlineEscape
	 * @return string
	 */
<<<<<<< HEAD
	public function _splitOnWords( $string, $newlineEscape = "\n" ) {
		$string = str_replace( "\0", '', $string );
=======
	public function _splitOnWords($string, $newlineEscape = "\n") {
		$string = str_replace("\0", '', $string);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		$words  = preg_split( '/([^\w])/u', $string, -1, PREG_SPLIT_DELIM_CAPTURE );
		$words  = str_replace( "\n", $newlineEscape, $words );
		return $words;
	}

}
