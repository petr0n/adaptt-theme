/*
 *  Main entry point
 */

require('es5-shim');
require('consolelog');
require('uikit');

var $               = require('jquery');
var nav        		= require('./nav.js');
// var responsive      = require('./responsive.js');
// var SocialModule    = require('./social.js');
// var AnalyticsModule = require('./analytics.js');
// var social = new SocialModule({ fbAppId: '' });
// var analytics = new AnalyticsModule({ gaid: '' });


/**
 * Initialize the app on DOM ready
 */
$(function() {
	// analytics.init();
	// social.init();
	nav.init();
	// responsive.init();
});