/*
 *  Module: nav
 */
var $    		= require('jquery');
var UIkit    	= require('./vendor/uikit.js');

/**
 * Initialize nav
 */
function init() {
	UIkit.util.on('.offcanvas-nav', 'show', function () {
		// do something
	});

	// UIkit.lightbox('.healthcare-slider').show(0);

	$diamonds = $('.img-clip-row.one');
	$diamonds.each(function(){
		$el = $(this);
		// console.log($el.attr('data-slider'));
		// UIkit.lightbox('.healthcare-slider').show(0);
		$el.on('click', function (e) {
			// console.log(e);
			e.preventDefault();
			UIkit.lightbox('.' + $el.attr('data-slider') + '-slider').show(0);
		});
	});

};


/**
 * Public API
 * @type {Object}
 */
module.exports = {
	init: init
};