<<<<<<< HEAD
/**
 * @output wp-includes/js/zxcvbn-async.js
 */

/* global _zxcvbnSettings */

/**
 * Loads zxcvbn asynchronously by inserting an async script tag before the first
 * script tag on the page.
 *
 * This makes sure zxcvbn isn't blocking loading the page as it is a big
 * library. The source for zxcvbn is read from the _zxcvbnSettings global.
 */
=======
/* global _zxcvbnSettings */
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
(function() {
  var async_load = function() {
    var first, s;
    s = document.createElement('script');
    s.src = _zxcvbnSettings.src;
    s.type = 'text/javascript';
    s.async = true;
    first = document.getElementsByTagName('script')[0];
    return first.parentNode.insertBefore(s, first);
  };

  if (window.attachEvent != null) {
    window.attachEvent('onload', async_load);
  } else {
    window.addEventListener('load', async_load, false);
  }
}).call(this);
