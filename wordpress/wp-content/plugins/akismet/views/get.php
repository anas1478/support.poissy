<form name="akismet_activate" action="https://akismet.com/get/" method="POST" target="_blank">
	<input type="hidden" name="passback_url" value="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>"/>
	<input type="hidden" name="blog" value="<?php echo esc_url( get_option( 'home' ) ); ?>"/>
	<input type="hidden" name="redirect" value="<?php echo isset( $redirect ) ? $redirect : 'plugin-signup'; ?>"/>
<<<<<<< HEAD
	<input type="submit" class="<?php echo isset( $classes ) && count( $classes ) > 0 ? implode( ' ', $classes ) : 'akismet-button';?>" value="<?php echo esc_attr( $text ); ?>"/>
=======
	<input type="submit" class="<?php echo isset( $classes ) && count( $classes ) > 0 ? implode( ' ', $classes ) : 'akismet-button akismet-is-primary';?>" value="<?php echo esc_attr( $text ); ?>"/>
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
</form>