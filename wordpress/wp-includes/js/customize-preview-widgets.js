<<<<<<< HEAD
/**
 * @output wp-includes/js/customize-preview-widgets.js
 */

/* global _wpWidgetCustomizerPreviewSettings */

/**
 * Handles the initialization, refreshing and rendering of widget partials and sidebar widgets.
 *
 * @since 4.5.0
 *
 * @namespace wp.customize.widgetsPreview
 *
 * @param {jQuery} $   The jQuery object.
 * @param {Object} _   The utilities library.
 * @param {Object} wp  Current WordPress environment instance.
 * @param {Object} api Information from the API.
 *
 * @returns {Object} Widget-related variables.
 */
=======
/* global _wpWidgetCustomizerPreviewSettings */

/** @namespace wp.customize.widgetsPreview */
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
wp.customize.widgetsPreview = wp.customize.WidgetCustomizerPreview = (function( $, _, wp, api ) {

	var self;

	self = {
		renderedSidebars: {},
		renderedWidgets: {},
		registeredSidebars: [],
		registeredWidgets: {},
		widgetSelectors: [],
		preview: null,
		l10n: {
			widgetTooltip: ''
		},
		selectiveRefreshableWidgets: {}
	};

	/**
<<<<<<< HEAD
	 * Initializes the widgets preview.
	 *
	 * @since 4.5.0
	 *
	 * @memberOf wp.customize.widgetsPreview
	 *
	 * @returns {void}
=======
	 * Init widgets preview.
	 *
	 * @since 4.5.0
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	self.init = function() {
		var self = this;

		self.preview = api.preview;
		if ( ! _.isEmpty( self.selectiveRefreshableWidgets ) ) {
			self.addPartials();
		}

		self.buildWidgetSelectors();
		self.highlightControls();

		self.preview.bind( 'highlight-widget', self.highlightWidget );

		api.preview.bind( 'active', function() {
			self.highlightControls();
		} );

		/*
		 * Refresh a partial when the controls pane requests it. This is used currently just by the
		 * Gallery widget so that when an attachment's caption is updated in the media modal,
		 * the widget in the preview will then be refreshed to show the change. Normally doing this
		 * would not be necessary because all of the state should be contained inside the changeset,
		 * as everything done in the Customizer should not make a change to the site unless the
		 * changeset itself is published. Attachments are a current exception to this rule.
		 * For a proposal to include attachments in the customized state, see #37887.
		 */
		api.preview.bind( 'refresh-widget-partial', function( widgetId ) {
			var partialId = 'widget[' + widgetId + ']';
			if ( api.selectiveRefresh.partial.has( partialId ) ) {
				api.selectiveRefresh.partial( partialId ).refresh();
			} else if ( self.renderedWidgets[ widgetId ] ) {
				api.preview.send( 'refresh' ); // Fallback in case theme does not support 'customize-selective-refresh-widgets'.
			}
		} );
	};

<<<<<<< HEAD
	self.WidgetPartial = api.selectiveRefresh.Partial.extend(/** @lends wp.customize.widgetsPreview.WidgetPartial.prototype */{

		/**
		 * Represents a partial widget instance.
		 *
		 * @since 4.5.0
		 *
		 * @constructs
		 * @augments wp.customize.selectiveRefresh.Partial
		 *
		 * @alias wp.customize.widgetsPreview.WidgetPartial
		 * @memberOf wp.customize.widgetsPreview
		 *
		 * @param {string} id             The partial's ID.
		 * @param {Object} options        Options used to initialize the partial's
		 *                                instance.
		 * @param {Object} options.params The options parameters.
=======
	/**
	 * Partial representing a widget instance.
	 *
	 * @memberOf wp.customize.widgetsPreview
	 * @alias wp.customize.widgetsPreview.WidgetPartial
	 *
	 * @class
	 * @augments wp.customize.selectiveRefresh.Partial
	 * @since 4.5.0
	 */
	self.WidgetPartial = api.selectiveRefresh.Partial.extend(/** @lends wp.customize.widgetsPreview.WidgetPartial.prototype */{

		/**
		 * Constructor.
		 *
		 * @since 4.5.0
		 * @param {string} id - Partial ID.
		 * @param {Object} options
		 * @param {Object} options.params
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		initialize: function( id, options ) {
			var partial = this, matches;
			matches = id.match( /^widget\[(.+)]$/ );
			if ( ! matches ) {
				throw new Error( 'Illegal id for widget partial.' );
			}

			partial.widgetId = matches[1];
			partial.widgetIdParts = self.parseWidgetId( partial.widgetId );
			options = options || {};
			options.params = _.extend(
				{
					settings: [ self.getWidgetSettingId( partial.widgetId ) ],
					containerInclusive: true
				},
				options.params || {}
			);

			api.selectiveRefresh.Partial.prototype.initialize.call( partial, id, options );
		},

		/**
<<<<<<< HEAD
		 * Refreshes the widget partial.
		 *
		 * @since 4.5.0
		 *
		 * @returns {Promise|void} Either a promise postponing the refresh, or void.
=======
		 * Refresh widget partial.
		 *
		 * @returns {Promise}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		refresh: function() {
			var partial = this, refreshDeferred;
			if ( ! self.selectiveRefreshableWidgets[ partial.widgetIdParts.idBase ] ) {
				refreshDeferred = $.Deferred();
				refreshDeferred.reject();
				partial.fallback();
				return refreshDeferred.promise();
			} else {
				return api.selectiveRefresh.Partial.prototype.refresh.call( partial );
			}
		},

		/**
<<<<<<< HEAD
		 * Sends the widget-updated message to the parent so the spinner will get
		 * removed from the widget control.
		 *
		 * @inheritDoc
		 * @param {wp.customize.selectiveRefresh.Placement} placement The placement
		 *                                                            function.
		 *
		 * @returns {void}
=======
		 * Send widget-updated message to parent so spinner will get removed from widget control.
		 *
		 * @inheritdoc
		 * @param {wp.customize.selectiveRefresh.Placement} placement
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		renderContent: function( placement ) {
			var partial = this;
			if ( api.selectiveRefresh.Partial.prototype.renderContent.call( partial, placement ) ) {
				api.preview.send( 'widget-updated', partial.widgetId );
				api.selectiveRefresh.trigger( 'widget-updated', partial );
			}
		}
	});

<<<<<<< HEAD
	self.SidebarPartial = api.selectiveRefresh.Partial.extend(/** @lends wp.customize.widgetsPreview.SidebarPartial.prototype */{

		/**
		 * Represents a partial widget area.
		 *
		 * @since 4.5.0
		 *
		 * @class
		 * @augments wp.customize.selectiveRefresh.Partial
		 *
		 * @memberOf wp.customize.widgetsPreview
		 * @alias wp.customize.widgetsPreview.SidebarPartial
		 *
		 * @param {string} id             The partial's ID.
		 * @param {Object} options        Options used to initialize the partial's instance.
		 * @param {Object} options.params The options parameters.
=======
	/**
	 * Partial representing a widget area.
	 *
	 * @memberOf wp.customize.widgetsPreview
	 * @alias wp.customize.widgetsPreview.SidebarPartial
	 *
	 * @class
	 * @augments wp.customize.selectiveRefresh.Partial
	 * @since 4.5.0
	 */
	self.SidebarPartial = api.selectiveRefresh.Partial.extend(/** @lends wp.customize.widgetsPreview.SidebarPartial.prototype */{

		/**
		 * Constructor.
		 *
		 * @since 4.5.0
		 * @param {string} id - Partial ID.
		 * @param {Object} options
		 * @param {Object} options.params
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		initialize: function( id, options ) {
			var partial = this, matches;
			matches = id.match( /^sidebar\[(.+)]$/ );
			if ( ! matches ) {
				throw new Error( 'Illegal id for sidebar partial.' );
			}
			partial.sidebarId = matches[1];

			options = options || {};
			options.params = _.extend(
				{
					settings: [ 'sidebars_widgets[' + partial.sidebarId + ']' ]
				},
				options.params || {}
			);

			api.selectiveRefresh.Partial.prototype.initialize.call( partial, id, options );

			if ( ! partial.params.sidebarArgs ) {
				throw new Error( 'The sidebarArgs param was not provided.' );
			}
			if ( partial.params.settings.length > 1 ) {
				throw new Error( 'Expected SidebarPartial to only have one associated setting' );
			}
		},

		/**
<<<<<<< HEAD
		 * Sets up the partial.
		 *
		 * @since 4.5.0
		 *
		 * @returns {void}
=======
		 * Set up the partial.
		 *
		 * @since 4.5.0
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		ready: function() {
			var sidebarPartial = this;

			// Watch for changes to the sidebar_widgets setting.
			_.each( sidebarPartial.settings(), function( settingId ) {
				api( settingId ).bind( _.bind( sidebarPartial.handleSettingChange, sidebarPartial ) );
			} );

			// Trigger an event for this sidebar being updated whenever a widget inside is rendered.
			api.selectiveRefresh.bind( 'partial-content-rendered', function( placement ) {
				var isAssignedWidgetPartial = (
					placement.partial.extended( self.WidgetPartial ) &&
					( -1 !== _.indexOf( sidebarPartial.getWidgetIds(), placement.partial.widgetId ) )
				);
				if ( isAssignedWidgetPartial ) {
					api.selectiveRefresh.trigger( 'sidebar-updated', sidebarPartial );
				}
			} );

			// Make sure that a widget partial has a container in the DOM prior to a refresh.
			api.bind( 'change', function( widgetSetting ) {
				var widgetId, parsedId;
				parsedId = self.parseWidgetSettingId( widgetSetting.id );
				if ( ! parsedId ) {
					return;
				}
				widgetId = parsedId.idBase;
				if ( parsedId.number ) {
					widgetId += '-' + String( parsedId.number );
				}
				if ( -1 !== _.indexOf( sidebarPartial.getWidgetIds(), widgetId ) ) {
					sidebarPartial.ensureWidgetPlacementContainers( widgetId );
				}
			} );
		},

		/**
<<<<<<< HEAD
		 * Gets the before/after boundary nodes for all instances of this sidebar
		 * (usually one).
=======
		 * Get the before/after boundary nodes for all instances of this sidebar (usually one).
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 *
		 * Note that TreeWalker is not implemented in IE8.
		 *
		 * @since 4.5.0
<<<<<<< HEAD
		 *
		 * @returns {Array.<{before: Comment, after: Comment, instanceNumber: number}>}
		 *          An array with an object for each sidebar instance, containing the
		 *          node before and after the sidebar instance and its instance number.
=======
		 * @returns {Array.<{before: Comment, after: Comment, instanceNumber: number}>}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		findDynamicSidebarBoundaryNodes: function() {
			var partial = this, regExp, boundaryNodes = {}, recursiveCommentTraversal;
			regExp = /^(dynamic_sidebar_before|dynamic_sidebar_after):(.+):(\d+)$/;
			recursiveCommentTraversal = function( childNodes ) {
				_.each( childNodes, function( node ) {
					var matches;
					if ( 8 === node.nodeType ) {
						matches = node.nodeValue.match( regExp );
						if ( ! matches || matches[2] !== partial.sidebarId ) {
							return;
						}
						if ( _.isUndefined( boundaryNodes[ matches[3] ] ) ) {
							boundaryNodes[ matches[3] ] = {
								before: null,
								after: null,
								instanceNumber: parseInt( matches[3], 10 )
							};
						}
						if ( 'dynamic_sidebar_before' === matches[1] ) {
							boundaryNodes[ matches[3] ].before = node;
						} else {
							boundaryNodes[ matches[3] ].after = node;
						}
					} else if ( 1 === node.nodeType ) {
						recursiveCommentTraversal( node.childNodes );
					}
				} );
			};

			recursiveCommentTraversal( document.body.childNodes );
			return _.values( boundaryNodes );
		},

		/**
<<<<<<< HEAD
		 * Gets the placements for this partial.
		 *
		 * @since 4.5.0
		 *
		 * @returns {Array} An array containing placement objects for each of the
		 *                  dynamic sidebar boundary nodes.
=======
		 * Get the placements for this partial.
		 *
		 * @since 4.5.0
		 * @returns {Array}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		placements: function() {
			var partial = this;
			return _.map( partial.findDynamicSidebarBoundaryNodes(), function( boundaryNodes ) {
				return new api.selectiveRefresh.Placement( {
					partial: partial,
					container: null,
					startNode: boundaryNodes.before,
					endNode: boundaryNodes.after,
					context: {
						instanceNumber: boundaryNodes.instanceNumber
					}
				} );
			} );
		},

		/**
		 * Get the list of widget IDs associated with this widget area.
		 *
		 * @since 4.5.0
		 *
<<<<<<< HEAD
		 * @throws {Error} If there's no settingId.
		 * @throws {Error} If the setting doesn't exist in the API.
		 * @throws {Error} If the API doesn't pass an array of widget ids.
		 *
		 * @returns {Array} A shallow copy of the array containing widget IDs.
=======
		 * @returns {Array}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		getWidgetIds: function() {
			var sidebarPartial = this, settingId, widgetIds;
			settingId = sidebarPartial.settings()[0];
			if ( ! settingId ) {
				throw new Error( 'Missing associated setting.' );
			}
			if ( ! api.has( settingId ) ) {
				throw new Error( 'Setting does not exist.' );
			}
			widgetIds = api( settingId ).get();
			if ( ! _.isArray( widgetIds ) ) {
				throw new Error( 'Expected setting to be array of widget IDs' );
			}
			return widgetIds.slice( 0 );
		},

		/**
<<<<<<< HEAD
		 * Reflows widgets in the sidebar, ensuring they have the proper position in the
		 * DOM.
		 *
		 * @since 4.5.0
		 *
		 * @returns {Array.<wp.customize.selectiveRefresh.Placement>} List of placements
		 *                                                            that were reflowed.
=======
		 * Reflow widgets in the sidebar, ensuring they have the proper position in the DOM.
		 *
		 * @since 4.5.0
		 *
		 * @return {Array.<wp.customize.selectiveRefresh.Placement>} List of placements that were reflowed.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		reflowWidgets: function() {
			var sidebarPartial = this, sidebarPlacements, widgetIds, widgetPartials, sortedSidebarContainers = [];
			widgetIds = sidebarPartial.getWidgetIds();
			sidebarPlacements = sidebarPartial.placements();

			widgetPartials = {};
			_.each( widgetIds, function( widgetId ) {
				var widgetPartial = api.selectiveRefresh.partial( 'widget[' + widgetId + ']' );
				if ( widgetPartial ) {
					widgetPartials[ widgetId ] = widgetPartial;
				}
			} );

			_.each( sidebarPlacements, function( sidebarPlacement ) {
				var sidebarWidgets = [], needsSort = false, thisPosition, lastPosition = -1;

				// Gather list of widget partial containers in this sidebar, and determine if a sort is needed.
				_.each( widgetPartials, function( widgetPartial ) {
					_.each( widgetPartial.placements(), function( widgetPlacement ) {

						if ( sidebarPlacement.context.instanceNumber === widgetPlacement.context.sidebar_instance_number ) {
							thisPosition = widgetPlacement.container.index();
							sidebarWidgets.push( {
								partial: widgetPartial,
								placement: widgetPlacement,
								position: thisPosition
							} );
							if ( thisPosition < lastPosition ) {
								needsSort = true;
							}
							lastPosition = thisPosition;
						}
					} );
				} );

				if ( needsSort ) {
					_.each( sidebarWidgets, function( sidebarWidget ) {
						sidebarPlacement.endNode.parentNode.insertBefore(
							sidebarWidget.placement.container[0],
							sidebarPlacement.endNode
						);

						// @todo Rename partial-placement-moved?
						api.selectiveRefresh.trigger( 'partial-content-moved', sidebarWidget.placement );
					} );

					sortedSidebarContainers.push( sidebarPlacement );
				}
			} );

			if ( sortedSidebarContainers.length > 0 ) {
				api.selectiveRefresh.trigger( 'sidebar-updated', sidebarPartial );
			}

			return sortedSidebarContainers;
		},

		/**
<<<<<<< HEAD
		 * Makes sure there is a widget instance container in this sidebar for the given
		 * widget ID.
		 *
		 * @since 4.5.0
		 *
		 * @param {string} widgetId The widget ID.
		 *
		 * @returns {wp.customize.selectiveRefresh.Partial} The widget instance partial.
=======
		 * Make sure there is a widget instance container in this sidebar for the given widget ID.
		 *
		 * @since 4.5.0
		 *
		 * @param {string} widgetId
		 * @returns {wp.customize.selectiveRefresh.Partial} Widget instance partial.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		ensureWidgetPlacementContainers: function( widgetId ) {
			var sidebarPartial = this, widgetPartial, wasInserted = false, partialId = 'widget[' + widgetId + ']';
			widgetPartial = api.selectiveRefresh.partial( partialId );
			if ( ! widgetPartial ) {
				widgetPartial = new self.WidgetPartial( partialId, {
					params: {}
				} );
			}

			// Make sure that there is a container element for the widget in the sidebar, if at least a placeholder.
			_.each( sidebarPartial.placements(), function( sidebarPlacement ) {
				var foundWidgetPlacement, widgetContainerElement;

				foundWidgetPlacement = _.find( widgetPartial.placements(), function( widgetPlacement ) {
					return ( widgetPlacement.context.sidebar_instance_number === sidebarPlacement.context.instanceNumber );
				} );
				if ( foundWidgetPlacement ) {
					return;
				}

				widgetContainerElement = $(
					sidebarPartial.params.sidebarArgs.before_widget.replace( /%1\$s/g, widgetId ).replace( /%2\$s/g, 'widget' ) +
					sidebarPartial.params.sidebarArgs.after_widget
				);

				// Handle rare case where before_widget and after_widget are empty.
				if ( ! widgetContainerElement[0] ) {
					return;
				}

				widgetContainerElement.attr( 'data-customize-partial-id', widgetPartial.id );
				widgetContainerElement.attr( 'data-customize-partial-type', 'widget' );
				widgetContainerElement.attr( 'data-customize-widget-id', widgetId );

				/*
				 * Make sure the widget container element has the customize-container context data.
				 * The sidebar_instance_number is used to disambiguate multiple instances of the
				 * same sidebar are rendered onto the template, and so the same widget is embedded
				 * multiple times.
				 */
				widgetContainerElement.data( 'customize-partial-placement-context', {
					'sidebar_id': sidebarPartial.sidebarId,
					'sidebar_instance_number': sidebarPlacement.context.instanceNumber
				} );

				sidebarPlacement.endNode.parentNode.insertBefore( widgetContainerElement[0], sidebarPlacement.endNode );
				wasInserted = true;
			} );

			api.selectiveRefresh.partial.add( widgetPartial );

			if ( wasInserted ) {
				sidebarPartial.reflowWidgets();
			}

			return widgetPartial;
		},

		/**
<<<<<<< HEAD
		 * Handles changes to the sidebars_widgets[] setting.
		 *
		 * @since 4.5.0
		 *
		 * @param {Array} newWidgetIds New widget IDs.
		 * @param {Array} oldWidgetIds Old widget IDs.
		 *
		 * @returns {void}
=======
		 * Handle change to the sidebars_widgets[] setting.
		 *
		 * @since 4.5.0
		 *
		 * @param {Array} newWidgetIds New widget ids.
		 * @param {Array} oldWidgetIds Old widget ids.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		handleSettingChange: function( newWidgetIds, oldWidgetIds ) {
			var sidebarPartial = this, needsRefresh, widgetsRemoved, widgetsAdded, addedWidgetPartials = [];

			needsRefresh = (
				( oldWidgetIds.length > 0 && 0 === newWidgetIds.length ) ||
				( newWidgetIds.length > 0 && 0 === oldWidgetIds.length )
			);
			if ( needsRefresh ) {
				sidebarPartial.fallback();
				return;
			}

			// Handle removal of widgets.
			widgetsRemoved = _.difference( oldWidgetIds, newWidgetIds );
			_.each( widgetsRemoved, function( removedWidgetId ) {
				var widgetPartial = api.selectiveRefresh.partial( 'widget[' + removedWidgetId + ']' );
				if ( widgetPartial ) {
					_.each( widgetPartial.placements(), function( placement ) {
						var isRemoved = (
							placement.context.sidebar_id === sidebarPartial.sidebarId ||
							( placement.context.sidebar_args && placement.context.sidebar_args.id === sidebarPartial.sidebarId )
						);
						if ( isRemoved ) {
							placement.container.remove();
						}
					} );
				}
				delete self.renderedWidgets[ removedWidgetId ];
			} );

			// Handle insertion of widgets.
			widgetsAdded = _.difference( newWidgetIds, oldWidgetIds );
			_.each( widgetsAdded, function( addedWidgetId ) {
				var widgetPartial = sidebarPartial.ensureWidgetPlacementContainers( addedWidgetId );
				addedWidgetPartials.push( widgetPartial );
				self.renderedWidgets[ addedWidgetId ] = true;
			} );

			_.each( addedWidgetPartials, function( widgetPartial ) {
				widgetPartial.refresh();
			} );

			api.selectiveRefresh.trigger( 'sidebar-updated', sidebarPartial );
		},

		/**
<<<<<<< HEAD
		 * Refreshes the sidebar partial.
		 *
		 * Note that the meat is handled in handleSettingChange because it has the
		 * context of which widgets were removed.
		 *
		 * @since 4.5.0
		 *
		 * @returns {Promise} A promise postponing the refresh.
=======
		 * Note that the meat is handled in handleSettingChange because it has the context of which widgets were removed.
		 *
		 * @since 4.5.0
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 */
		refresh: function() {
			var partial = this, deferred = $.Deferred();

			deferred.fail( function() {
				partial.fallback();
			} );

			if ( 0 === partial.placements().length ) {
				deferred.reject();
			} else {
				_.each( partial.reflowWidgets(), function( sidebarPlacement ) {
					api.selectiveRefresh.trigger( 'partial-content-rendered', sidebarPlacement );
				} );
				deferred.resolve();
			}

			return deferred.promise();
		}
	});

	api.selectiveRefresh.partialConstructor.sidebar = self.SidebarPartial;
	api.selectiveRefresh.partialConstructor.widget = self.WidgetPartial;

	/**
<<<<<<< HEAD
	 * Adds partials for the registered widget areas (sidebars).
	 *
	 * @since 4.5.0
	 *
	 * @returns {void}
=======
	 * Add partials for the registered widget areas (sidebars).
	 *
	 * @since 4.5.0
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	self.addPartials = function() {
		_.each( self.registeredSidebars, function( registeredSidebar ) {
			var partial, partialId = 'sidebar[' + registeredSidebar.id + ']';
			partial = api.selectiveRefresh.partial( partialId );
			if ( ! partial ) {
				partial = new self.SidebarPartial( partialId, {
					params: {
						sidebarArgs: registeredSidebar
					}
				} );
				api.selectiveRefresh.partial.add( partial );
			}
		} );
	};

	/**
<<<<<<< HEAD
	 * Calculates the selector for the sidebar's widgets based on the registered
	 * sidebar's info.
=======
	 * Calculate the selector for the sidebar's widgets based on the registered sidebar's info.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @memberOf wp.customize.widgetsPreview
	 *
	 * @since 3.9.0
<<<<<<< HEAD
	 *
	 * @returns {void}
=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	self.buildWidgetSelectors = function() {
		var self = this;

		$.each( self.registeredSidebars, function( i, sidebar ) {
			var widgetTpl = [
					sidebar.before_widget,
					sidebar.before_title,
					sidebar.after_title,
					sidebar.after_widget
				].join( '' ),
				emptyWidget,
				widgetSelector,
				widgetClasses;

			emptyWidget = $( widgetTpl );
			widgetSelector = emptyWidget.prop( 'tagName' ) || '';
			widgetClasses = emptyWidget.prop( 'className' ) || '';

			// Prevent a rare case when before_widget, before_title, after_title and after_widget is empty.
			if ( ! widgetClasses ) {
				return;
			}

			// Remove class names that incorporate the string formatting placeholders %1$s and %2$s.
			widgetClasses = widgetClasses.replace( /\S*%[12]\$s\S*/g, '' );
			widgetClasses = widgetClasses.replace( /^\s+|\s+$/g, '' );
			if ( widgetClasses ) {
				widgetSelector += '.' + widgetClasses.split( /\s+/ ).join( '.' );
			}
			self.widgetSelectors.push( widgetSelector );
		});
	};

	/**
<<<<<<< HEAD
	 * Highlights the widget on widget updates or widget control mouse overs.
=======
	 * Highlight the widget on widget updates or widget control mouse overs.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @memberOf wp.customize.widgetsPreview
	 *
	 * @since 3.9.0
	 * @param  {string} widgetId ID of the widget.
<<<<<<< HEAD
	 *
	 * @returns {void}
=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	self.highlightWidget = function( widgetId ) {
		var $body = $( document.body ),
			$widget = $( '#' + widgetId );

		$body.find( '.widget-customizer-highlighted-widget' ).removeClass( 'widget-customizer-highlighted-widget' );

		$widget.addClass( 'widget-customizer-highlighted-widget' );
		setTimeout( function() {
			$widget.removeClass( 'widget-customizer-highlighted-widget' );
		}, 500 );
	};

	/**
<<<<<<< HEAD
	 * Shows a title and highlights widgets on hover. On shift+clicking focuses the
	 * widget control.
=======
	 * Show a title and highlight widgets on hover. On shift+clicking
	 * focus the widget control.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @memberOf wp.customize.widgetsPreview
	 *
	 * @since 3.9.0
<<<<<<< HEAD
	 *
	 * @returns {void}
=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	self.highlightControls = function() {
		var self = this,
			selector = this.widgetSelectors.join( ',' );

		// Skip adding highlights if not in the customizer preview iframe.
		if ( ! api.settings.channel ) {
			return;
		}

		$( selector ).attr( 'title', this.l10n.widgetTooltip );
<<<<<<< HEAD
		// Highlights widget when entering the widget editor.
=======

>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		$( document ).on( 'mouseenter', selector, function() {
			self.preview.send( 'highlight-widget-control', $( this ).prop( 'id' ) );
		});

		// Open expand the widget control when shift+clicking the widget element
		$( document ).on( 'click', selector, function( e ) {
			if ( ! e.shiftKey ) {
				return;
			}
			e.preventDefault();

			self.preview.send( 'focus-widget-control', $( this ).prop( 'id' ) );
		});
	};

	/**
<<<<<<< HEAD
	 * Parses a widget ID.
=======
	 * Parse a widget ID.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @memberOf wp.customize.widgetsPreview
	 *
	 * @since 4.5.0
	 *
<<<<<<< HEAD
	 * @param {string} widgetId The widget ID.
	 *
	 * @returns {{idBase: string, number: number|null}} An object containing the
	 *          idBase and number of the parsed widget ID.
=======
	 * @param {string} widgetId Widget ID.
	 * @returns {{idBase: string, number: number|null}}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	self.parseWidgetId = function( widgetId ) {
		var matches, parsed = {
			idBase: '',
			number: null
		};

		matches = widgetId.match( /^(.+)-(\d+)$/ );
		if ( matches ) {
			parsed.idBase = matches[1];
			parsed.number = parseInt( matches[2], 10 );
		} else {
			parsed.idBase = widgetId; // Likely an old single widget.
		}

		return parsed;
	};

	/**
<<<<<<< HEAD
	 * Parses a widget setting ID.
=======
	 * Parse a widget setting ID.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @memberOf wp.customize.widgetsPreview
	 *
	 * @since 4.5.0
	 *
	 * @param {string} settingId Widget setting ID.
<<<<<<< HEAD
	 *
	 * @returns {{idBase: string, number: number|null}|null} Either an object
	 *          containing the idBase and number of the parsed widget setting ID, or
	 *          null.
=======
	 * @returns {{idBase: string, number: number|null}|null}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	self.parseWidgetSettingId = function( settingId ) {
		var matches, parsed = {
			idBase: '',
			number: null
		};

		matches = settingId.match( /^widget_([^\[]+?)(?:\[(\d+)])?$/ );
		if ( ! matches ) {
			return null;
		}
		parsed.idBase = matches[1];
		if ( matches[2] ) {
			parsed.number = parseInt( matches[2], 10 );
		}
		return parsed;
	};

	/**
<<<<<<< HEAD
	 * Converts a widget ID into a Customizer setting ID.
=======
	 * Convert a widget ID into a Customizer setting ID.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @memberOf wp.customize.widgetsPreview
	 *
	 * @since 4.5.0
	 *
<<<<<<< HEAD
	 * @param {string} widgetId The widget ID.
	 *
	 * @returns {string} The setting ID.
=======
	 * @param {string} widgetId Widget ID.
	 * @returns {string} settingId Setting ID.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	self.getWidgetSettingId = function( widgetId ) {
		var parsed = this.parseWidgetId( widgetId ), settingId;

		settingId = 'widget_' + parsed.idBase;
		if ( parsed.number ) {
			settingId += '[' + String( parsed.number ) + ']';
		}

		return settingId;
	};

	api.bind( 'preview-ready', function() {
		$.extend( self, _wpWidgetCustomizerPreviewSettings );
		self.init();
	});

	return self;
})( jQuery, _, wp, wp.customize );
