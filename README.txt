=== Debug Using Ngrok ===
Contributors: mehbubrashid
Donate link: https://www.facebook.com/disismehbub
Tags: ngrok, debug, log
Requires at least: 3.0.1
Tested up to: 5.7
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Send debug logs to your ngrok server and view those logs of your code execution that cannot be seen or debugged in the browser.

== Installation and Usage ==

*   Install the plugin and go to Tools => Ngrok Debug
*   Put your ngrok server url and save.
*   Call the function `dungrok_send( $title, $data );` wherever in your code you want to debug.
*   View the logs in the ngrok requests inspector (usually its localhost:4040)

== Changelog ==

= 1.0.1 =
* Deploy config fixed

= 1.0.0 =
* Initial release