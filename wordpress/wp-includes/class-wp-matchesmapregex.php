<?php
/**
 * WP_MatchesMapRegex helper class
 *
 * @package WordPress
 * @since 4.7.0
 */

/**
 * Helper class to remove the need to use eval to replace $matches[] in query strings.
 *
 * @since 2.9.0
 */
class WP_MatchesMapRegex {
	/**
	 * store for matches
	 *
	 * @var array
	 */
	private $_matches;

	/**
	 * store for mapping result
	 *
	 * @var string
	 */
	public $output;

	/**
	 * subject to perform mapping on (query string containing $matches[] references
	 *
	 * @var string
	 */
	private $_subject;

	/**
	 * regexp pattern to match $matches[] references
	 *
	 * @var string
	 */
	public $_pattern = '(\$matches\[[1-9]+[0-9]*\])'; // magic number

	/**
	 * constructor
	 *
	 * @param string $subject subject if regex
	 * @param array  $matches data to use in map
	 */
<<<<<<< HEAD
	public function __construct( $subject, $matches ) {
		$this->_subject = $subject;
		$this->_matches = $matches;
		$this->output   = $this->_map();
=======
	public function __construct($subject, $matches) {
		$this->_subject = $subject;
		$this->_matches = $matches;
		$this->output = $this->_map();
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}

	/**
	 * Substitute substring matches in subject.
	 *
	 * static helper function to ease use
	 *
<<<<<<< HEAD
=======
	 * @static
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $subject subject
	 * @param array  $matches data used for substitution
	 * @return string
	 */
<<<<<<< HEAD
	public static function apply( $subject, $matches ) {
		$oSelf = new WP_MatchesMapRegex( $subject, $matches );
=======
	public static function apply($subject, $matches) {
		$oSelf = new WP_MatchesMapRegex($subject, $matches);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		return $oSelf->output;
	}

	/**
	 * do the actual mapping
	 *
	 * @return string
	 */
	private function _map() {
<<<<<<< HEAD
		$callback = array( $this, 'callback' );
		return preg_replace_callback( $this->_pattern, $callback, $this->_subject );
=======
		$callback = array($this, 'callback');
		return preg_replace_callback($this->_pattern, $callback, $this->_subject);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}

	/**
	 * preg_replace_callback hook
	 *
	 * @param  array $matches preg_replace regexp matches
	 * @return string
	 */
<<<<<<< HEAD
	public function callback( $matches ) {
		$index = intval( substr( $matches[0], 9, -1 ) );
		return ( isset( $this->_matches[ $index ] ) ? urlencode( $this->_matches[ $index ] ) : '' );
=======
	public function callback($matches) {
		$index = intval(substr($matches[0], 9, -1));
		return ( isset( $this->_matches[$index] ) ? urlencode($this->_matches[$index]) : '' );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}
}
