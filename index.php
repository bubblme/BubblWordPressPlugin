<?php

/*
Plugin Name: Bubbl Plugin 
Plugin URI: 
Description: Activates the Bubbler video clipping web component for YouTube videos
Author: Bubbl, Inc.
Version: 1.1
Author URI: http://www.bubbl.me
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2016 Bubbl, Inc.
*/

function bubbler_js() {
    wp_enqueue_script( 'bubbler_js', '//cdn.bubbl.me/js/publisher/bubbler_public_859a29ba798e2f275c196d43.js', array(), null, true );
}

function bubbl_yt_enablejsapi_cb($m) {
    /*
        $m[1] is the delimeter (' or ")
        $m[2] is the base URL
        $m[3] is the query string (if it exists)
    */
    if (count($m) == 4)  { 
        
        $query_string = $m[3];
        $pos = strpos($query_string,'enablejsapi');
        
        if ($pos !== false) {
            $query_string = str_replace('enablejsapi=0','enablejsapi=1',$query_string);
        }
        else {
            $query_string .= "&enablejsapi=1"; 
        } 
        
        return 'src='.$m[1].$m[2].$query_string.$m[1];
        
    } // no query string
    else { 
        return 'src='.$m[1].$m[2].'?enablejsapi=1'.$m[1];
    }
}

function bubbl_enable_yt_api($content)
{
    
    $yt_embed_url_regex = '#src=(\'|")(http(?:s)?://www\.youtube\.com/embed/[A-Za-z0-9_-]+)(\?(?:(?!\\1).)*)?\\1#i';
    $content = preg_replace_callback($yt_embed_url_regex, 'bubbl_yt_enablejsapi_cb', $content);

    return $content;
}

add_filter('the_content','bubbl_enable_yt_api');

add_action( 'wp_enqueue_scripts', 'bubbler_js' );

?>