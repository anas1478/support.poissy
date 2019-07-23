<<<<<<< HEAD
/**
 * @output wp-includes/js/wpdialog.js
 */

/*
 * Wrap the jQuery UI Dialog open function remove focus from tinyMCE.
 */
=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
( function($) {
	$.widget('wp.wpdialog', $.ui.dialog, {
		open: function() {
			// Add beforeOpen event.
			if ( this.isOpen() || false === this._trigger('beforeOpen') ) {
				return;
			}

			// Open the dialog.
			this._super();
<<<<<<< HEAD

=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			// WebKit leaves focus in the TinyMCE editor unless we shift focus.
			this.element.focus();
			this._trigger('refresh');
		}
	});

	$.wp.wpdialog.prototype.options.closeOnEscape = false;

})(jQuery);
