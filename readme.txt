=== Bubbl Plugin ===
Contributors: Bubbl, Inc.
Donate Link: http://www.bubbl.me
Tags: Bubbl, clip, clipping
Requires at least: 3.0.1
Tested up to: 4.4
Stable tag: 1.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Bubbl Plugin adds Bubbl's "Clip This" technology to Wordpress sites with embedded YouTube videos.

== Description ==

Bubbl has created an incredibly simple way for fans to clip and share video. Our slogan “Clip, Scrub, Share!” is based on the three core UX steps.

First, a user presses the “Clip this!” button on any given video.

Second, the user can adjust the timing and length of the clip using a scrub bar, and customize the clip using advanced features such as text overlay.

Third, a user shares his or her clip with a single click to any of the enabled social networks (e.g., Twitter, Facebook).

The user experience stays consistent across devices, and leverages advanced gestures or interactions on mobile.

This Plugin adds the above features to Wordpress sites that have embedded YouTube videos. The plugin works with Wordpress's built-in YouTube embedding capability (on versions that support it) and should work with YouTube embed Plugins that create the YouTube embed iframes directly - the plugin will *not* work with YouTube embed plugins that use the YouTube API to dynamically generate the embed iframes. If you are unsure about the YouTube plugin you are using, please contact us at our support email.

== Installation ==

1. Upload the plugin directory to the `/wp-content/plugins` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. After activating the plugin, navigate to a page with a Youtube or Vimeo video embedded. The plugin will detect the video automatically and begin the ingestion process.

That's it! The Bubbl Ingestion process is based on a queueing system. The amount of time it takes to ingest content is dependent on the length of the video and the number of the videos in the queue. Once ingestion is complete the "Clip This!" button will appear over the video every time the video page is loaded.

== Changelog ==

= 1.1 =

* BUG: Fixed issue where YouTube embed URL query string is re-written incorrectly when there are no initial query string parameters

