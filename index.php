<?php

/*
Plugin Name: Bubbl Plugin 
Plugin URI: 
Description: Activates the Bubbler video clipping web component for YouTube videos
Author: Bubbl, Inc.
Version: 1.0
Author URI: http://www.bubbl.me
*/


function bubbler_js() {
    wp_enqueue_script( 'bubbler_js', '//cdn.bubbl.me/js/publisher/bubbler_public_859a29ba798e2f275c196d43.js', array(), null, true );
}

function bubbl_enable_yt_api($content)
{
    
    $yt_embed_url_regex = '#src="(http(?:s)?://www\.youtube\.com/embed/[^"]+)"#i';
    $replacement = 'src="$1&enablejsapi=1"';
    $content = preg_replace($yt_embed_url_regex, $replacement, $content);

return $content;
}

add_filter('the_content','bubbl_enable_yt_api');

add_action( 'wp_enqueue_scripts', 'bubbler_js' );

?>