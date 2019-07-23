/**
 * Heartbeat API
 *
 * Heartbeat is a simple server polling API that sends XHR requests to
 * the server every 15 - 60 seconds and triggers events (or callbacks) upon
 * receiving data. Currently these 'ticks' handle transports for post locking,
 * login-expiration warnings, autosave, and related tasks while a user is logged in.
 *
 * Available PHP filters (in ajax-actions.php):
 * - heartbeat_received
 * - heartbeat_send
 * - heartbeat_tick
 * - heartbeat_nopriv_received
 * - heartbeat_nopriv_send
 * - heartbeat_nopriv_tick
 * @see wp_ajax_nopriv_heartbeat(), wp_ajax_heartbeat()
 *
 * Custom jQuery events:
 * - heartbeat-send
 * - heartbeat-tick
 * - heartbeat-error
 * - heartbeat-connection-lost
 * - heartbeat-connection-restored
 * - heartbeat-nonces-expired
 *
 * @since 3.6.0
<<<<<<< HEAD
 * @output wp-includes/js/heartbeat.js
 */

( function( $, window, undefined ) {

	/**
	 * Constructs the Heartbeat API.
	 *
	 * @since 3.6.0
	 *
	 * @returns {Object} An instance of the Heartbeat class.
	 * @constructor
	 */
	var Heartbeat = function() {
		var $document = $(document),
			settings = {
				// Suspend/resume.
				suspend: false,

				// Whether suspending is enabled.
				suspendEnabled: true,

				// Current screen id, defaults to the JS global 'pagenow' when present
				// (in the admin) or 'front'.
				screenId: '',

				// XHR request URL, defaults to the JS global 'ajaxurl' when present.
				url: '',

				// Timestamp, start of the last connection request.
				lastTick: 0,

				// Container for the enqueued items.
				queue: {},

				// Connect interval (in seconds).
				mainInterval: 60,

				// Used when the interval is set to 5 sec. temporarily.
				tempInterval: 0,

				// Used when the interval is reset.
=======
 */

( function( $, window, undefined ) {
	var Heartbeat = function() {
		var $document = $(document),
			settings = {
				// Suspend/resume
				suspend: false,

				// Whether suspending is enabled
				suspendEnabled: true,

				// Current screen id, defaults to the JS global 'pagenow' when present (in the admin) or 'front'
				screenId: '',

				// XHR request URL, defaults to the JS global 'ajaxurl' when present
				url: '',

				// Timestamp, start of the last connection request
				lastTick: 0,

				// Container for the enqueued items
				queue: {},

				// Connect interval (in seconds)
				mainInterval: 60,

				// Used when the interval is set to 5 sec. temporarily
				tempInterval: 0,

				// Used when the interval is reset
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				originalInterval: 0,

				// Used to limit the number of AJAX requests.
				minimalInterval: 0,

<<<<<<< HEAD
				// Used together with tempInterval.
				countdown: 0,

				// Whether a connection is currently in progress.
				connecting: false,

				// Whether a connection error occurred.
				connectionError: false,

				// Used to track non-critical errors.
				errorcount: 0,

				// Whether at least one connection has been completed successfully.
				hasConnected: false,

				// Whether the current browser window is in focus and the user is active.
=======
				// Used together with tempInterval
				countdown: 0,

				// Whether a connection is currently in progress
				connecting: false,

				// Whether a connection error occurred
				connectionError: false,

				// Used to track non-critical errors
				errorcount: 0,

				// Whether at least one connection has completed successfully
				hasConnected: false,

				// Whether the current browser window is in focus and the user is active
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				hasFocus: true,

				// Timestamp, last time the user was active. Checked every 30 sec.
				userActivity: 0,

<<<<<<< HEAD
				// Flag whether events tracking user activity were set.
				userActivityEvents: false,

				// Timer that keeps track of how long a user has focus.
				checkFocusTimer: 0,

				// Timer that keeps track of how long needs to be waited before connecting to
				// the server again.
=======
				// Flags whether events tracking user activity were set
				userActivityEvents: false,

				checkFocusTimer: 0,
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				beatTimer: 0
			};

		/**
<<<<<<< HEAD
		 * Sets local variables and events, then starts the heartbeat.
		 *
		 * @access private
		 *
		 * @since 3.8.0
		 *
		 * @returns {void}
=======
		 * Set local vars and events, then start
		 *
		 * @access private
		 *
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function initialize() {
			var options, hidden, visibilityState, visibilitychange;

			if ( typeof window.pagenow === 'string' ) {
				settings.screenId = window.pagenow;
			}

			if ( typeof window.ajaxurl === 'string' ) {
				settings.url = window.ajaxurl;
			}

<<<<<<< HEAD
			// Pull in options passed from PHP.
			if ( typeof window.heartbeatSettings === 'object' ) {
				options = window.heartbeatSettings;

				// The XHR URL can be passed as option when window.ajaxurl is not set.
=======
			// Pull in options passed from PHP
			if ( typeof window.heartbeatSettings === 'object' ) {
				options = window.heartbeatSettings;

				// The XHR URL can be passed as option when window.ajaxurl is not set
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				if ( ! settings.url && options.ajaxurl ) {
					settings.url = options.ajaxurl;
				}

<<<<<<< HEAD
				/*
				 * The interval can be from 15 to 120 sec. and can be set temporarily to 5 sec.
				 * It can be set in the initial options or changed later through JS and/or
				 * through PHP.
				 */
=======
				// The interval can be from 15 to 120 sec. and can be set temporarily to 5 sec.
				// It can be set in the initial options or changed later from JS and/or from PHP.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				if ( options.interval ) {
					settings.mainInterval = options.interval;

					if ( settings.mainInterval < 15 ) {
						settings.mainInterval = 15;
					} else if ( settings.mainInterval > 120 ) {
						settings.mainInterval = 120;
					}
				}

<<<<<<< HEAD
				/*
				 * Used to limit the number of AJAX requests. Overrides all other intervals if
				 * they are shorter. Needed for some hosts that cannot handle frequent requests
				 * and the user may exceed the allocated server CPU time, etc. The minimal
				 * interval can be up to 600 sec. however setting it to longer than 120 sec.
				 * will limit or disable some of the functionality (like post locks). Once set
				 * at initialization, minimalInterval cannot be changed/overridden.
				 */
=======
				// Used to limit the number of AJAX requests. Overrides all other intervals if they are shorter.
				// Needed for some hosts that cannot handle frequent requests and the user may exceed the allocated server CPU time, etc.
				// The minimal interval can be up to 600 sec. however setting it to longer than 120 sec. will limit or disable
				// some of the functionality (like post locks).
				// Once set at initialization, minimalInterval cannot be changed/overridden.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				if ( options.minimalInterval ) {
					options.minimalInterval = parseInt( options.minimalInterval, 10 );
					settings.minimalInterval = options.minimalInterval > 0 && options.minimalInterval <= 600 ? options.minimalInterval * 1000 : 0;
				}

				if ( settings.minimalInterval && settings.mainInterval < settings.minimalInterval ) {
					settings.mainInterval = settings.minimalInterval;
				}

<<<<<<< HEAD
				// 'screenId' can be added from settings on the front end where the JS global
				// 'pagenow' is not set.
=======
				// 'screenId' can be added from settings on the front end where the JS global 'pagenow' is not set
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				if ( ! settings.screenId ) {
					settings.screenId = options.screenId || 'front';
				}

				if ( options.suspension === 'disable' ) {
					settings.suspendEnabled = false;
				}
			}

<<<<<<< HEAD
			// Convert to milliseconds.
			settings.mainInterval = settings.mainInterval * 1000;
			settings.originalInterval = settings.mainInterval;

			/*
			 * Switch the interval to 120 seconds by using the Page Visibility API.
			 * If the browser doesn't support it (Safari < 7, Android < 4.4, IE < 10), the
			 * interval will be increased to 120 seconds after 5 minutes of mouse and keyboard
			 * inactivity.
			 */
=======
			// Convert to milliseconds
			settings.mainInterval = settings.mainInterval * 1000;
			settings.originalInterval = settings.mainInterval;

			// Switch the interval to 120 sec. by using the Page Visibility API.
			// If the browser doesn't support it (Safari < 7, Android < 4.4, IE < 10), the interval
			// will be increased to 120 sec. after 5 min. of mouse and keyboard inactivity.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			if ( typeof document.hidden !== 'undefined' ) {
				hidden = 'hidden';
				visibilitychange = 'visibilitychange';
				visibilityState = 'visibilityState';
			} else if ( typeof document.msHidden !== 'undefined' ) { // IE10
				hidden = 'msHidden';
				visibilitychange = 'msvisibilitychange';
				visibilityState = 'msVisibilityState';
			} else if ( typeof document.webkitHidden !== 'undefined' ) { // Android
				hidden = 'webkitHidden';
				visibilitychange = 'webkitvisibilitychange';
				visibilityState = 'webkitVisibilityState';
			}

			if ( hidden ) {
				if ( document[hidden] ) {
					settings.hasFocus = false;
				}

				$document.on( visibilitychange + '.wp-heartbeat', function() {
					if ( document[visibilityState] === 'hidden' ) {
						blurred();
						window.clearInterval( settings.checkFocusTimer );
					} else {
						focused();
						if ( document.hasFocus ) {
							settings.checkFocusTimer = window.setInterval( checkFocus, 10000 );
						}
					}
				});
			}

			// Use document.hasFocus() if available.
			if ( document.hasFocus ) {
				settings.checkFocusTimer = window.setInterval( checkFocus, 10000 );
			}

			$(window).on( 'unload.wp-heartbeat', function() {
<<<<<<< HEAD
				// Don't connect anymore.
				settings.suspend = true;

				// Abort the last request if not completed.
=======
				// Don't connect any more
				settings.suspend = true;

				// Abort the last request if not completed
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				if ( settings.xhr && settings.xhr.readyState !== 4 ) {
					settings.xhr.abort();
				}
			});

			// Check for user activity every 30 seconds.
			window.setInterval( checkUserActivity, 30000 );

<<<<<<< HEAD
			// Start one tick after DOM ready.
=======
			// Start one tick after DOM ready
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			$document.ready( function() {
				settings.lastTick = time();
				scheduleNextTick();
			});
		}

		/**
<<<<<<< HEAD
		 * Returns the current time according to the browser.
		 *
		 * @access private
		 *
		 * @since 3.6.0
		 *
		 * @returns {number} Returns the current time.
=======
		 * Return the current time according to the browser
		 *
		 * @access private
		 *
		 * @return int
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function time() {
			return (new Date()).getTime();
		}

		/**
<<<<<<< HEAD
		 * Checks if the iframe is from the same origin.
		 *
		 * @access private
		 *
		 * @since 3.6.0
		 *
		 * @returns {boolean} Returns whether or not the iframe is from the same origin.
=======
		 * Check if the iframe is from the same origin
		 *
		 * @access private
		 *
		 * @return bool
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function isLocalFrame( frame ) {
			var origin, src = frame.src;

<<<<<<< HEAD
			/*
			 * Need to compare strings as WebKit doesn't throw JS errors when iframes have
			 * different origin. It throws uncatchable exceptions.
			 */
=======
			// Need to compare strings as WebKit doesn't throw JS errors when iframes have different origin.
			// It throws uncatchable exceptions.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			if ( src && /^https?:\/\//.test( src ) ) {
				origin = window.location.origin ? window.location.origin : window.location.protocol + '//' + window.location.host;

				if ( src.indexOf( origin ) !== 0 ) {
					return false;
				}
			}

			try {
				if ( frame.contentWindow.document ) {
					return true;
				}
			} catch(e) {}

			return false;
		}

		/**
<<<<<<< HEAD
		 * Checks if the document's focus has changed.
		 *
		 * @access private
		 *
		 * @since 4.1.0
		 *
		 * @returns {void}
=======
		 * Check if the document's focus has changed
		 *
		 * @access private
		 *
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function checkFocus() {
			if ( settings.hasFocus && ! document.hasFocus() ) {
				blurred();
			} else if ( ! settings.hasFocus && document.hasFocus() ) {
				focused();
			}
		}

		/**
<<<<<<< HEAD
		 * Sets error state and fires an event on XHR errors or timeout.
		 *
		 * @access private
		 *
		 * @since 3.8.0
		 *
		 * @param {string} error  The error type passed from the XHR.
		 * @param {number} status The HTTP status code passed from jqXHR
		 *                        (200, 404, 500, etc.).
		 *
		 * @returns {void}
=======
		 * Set error state and fire an event on XHR errors or timeout
		 *
		 * @access private
		 *
		 * @param string error The error type passed from the XHR
		 * @param int status The HTTP status code passed from jqXHR (200, 404, 500, etc.)
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function setErrorState( error, status ) {
			var trigger;

			if ( error ) {
				switch ( error ) {
					case 'abort':
<<<<<<< HEAD
						// Do nothing.
						break;
					case 'timeout':
						// No response for 30 sec.
=======
						// do nothing
						break;
					case 'timeout':
						// no response for 30 sec.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
						trigger = true;
						break;
					case 'error':
						if ( 503 === status && settings.hasConnected ) {
							trigger = true;
							break;
						}
						/* falls through */
					case 'parsererror':
					case 'empty':
					case 'unknown':
						settings.errorcount++;

						if ( settings.errorcount > 2 && settings.hasConnected ) {
							trigger = true;
						}

						break;
				}

				if ( trigger && ! hasConnectionError() ) {
					settings.connectionError = true;
					$document.trigger( 'heartbeat-connection-lost', [error, status] );
					wp.hooks.doAction( 'heartbeat.connection-lost', error, status );
				}
			}
		}

		/**
<<<<<<< HEAD
		 * Clears the error state and fires an event if there is a connection error.
		 *
		 * @access private
		 *
		 * @since 3.8.0
		 *
		 * @returns {void}
		 */
		function clearErrorState() {
			// Has connected successfully.
=======
		 * Clear the error state and fire an event
		 *
		 * @access private
		 *
		 * @return void
		 */
		function clearErrorState() {
			// Has connected successfully
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			settings.hasConnected = true;

			if ( hasConnectionError() ) {
				settings.errorcount = 0;
				settings.connectionError = false;
				$document.trigger( 'heartbeat-connection-restored' );
				wp.hooks.doAction( 'heartbeat.connection-restored' );
			}
		}

		/**
<<<<<<< HEAD
		 * Gathers the data and connects to the server.
		 *
		 * @access private
		 *
		 * @since 3.6.0
		 *
		 * @returns {void}
=======
		 * Gather the data and connect to the server
		 *
		 * @access private
		 *
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function connect() {
			var ajaxData, heartbeatData;

			// If the connection to the server is slower than the interval,
			// heartbeat connects as soon as the previous connection's response is received.
			if ( settings.connecting || settings.suspend ) {
				return;
			}

			settings.lastTick = time();

			heartbeatData = $.extend( {}, settings.queue );
<<<<<<< HEAD
			// Clear the data queue. Anything added after this point will be sent on the next tick.
=======
			// Clear the data queue, anything added after this point will be send on the next tick
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			settings.queue = {};

			$document.trigger( 'heartbeat-send', [ heartbeatData ] );
			wp.hooks.doAction( 'heartbeat.send', heartbeatData );

			ajaxData = {
				data: heartbeatData,
				interval: settings.tempInterval ? settings.tempInterval / 1000 : settings.mainInterval / 1000,
				_nonce: typeof window.heartbeatSettings === 'object' ? window.heartbeatSettings.nonce : '',
				action: 'heartbeat',
				screen_id: settings.screenId,
				has_focus: settings.hasFocus
			};

			if ( 'customize' === settings.screenId  ) {
				ajaxData.wp_customize = 'on';
			}

			settings.connecting = true;
			settings.xhr = $.ajax({
				url: settings.url,
				type: 'post',
				timeout: 30000, // throw an error if not completed after 30 sec.
				data: ajaxData,
				dataType: 'json'
			}).always( function() {
				settings.connecting = false;
				scheduleNextTick();
			}).done( function( response, textStatus, jqXHR ) {
				var newInterval;

				if ( ! response ) {
					setErrorState( 'empty' );
					return;
				}

				clearErrorState();

				if ( response.nonces_expired ) {
					$document.trigger( 'heartbeat-nonces-expired' );
					wp.hooks.doAction( 'heartbeat.nonces-expired' );
				}

				// Change the interval from PHP
				if ( response.heartbeat_interval ) {
					newInterval = response.heartbeat_interval;
					delete response.heartbeat_interval;
				}

				// Update the heartbeat nonce if set.
				if ( response.heartbeat_nonce && typeof window.heartbeatSettings === 'object' ) {
					window.heartbeatSettings.nonce = response.heartbeat_nonce;
					delete response.heartbeat_nonce;
				}

				// Update the Rest API nonce if set and wp-api loaded.
				if ( response.rest_nonce && typeof window.wpApiSettings === 'object' ) {
					window.wpApiSettings.nonce = response.rest_nonce;
					// This nonce is required for api-fetch through heartbeat.tick.
					// delete response.rest_nonce;
				}

				$document.trigger( 'heartbeat-tick', [response, textStatus, jqXHR] );
				wp.hooks.doAction( 'heartbeat.tick', response, textStatus, jqXHR );

<<<<<<< HEAD
				// Do this last. Can trigger the next XHR if connection time > 5 sec. and newInterval == 'fast'.
=======
				// Do this last, can trigger the next XHR if connection time > 5 sec. and newInterval == 'fast'
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				if ( newInterval ) {
					interval( newInterval );
				}
			}).fail( function( jqXHR, textStatus, error ) {
				setErrorState( textStatus || 'unknown', jqXHR.status );
				$document.trigger( 'heartbeat-error', [jqXHR, textStatus, error] );
				wp.hooks.doAction( 'heartbeat.error', jqXHR, textStatus, error );
			});
		}

		/**
<<<<<<< HEAD
		 * Schedules the next connection.
=======
		 * Schedule the next connection
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 *
		 * Fires immediately if the connection time is longer than the interval.
		 *
		 * @access private
		 *
<<<<<<< HEAD
		 * @since 3.8.0
		 *
		 * @returns {void}
=======
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function scheduleNextTick() {
			var delta = time() - settings.lastTick,
				interval = settings.mainInterval;

			if ( settings.suspend ) {
				return;
			}

			if ( ! settings.hasFocus ) {
				interval = 120000; // 120 sec. Post locks expire after 150 sec.
			} else if ( settings.countdown > 0 && settings.tempInterval ) {
				interval = settings.tempInterval;
				settings.countdown--;

				if ( settings.countdown < 1 ) {
					settings.tempInterval = 0;
				}
			}

			if ( settings.minimalInterval && interval < settings.minimalInterval ) {
				interval = settings.minimalInterval;
			}

			window.clearTimeout( settings.beatTimer );

			if ( delta < interval ) {
				settings.beatTimer = window.setTimeout(
					function() {
						connect();
					},
					interval - delta
				);
			} else {
				connect();
			}
		}

		/**
<<<<<<< HEAD
		 * Sets the internal state when the browser window becomes hidden or loses focus.
		 *
		 * @access private
		 *
		 * @since 3.6.0
		 *
		 * @returns {void}
=======
		 * Set the internal state when the browser window becomes hidden or loses focus
		 *
		 * @access private
		 *
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function blurred() {
			settings.hasFocus = false;
		}

		/**
<<<<<<< HEAD
		 * Sets the internal state when the browser window becomes visible or is in focus.
		 *
		 * @access private
		 *
		 * @since 3.6.0
		 *
		 * @returns {void}
=======
		 * Set the internal state when the browser window becomes visible or is in focus
		 *
		 * @access private
		 *
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function focused() {
			settings.userActivity = time();

			// Resume if suspended
			settings.suspend = false;

			if ( ! settings.hasFocus ) {
				settings.hasFocus = true;
				scheduleNextTick();
			}
		}

		/**
<<<<<<< HEAD
		 * Runs when the user becomes active after a period of inactivity.
		 *
		 * @access private
		 *
		 * @since 3.6.0
		 *
		 * @returns {void}
=======
		 * Runs when the user becomes active after a period of inactivity
		 *
		 * @access private
		 *
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function userIsActive() {
			settings.userActivityEvents = false;
			$document.off( '.wp-heartbeat-active' );

			$('iframe').each( function( i, frame ) {
				if ( isLocalFrame( frame ) ) {
					$( frame.contentWindow ).off( '.wp-heartbeat-active' );
				}
			});

			focused();
		}

		/**
<<<<<<< HEAD
		 * Checks for user activity.
		 *
		 * Runs every 30 sec. Sets 'hasFocus = true' if user is active and the window is
		 * in the background. Sets 'hasFocus = false' if the user has been inactive
		 * (no mouse or keyboard activity) for 5 min. even when the window has focus.
		 *
		 * @access private
		 *
		 * @since 3.8.0
		 *
		 * @returns {void}
=======
		 * Check for user activity
		 *
		 * Runs every 30 sec.
		 * Sets 'hasFocus = true' if user is active and the window is in the background.
		 * Set 'hasFocus = false' if the user has been inactive (no mouse or keyboard activity)
		 * for 5 min. even when the window has focus.
		 *
		 * @access private
		 *
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function checkUserActivity() {
			var lastActive = settings.userActivity ? time() - settings.userActivity : 0;

			// Throttle down when no mouse or keyboard activity for 5 min.
			if ( lastActive > 300000 && settings.hasFocus ) {
				blurred();
			}

			// Suspend after 10 min. of inactivity when suspending is enabled.
			// Always suspend after 60 min. of inactivity. This will release the post lock, etc.
			if ( ( settings.suspendEnabled && lastActive > 600000 ) || lastActive > 3600000 ) {
				settings.suspend = true;
			}

			if ( ! settings.userActivityEvents ) {
				$document.on( 'mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active', function() {
					userIsActive();
				});

				$('iframe').each( function( i, frame ) {
					if ( isLocalFrame( frame ) ) {
						$( frame.contentWindow ).on( 'mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active', function() {
							userIsActive();
						});
					}
				});

				settings.userActivityEvents = true;
			}
		}

<<<<<<< HEAD
		// Public methods.

		/**
		 * Checks whether the window (or any local iframe in it) has focus, or the user
		 * is active.
		 *
		 * @since 3.6.0
		 * @memberOf wp.heartbeat.prototype
		 *
		 * @returns {boolean} True if the window or the user is active.
=======
		// Public methods

		/**
		 * Whether the window (or any local iframe in it) has focus, or the user is active
		 *
		 * @return bool
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function hasFocus() {
			return settings.hasFocus;
		}

		/**
<<<<<<< HEAD
		 * Checks whether there is a connection error.
		 *
		 * @since 3.6.0
		 *
		 * @memberOf wp.heartbeat.prototype
		 *
		 * @returns {boolean} True if a connection error was found.
=======
		 * Whether there is a connection error
		 *
		 * @return bool
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function hasConnectionError() {
			return settings.connectionError;
		}

		/**
<<<<<<< HEAD
		 * Connects as soon as possible regardless of 'hasFocus' state.
=======
		 * Connect asap regardless of 'hasFocus'
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 *
		 * Will not open two concurrent connections. If a connection is in progress,
		 * will connect again immediately after the current connection completes.
		 *
<<<<<<< HEAD
		 * @since 3.8.0
		 *
		 * @memberOf wp.heartbeat.prototype
		 *
		 * @returns {void}
=======
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function connectNow() {
			settings.lastTick = 0;
			scheduleNextTick();
		}

		/**
<<<<<<< HEAD
		 * Disables suspending.
		 *
		 * Should be used only when Heartbeat is performing critical tasks like
		 * autosave, post-locking, etc. Using this on many screens may overload the
		 * user's hosting account if several browser windows/tabs are left open for a
		 * long time.
		 *
		 * @since 3.8.0
		 *
		 * @memberOf wp.heartbeat.prototype
		 *
		 * @returns {void}
=======
		 * Disable suspending
		 *
		 * Should be used only when Heartbeat is performing critical tasks like autosave, post-locking, etc.
		 * Using this on many screens may overload the user's hosting account if several
		 * browser windows/tabs are left open for a long time.
		 *
		 * @return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function disableSuspend() {
			settings.suspendEnabled = false;
		}

		/**
<<<<<<< HEAD
		 * Gets/Sets the interval.
		 *
		 * When setting to 'fast' or 5, the interval is 5 seconds for the next 30 ticks
		 * (for 2 minutes and 30 seconds) by default. In this case the number of 'ticks'
		 * can be passed as second argument. If the window doesn't have focus, the
		 * interval slows down to 2 min.
		 *
		 * @since 3.6.0
		 *
		 * @memberOf wp.heartbeat.prototype
		 *
		 * @param {string|number} speed Interval: 'fast' or 5, 15, 30, 60, 120. Fast
		 *                              equals 5.
		 * @param {string}        ticks Tells how many ticks before the interval reverts
		 *                              back. Used with speed = 'fast' or 5.
		 *
		 * @returns {number} Current interval in seconds.
=======
		 * Get/Set the interval
		 *
		 * When setting to 'fast' or 5, by default interval is 5 sec. for the next 30 ticks (for 2 min and 30 sec).
		 * In this case the number of 'ticks' can be passed as second argument.
		 * If the window doesn't have focus, the interval slows down to 2 min.
		 *
		 * @param mixed speed Interval: 'fast' or 5, 15, 30, 60, 120
		 * @param string ticks Used with speed = 'fast' or 5, how many ticks before the interval reverts back
		 * @return int Current interval in seconds
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function interval( speed, ticks ) {
			var newInterval,
				oldInterval = settings.tempInterval ? settings.tempInterval : settings.mainInterval;

			if ( speed ) {
				switch ( speed ) {
					case 'fast':
					case 5:
						newInterval = 5000;
						break;
					case 15:
						newInterval = 15000;
						break;
					case 30:
						newInterval = 30000;
						break;
					case 60:
						newInterval = 60000;
						break;
					case 120:
						newInterval = 120000;
						break;
					case 'long-polling':
						// Allow long polling, (experimental)
						settings.mainInterval = 0;
						return 0;
					default:
						newInterval = settings.originalInterval;
				}

				if ( settings.minimalInterval && newInterval < settings.minimalInterval ) {
					newInterval = settings.minimalInterval;
				}

				if ( 5000 === newInterval ) {
					ticks = parseInt( ticks, 10 ) || 30;
					ticks = ticks < 1 || ticks > 30 ? 30 : ticks;

					settings.countdown = ticks;
					settings.tempInterval = newInterval;
				} else {
					settings.countdown = 0;
					settings.tempInterval = 0;
					settings.mainInterval = newInterval;
				}

				// Change the next connection time if new interval has been set.
				// Will connect immediately if the time since the last connection
				// is greater than the new interval.
				if ( newInterval !== oldInterval ) {
					scheduleNextTick();
				}
			}

			return settings.tempInterval ? settings.tempInterval / 1000 : settings.mainInterval / 1000;
		}

		/**
<<<<<<< HEAD
		 * Enqueues data to send with the next XHR.
		 *
		 * As the data is send asynchronously, this function doesn't return the XHR
		 * response. To see the response, use the custom jQuery event 'heartbeat-tick'
		 * on the document, example:
		 *		$(document).on( 'heartbeat-tick.myname', function( event, data, textStatus, jqXHR ) {
		 *			// code
		 *		});
		 * If the same 'handle' is used more than once, the data is not overwritten when
		 * the third argument is 'true'. Use `wp.heartbeat.isQueued('handle')` to see if
		 * any data is already queued for that handle.
		 *
		 * @since 3.6.0
		 *
		 * @memberOf wp.heartbeat.prototype
		 *
		 * @param {string}  handle      Unique handle for the data, used in PHP to
		 *                              receive the data.
		 * @param {*}       data        The data to send.
		 * @param {boolean} noOverwrite Whether to overwrite existing data in the queue.
		 *
		 * @returns {boolean} True if the data was queued.
=======
		 * Enqueue data to send with the next XHR
		 *
		 * As the data is send asynchronously, this function doesn't return the XHR response.
		 * To see the response, use the custom jQuery event 'heartbeat-tick' on the document, example:
		 *		$(document).on( 'heartbeat-tick.myname', function( event, data, textStatus, jqXHR ) {
		 *			// code
		 *		});
		 * If the same 'handle' is used more than once, the data is not overwritten when the third argument is 'true'.
		 * Use wp.heartbeat.isQueued('handle') to see if any data is already queued for that handle.
		 *
		 * $param string handle Unique handle for the data. The handle is used in PHP to receive the data.
		 * $param mixed data The data to send.
		 * $param bool noOverwrite Whether to overwrite existing data in the queue.
		 * $return bool Whether the data was queued or not.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function enqueue( handle, data, noOverwrite ) {
			if ( handle ) {
				if ( noOverwrite && this.isQueued( handle ) ) {
					return false;
				}

				settings.queue[handle] = data;
				return true;
			}
			return false;
		}

		/**
<<<<<<< HEAD
		 * Checks if data with a particular handle is queued.
		 *
		 * @since 3.6.0
		 *
		 * @param {string} handle The handle for the data.
		 *
		 * @returns {boolean} True if the data is queued with this handle.
=======
		 * Check if data with a particular handle is queued
		 *
		 * $param string handle The handle for the data
		 * $return bool Whether some data is queued with this handle
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function isQueued( handle ) {
			if ( handle ) {
				return settings.queue.hasOwnProperty( handle );
			}
		}

		/**
<<<<<<< HEAD
		 * Removes data with a particular handle from the queue.
		 *
		 * @since 3.7.0
		 *
		 * @memberOf wp.heartbeat.prototype
		 *
		 * @param {string} handle The handle for the data.
		 *
		 * @returns {void}
=======
		 * Remove data with a particular handle from the queue
		 *
		 * $param string handle The handle for the data
		 * $return void
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function dequeue( handle ) {
			if ( handle ) {
				delete settings.queue[handle];
			}
		}

		/**
<<<<<<< HEAD
		 * Gets data that was enqueued with a particular handle.
		 *
		 * @since 3.7.0
		 *
		 * @memberOf wp.heartbeat.prototype
		 *
		 * @param {string} handle The handle for the data.
		 *
		 * @returns {*} The data or undefined.
=======
		 * Get data that was enqueued with a particular handle
		 *
		 * $param string handle The handle for the data
		 * $return mixed The data or undefined
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		function getQueuedItem( handle ) {
			if ( handle ) {
				return this.isQueued( handle ) ? settings.queue[handle] : undefined;
			}
		}

		initialize();

<<<<<<< HEAD
		// Expose public methods.
=======
		// Expose public methods
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		return {
			hasFocus: hasFocus,
			connectNow: connectNow,
			disableSuspend: disableSuspend,
			interval: interval,
			hasConnectionError: hasConnectionError,
			enqueue: enqueue,
			dequeue: dequeue,
			isQueued: isQueued,
			getQueuedItem: getQueuedItem
		};
	};

	/**
	 * Ensure the global `wp` object exists.
	 *
	 * @namespace wp
	 */
	window.wp = window.wp || {};
<<<<<<< HEAD

	/**
	 * Contains the Heartbeat API.
	 *
	 * @namespace wp.heartbeat
	 * @type {Heartbeat}
	 */
=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	window.wp.heartbeat = new Heartbeat();

}( jQuery, window ));
