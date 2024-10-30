=== ipadio player ===
Contributors: robnorton 
Tags: ipadio, audio, player, phonecast, phlog, phlogcast
Requires at least: 3.0.1
Tested up to: 3.4.2
Stable tag: trunk

Embed an ipadio channel or broadcast into your blog.

== Description ==

Embeds an ipadio player in a blog post.

*   Choose either an individual broadcast or a channel
*   Standard, narrow, mini and HTML5 player versions
*   Resizeable (in standard format)

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

Use the shortcode **[ipadio]** to embed a channel or individual broadcast.

Specify a channel ID or a broadcast ID in the shortcode:

**[ipadio channelid=\"12345\"]**

**[ipadio broadcastid=\"678910\"]**

Control the size of the embeded player using **height** and **width **in the shortcode:

**[ipadio channelid=\"12345\" width=\"500\" height=\"250\"]**

Specify either a narrow player (vertical) or mini player (horizontal):

**[ipadio channelid=\"12345\" format=\"narrow\"]**

**[ipadio broadcastid=\"678910\" format=\"mini\"]**

Use the HTML5 player:

**[ipadio channelid=\"12345\" format=\"html5\" width=\"400\" height=\"60\"]**