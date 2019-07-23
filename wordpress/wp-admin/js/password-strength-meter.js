<<<<<<< HEAD
/**
 * @output wp-admin/js/password-strength-meter.js
 */

/* global zxcvbn */
window.wp = window.wp || {};

(function($){

	/**
	 * Contains functions to determine the password strength.
	 *
	 * @since 3.7.0
	 *
	 * @namespace
	 */
	wp.passwordStrength = {
		/**
		 * Determines the strength of a given password.
		 *
		 * Compares first password to the password confirmation.
		 *
		 * @since 3.7.0
		 *
		 * @param {string} password1 The subject password.
		 * @param {Array}  blacklist An array of words that will lower the entropy of
		 *                           the password.
		 * @param {string} password2 The password confirmation.
		 *
		 * @returns {number} The password strength score.
=======
/* global zxcvbn */
window.wp = window.wp || {};

var passwordStrength;
(function($){
	wp.passwordStrength = {
		/**
		 * Determine the strength of a given password
		 *
		 * @param string password1 The password
		 * @param array blacklist An array of words that will lower the entropy of the password
		 * @param string password2 The confirmed password
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		meter : function( password1, blacklist, password2 ) {
			if ( ! $.isArray( blacklist ) )
				blacklist = [ blacklist.toString() ];

			if (password1 != password2 && password2 && password2.length > 0)
				return 5;

			if ( 'undefined' === typeof window.zxcvbn ) {
				// Password strength unknown.
				return -1;
			}

			var result = zxcvbn( password1, blacklist );
			return result.score;
		},

		/**
<<<<<<< HEAD
		 * Builds an array of words that should be penalized.
		 *
		 * Certain words need to be penalized because it would lower the entropy of a
		 * password if they were used. The blacklist is based on user input fields such
		 * as username, first name, email etc.
		 *
		 * @since 3.7.0
		 *
		 * @returns {string[]} The array of words to be blacklisted.
=======
		 * Builds an array of data that should be penalized, because it would lower the entropy of a password if it were used
		 *
		 * @return array The array of data to be blacklisted
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		userInputBlacklist : function() {
			var i, userInputFieldsLength, rawValuesLength, currentField,
				rawValues       = [],
				blacklist       = [],
				userInputFields = [ 'user_login', 'first_name', 'last_name', 'nickname', 'display_name', 'email', 'url', 'description', 'weblog_title', 'admin_email' ];

<<<<<<< HEAD
			// Collect all the strings we want to blacklist.
=======
			// Collect all the strings we want to blacklist
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			rawValues.push( document.title );
			rawValues.push( document.URL );

			userInputFieldsLength = userInputFields.length;
			for ( i = 0; i < userInputFieldsLength; i++ ) {
				currentField = $( '#' + userInputFields[ i ] );

				if ( 0 === currentField.length ) {
					continue;
				}

				rawValues.push( currentField[0].defaultValue );
				rawValues.push( currentField.val() );
			}

<<<<<<< HEAD
			/*
			 * Strip out non-alphanumeric characters and convert each word to an
			 * individual entry.
			 */
=======
			// Strip out non-alphanumeric characters and convert each word to an individual entry
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			rawValuesLength = rawValues.length;
			for ( i = 0; i < rawValuesLength; i++ ) {
				if ( rawValues[ i ] ) {
					blacklist = blacklist.concat( rawValues[ i ].replace( /\W/g, ' ' ).split( ' ' ) );
				}
			}

<<<<<<< HEAD
			/*
			 * Remove empty values, short words and duplicates. Short words are likely to
			 * cause many false positives.
			 */
=======
			// Remove empty values, short words, and duplicates. Short words are likely to cause many false positives.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			blacklist = $.grep( blacklist, function( value, key ) {
				if ( '' === value || 4 > value.length ) {
					return false;
				}

				return $.inArray( value, blacklist ) === key;
			});

			return blacklist;
		}
	};

<<<<<<< HEAD
	// Backward compatibility.

	/**
	 * Password strength meter function.
	 *
	 * @since 2.5.0
	 * @deprecated 3.7.0 Use wp.passwordStrength.meter instead.
	 *
	 * @global
	 *
	 * @type {wp.passwordStrength.meter}
	 */
	window.passwordStrength = wp.passwordStrength.meter;
=======
	// Back-compat.
	passwordStrength = wp.passwordStrength.meter;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
})(jQuery);
