<?php
/*
Plugin Name: ipadio audio player
Plugin URI: http://wordpress.org/extend/plugins/ipadio-audio-player/
Description: plugin to embed an ipadio audio player.
Author: ipadio
Version: 1.0
Author URI: http://www.ipadio.com/
*/ 

class ipadio {
	// include ipadio jsapi for html5 player
	function ipadio_jsapi_init() {
		echo "<script type=\"text/javascript\" src=\"http://api.ipadio.com/jsapi/v1/ipadio-1.0.js?nocache=" . time() . "\"></script>";
	}

	//function to embed player
	function render_ipadio_player( $atts ) {
		extract( shortcode_atts( array( 'format' => '', 'channelid' => '', 'broadcastid' => '', 'width' => 352, 'height' => 220 ), $atts ) );
	
		if ($format == "html5") {
			// add jsapi to footer if html5 player is being used
			add_action( 'wp_footer', array(__CLASS__, 'ipadio_jsapi_init'));
		}

		// make http request to the ipadio handler to return embed code
		$request = new WP_Http;
		$result = $request->request("http://www.ipadio.com/wordpress/plugin.ashx?format=$format&channelid=$channelid&broadcastid=$broadcastid&width=$width&height=$height");
		return $result["body"];
	}

	// register shortcode
	function init() {
		add_shortcode('ipadio', array(__CLASS__, 'render_ipadio_player'));
	}
}
ipadio::init();
?>
