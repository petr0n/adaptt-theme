<?php

/**
 * Add custom attribute and value to a nav menu item's anchor.
 *
 * @author Sridhar Katakam
 * @link   https://sridharkatakam.com/
 */
add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args ) {
	//$atts['data-hover'] = $item->title;
	$atts['uk-scroll'] = ' ';
	return $atts;
}, 10, 3 );
