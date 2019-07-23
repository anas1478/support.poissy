<?php
/**
 * Contains the post embed base template
 *
 * When a post is embedded in an iframe, this file is used to create the output
 * if the active theme does not include an embed.php template.
 *
 * @package WordPress
 * @subpackage oEmbed
 * @since 4.4.0
 */

get_header( 'embed' );

if ( have_posts() ) :
<<<<<<< HEAD
	while ( have_posts() ) :
		the_post();
=======
	while ( have_posts() ) : the_post();
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		get_template_part( 'embed', 'content' );
	endwhile;
else :
	get_template_part( 'embed', '404' );
endif;

get_footer( 'embed' );
