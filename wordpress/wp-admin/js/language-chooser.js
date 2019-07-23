<<<<<<< HEAD
/**
 * @output wp-admin/js/language-chooser.js
 */

jQuery( function($) {
/*
 * Set the correct translation to the continue button and show a spinner
 * when downloading a language.
 */
=======
jQuery( function($) {

>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
var select = $( '#language' ),
	submit = $( '#language-continue' );

if ( ! $( 'body' ).hasClass( 'language-chooser' ) ) {
	return;
}

select.focus().on( 'change', function() {
<<<<<<< HEAD
	/*
	 * When a language is selected, set matching translation to continue button
	 * and attach the language attribute.
	 */
=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	var option = select.children( 'option:selected' );
	submit.attr({
		value: option.data( 'continue' ),
		lang: option.attr( 'lang' )
	});
});

$( 'form' ).submit( function() {
<<<<<<< HEAD
	// Show spinner for languages that need to be downloaded.
=======
	// Don't show a spinner for English and installed languages,
	// as there is nothing to download.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	if ( ! select.children( 'option:selected' ).data( 'installed' ) ) {
		$( this ).find( '.step .spinner' ).css( 'visibility', 'visible' );
	}
});

});
