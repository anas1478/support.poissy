/**
 * Distraction-Free Writing (wp-fullscreen) backward compatibility stub.
<<<<<<< HEAD
 *
 * @deprecated 4.1
 * @removed 4.3.
 * @output wp-admin/js/wp-fullscreen-stub.js
=======
 * Todo: remove at the end of 2016.
 *
 * Original was deprecated in 4.1, removed in 4.3.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
 */
( function() {
	var noop = function(){};

	window.wp = window.wp || {};
	window.wp.editor = window.wp.editor || {};
	window.wp.editor.fullscreen = {
		bind_resize: noop,
		dfwWidth: noop,
		off: noop,
		on: noop,
		refreshButtons: noop,
		resizeTextarea: noop,
		save: noop,
		switchmode: noop,
		toggleUI: noop,

		settings: {},
		pubsub: {
			publish: noop,
			subscribe: noop,
			unsubscribe: noop,
			topics: {}
		},
		fade: {
			In: noop,
			Out: noop
		},
		ui: {
			fade: noop,
			init: noop
		}
	};
}());
