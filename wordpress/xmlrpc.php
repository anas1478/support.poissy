<?php
/**
 * XML-RPC protocol support for WordPress
 *
 * @package WordPress
 */

/**
 * Whether this is an XML-RPC Request
 *
 * @var bool
 */
<<<<<<< HEAD
define( 'XMLRPC_REQUEST', true );
=======
define('XMLRPC_REQUEST', true);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

// Some browser-embedded clients send cookies. We don't want them.
$_COOKIE = array();

// A bug in PHP < 5.2.2 makes $HTTP_RAW_POST_DATA not set by default,
// but we can do it ourself.
<<<<<<< HEAD
if ( ! isset( $HTTP_RAW_POST_DATA ) ) {
=======
if ( !isset( $HTTP_RAW_POST_DATA ) ) {
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	$HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
}

// fix for mozBlog and other cases where '<?xml' isn't on the very first line
<<<<<<< HEAD
if ( isset( $HTTP_RAW_POST_DATA ) ) {
	$HTTP_RAW_POST_DATA = trim( $HTTP_RAW_POST_DATA );
}
=======
if ( isset($HTTP_RAW_POST_DATA) )
	$HTTP_RAW_POST_DATA = trim($HTTP_RAW_POST_DATA);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

/** Include the bootstrap for setting up WordPress environment */
include( dirname( __FILE__ ) . '/wp-load.php' );

if ( isset( $_GET['rsd'] ) ) { // http://cyber.law.harvard.edu/blogs/gems/tech/rsd.html
<<<<<<< HEAD
	header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), true );
	echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>';
	?>
<rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
	<service>
		<engineName>WordPress</engineName>
		<engineLink>https://wordpress.org/</engineLink>
		<homePageLink><?php bloginfo_rss( 'url' ); ?></homePageLink>
		<apis>
			<api name="WordPress" blogID="1" preferred="true" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
			<api name="Movable Type" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
			<api name="MetaWeblog" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
			<api name="Blogger" blogID="1" preferred="false" apiLink="<?php echo site_url( 'xmlrpc.php', 'rpc' ); ?>" />
			<?php
			/**
			 * Add additional APIs to the Really Simple Discovery (RSD) endpoint.
			 *
			 * @link http://cyber.law.harvard.edu/blogs/gems/tech/rsd.html
			 *
			 * @since 3.5.0
			 */
			do_action( 'xmlrpc_rsd_apis' );
			?>
		</apis>
	</service>
</rsd>
	<?php
	exit;
}

include_once( ABSPATH . 'wp-admin/includes/admin.php' );
include_once( ABSPATH . WPINC . '/class-IXR.php' );
include_once( ABSPATH . WPINC . '/class-wp-xmlrpc-server.php' );

/**
 * Posts submitted via the XML-RPC interface get that title
 *
 * @name post_default_title
 * @var string
 */
$post_default_title = '';
=======
header('Content-Type: text/xml; charset=' . get_option('blog_charset'), true);
?>
<?php echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>'; ?>
<rsd version="1.0" xmlns="http://archipelago.phrasewise.com/rsd">
  <service>
    <engineName>WordPress</engineName>
    <engineLink>https://wordpress.org/</engineLink>
    <homePageLink><?php bloginfo_rss('url') ?></homePageLink>
    <apis>
      <api name="WordPress" blogID="1" preferred="true" apiLink="<?php echo site_url('xmlrpc.php', 'rpc') ?>" />
      <api name="Movable Type" blogID="1" preferred="false" apiLink="<?php echo site_url('xmlrpc.php', 'rpc') ?>" />
      <api name="MetaWeblog" blogID="1" preferred="false" apiLink="<?php echo site_url('xmlrpc.php', 'rpc') ?>" />
      <api name="Blogger" blogID="1" preferred="false" apiLink="<?php echo site_url('xmlrpc.php', 'rpc') ?>" />
      <?php
      /**
       * Add additional APIs to the Really Simple Discovery (RSD) endpoint.
       *
       * @link http://cyber.law.harvard.edu/blogs/gems/tech/rsd.html
	   *
       * @since 3.5.0
       */
      do_action( 'xmlrpc_rsd_apis' );
      ?>
    </apis>
  </service>
</rsd>
<?php
exit;
}

include_once(ABSPATH . 'wp-admin/includes/admin.php');
include_once(ABSPATH . WPINC . '/class-IXR.php');
include_once(ABSPATH . WPINC . '/class-wp-xmlrpc-server.php'); 

/**
 * Posts submitted via the XML-RPC interface get that title
 * @name post_default_title
 * @var string
 */
$post_default_title = "";
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

/**
 * Filters the class used for handling XML-RPC requests.
 *
 * @since 3.1.0
 *
 * @param string $class The name of the XML-RPC server class.
 */
$wp_xmlrpc_server_class = apply_filters( 'wp_xmlrpc_server_class', 'wp_xmlrpc_server' );
<<<<<<< HEAD
$wp_xmlrpc_server       = new $wp_xmlrpc_server_class;
=======
$wp_xmlrpc_server = new $wp_xmlrpc_server_class;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

// Fire off the request
$wp_xmlrpc_server->serve_request();

exit;

/**
 * logIO() - Writes logging info to a file.
 *
 * @deprecated 3.4.0 Use error_log()
 * @see error_log()
 *
 * @param string $io Whether input or output
 * @param string $msg Information describing logging reason.
 */
function logIO( $io, $msg ) {
	_deprecated_function( __FUNCTION__, '3.4.0', 'error_log()' );
<<<<<<< HEAD
	if ( ! empty( $GLOBALS['xmlrpc_logging'] ) ) {
		error_log( $io . ' - ' . $msg );
	}
}
=======
	if ( ! empty( $GLOBALS['xmlrpc_logging'] ) )
		error_log( $io . ' - ' . $msg );
}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
