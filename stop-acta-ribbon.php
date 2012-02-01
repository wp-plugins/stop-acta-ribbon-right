<?php
/*
Plugin Name: Stop ACTA Ribbon (Position right)
Plugin URI: 
Description: When activated, this plugin will put a Stop ACTA ribbon on the top right corner of your website.
Author: Konjunktion
Version: 1.0
License: GPLv2
Author URI: http://konjunktion.info
*/

function render_stop_acta_ribbon() {
	$ribbon_url = plugins_url( 'stop-acta-ribbon.png', __FILE__ );
	echo "<a target='_blank' class='stop-acta-ribbon' href='http://www.stopp-acta.info/'><img src='{$ribbon_url}' alt='Stop ACTA' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_stop_acta_ribbon' );
