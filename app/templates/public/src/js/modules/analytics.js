/* global ga: true */
define([
    // List the other modules that this module depends on.
  ],
  function () {
    'use strict';
    var Analytics = function (options) {
      // This might be a class that has event listeners or does other things.
      this.accountId = options.accountId;

      // Tell JSHint to ignore the GA snippet so it doesn't throw errors.
      /* jshint ignore:start */
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      /* jshint ignore:end */

      ga('create', this.accountId, 'auto');
      ga('send', 'pageview');
    };

    new Analytics({accountId: 'UA-XXXX-Y'});
    // export this module so other modules can use it if necessary
    return Analytics;
  });