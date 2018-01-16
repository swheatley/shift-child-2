=== WP LinkedIn Auto Publish ===
Contributors: northernbeacheswebsites
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VGVE97KF74FVN
Tags: linkedin, linkedin profile, linkedin company, linkedin companies, auto publish, autopublish, add link to linkedin, linkedin auto publish, social media auto publish, social network auto publish
Requires at least: 3.0.1
Tested up to: 4.8.1
Stable tag: 5.20
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP LinkedIn Auto Publish automatically publishes posts, custom posts and pages to your LinkedIn profile or company page.

== Description ==

WP LinkedIn Auto Publish lets you publish posts, custom posts and pages automatically from WordPress to your personal LinkedIn profile or to a LinkedIn company page that you are an administrator of. 

The plugin is simple, lightweight and free. It does have a couple of options which includes choosing who you want to share your LinkedIn posts with and whether you want to enable simple text-based sharing or more advanced sharing where you can tell LinkedIn to use your posts feature image. You can also setup a default share message format for all your posts which you can over-ride on the post settings. You can also filter items to be published based on categories selected on the plugin settings page. You can choose whether you want to share posts, custom posts and pages.

Every post will automatically be published to LinkedIn, however on each post there is a checkbox which enables you to not share a particular post. On a post page and on the all posts page you will also see a record of instances a post has been shared to LinkedIn.

Check out the below video to learn how to setup and use the plugin:
[youtube http://www.youtube.com/watch?v=Te2iKQoNz2w]


== Installation ==

There are a couple of methods for installing and setting up this plugin.

= Upload Manually =

1. Download and unzip the plugin
2. Upload the 'wp-linkedin-autopublish' folder into the '/wp-content/plugins/' directory
3. Go to the Plugins admin page and activate the plugin

= Install via the Admin Area =

1. In the admin area go to Plugins > Add New and search for "WP LinkedIn Auto Publish"
2. Click install and then click activate


== Frequently Asked Questions ==

Frequently asked questions can be found under the help tab on the plugin settings page. 

== Screenshots ==

1. Once you have installed the plugin, navigate to Settings > WP LinkedIn Auto Publish in the admin area and you will be welcomed with the main settings page where you will need to enter in some authorisation details.
2. You can then move across to the Profile or Company tab and choose whether you want to share to your personal profile or company page.
3. In the Sharing Options tab you can choose some additional sharing options.
4. On the Additional Options tab you can choose whether to hide the new post column.
5. On every post page there will now be a new LinkedIn settings box where you can over-ride the default share message or choose to not to share the particular post with LinkedIn. If the post has been shared on LinkedIn it will also display a share history of the post.
6. On the posts page there will be a new Shared on LinkedIn column which tells you which posts have been shared on LinkedIn or not.



== Changelog ==

= 5.20 =
* Fixed issue where it appeared as if there was an authentication error when there wasn't 

= 5.19 =
* Fixed issue with authorisation code not working due to version 5.18
* Better debugging or authorisation

= 5.18 =
* Removed HTTPS from the redirect URL displayed in the 'Authorisation Instructions' to show an HTTP address instead as LinkedIn wasn't accepting an HTTPS redirect URL.

= 5.17 =
* Added new option to not share posts by default in the plugin settings. Thanks Alexander.

= 5.16 =
* Fixed diagnostic error message

= 5.15 =
* Added diagnostic information to the help tab

= 5.14 =
* Added a loading message when clicking a button to prevent people double clicking a button. Thanks skinner009!

= 5.13 =
* Enabled the instant share options i.e. the LinkedIn meta box share button and the 'share now' link on post listings to share a post even though the category or post type has been blocked in the plugin settings. This enables you to over-ride default actions if necessary

= 5.12 =
* Made the plugin translatable and provided some translations

= 5.11 =
* Removed shortcodes and HTML tags from post content
* Fixed plural of day on admin notice

= 5.10 =
* Fixed authentication issue some users might have experienced due to LinkedIn requesting a content length in POST requests

= 5.9 =
* Fixed admin notice so it now tells you a more accurate message once the authentication has expired

= 5.8 =
* Fixed donation link

= 5.7 =
* Fixed the way the Redirect URI (which is used in the initial plugin setup/authorisation process) is created and deployed. Now if you change website addresses or go from an HTTP to an HTTPS website the redirect URI will be dynamically created instead of being saved in the plugin settings which was causing some headaches for people. Thanks to Jack Welch for the inspiration to do this fix
* Tested with WordPress version 4.7.4

= 5.6 =
* Limited share message to 700 characters to allow long posts to still be shared

= 5.5 =
* Resolved special characters showing incorrectly on advanced share message

= 5.4 =
* Resolved fully special characters showing incorrectly

= 5.3 =
* Fixes issue with website name and post title showing special characters incorrectly

= 5.2 =
* New getting started video which is viewable from the plugin settings

= 5.1 =
* Minor change to 'Share Now' button

= 5.0 =
* Implemented new 'Share Now' button on posts page meta box so posts can be shared without having to update/publish the page
* New smart AJAX post option saving which will give more predictable results when choosing to share, not share or change the custom message of a post
* Now the 'Share Now' button on the All Posts page will actually share the post to LinkedIn rather than taking you to the post edit page to then share the post to LinkedIn

= 4.2 =
* Made it easier to reshare previously published posts as you don't need to make them draft and then publish them again

= 4.1 =
* Fixes issue with custom post types being shared to LinkedIn

= 4.0 =
* Now works with scheduled posts
* New help tab to help people with common issues particular as to why posts aren't being shared on LinkedIn
* Tested with WordPress version 4.7.2

= 3.5 =
* Added notice regarding scheduled posts not working

= 3.4 =
* Fixed PHP warning if setting not set

= 3.3 =
* Removed 'Share With' option because when set to 'Connections Only' posts weren't being shared on LinkedIn - I couldn't find a solution to this so just removed the option

= 3.2 =
* Removed error message created by expiry message if the user hasn't saved settings yet

= 3.1 =
* Fix of advanced option share where the pulling of the title was triggering an error message
* Added quick settings link on plugin page

= 3.0 =
* Now you can share custom post types and pages - check out the new setting in the sharing options tab

= 2.8 =
* There are now more more shortcodes to use for the default share message which include the posts excerpt, content, author and the website title

= 2.7 =
* Fixed numbering error

= 2.6 =
* Updated screenshots

= 2.5 =
* Now displays whether a post has been shared with LinkedIn or not on the main posts listing - this can be turned off with a new setting as well

= 2.4 =
* Improved logic so that once a post has been sent to LinkedIn the post will default to not sending the post again if updated
* Added a share history section at the bottom of the meta box on the posts page so you can see if the post has been sent to linkedin before

= 2.3 =
* Added clipboard functionality to make it easier to copy redirect url
* Added admin warning when access token is about to expire

= 2.2 =
* Updated links and messaging

= 2.1 =
* Updated file names

= 2.0 =
* Reconfigured plugin setting arrangement to follow WordPress best practice
* Updated settings interface

= 1.1 =
* You can now choose particular categories not to share on LinkedIn

= 1.0 =
* Initial launch of the plugin

== Upgrade Notice ==

= 5.20 =
* Fixed issue where it appeared as if there was an authentication error when there wasn't 

= 5.19 =
* Fixed issue with authorisation code not working due to version 5.18
* Better debugging or authorisation

= 5.18 =
* Removed HTTPS from the redirect URL displayed in the 'Authorisation Instructions' to show an HTTP address instead as LinkedIn wasn't accepting an HTTPS redirect URL.

= 5.17 =
* Added new option to not share posts by default in the plugin settings. Thanks Alexander.

= 5.16 =
* Fixed diagnostic error message

= 5.15 =
* Added diagnostic information to the help tab

= 5.14 =
* Added a loading message when clicking a button to prevent people double clicking a button. Thanks skinner009!

= 5.13 =
* Enabled the instant share options i.e. the LinkedIn meta box share button and the 'share now' link on post listings to share a post even though the category or post type has been blocked in the plugin settings. This enables you to over-ride default actions if necessary

= 5.12 =
* Made the plugin translatable and provided some translations

= 5.11 =
* Removed shortcodes and HTML tags from post content
* Fixed plural of day on admin notice

= 5.10 =
* Fixed authentication issue some users might have experienced due to LinkedIn requesting a content length in POST requests

= 5.9 =
* Fixed admin notice so it now tells you a more accurate message once the authentication has expired

= 5.8 =
* Fixed donation link

= 5.7 =
* Fixed the way the Redirect URI (which is used in the initial plugin setup/authorisation process) is created and deployed. Now if you change website addresses or go from an HTTP to an HTTPS website the redirect URI will be dynamically created instead of being saved in the plugin settings which was causing some headaches for people. Thanks to Jack Welch for the inspiration to do this fix
* Tested with WordPress version 4.7.4

= 5.6 =
* Limited share message to 700 characters to allow long posts to still be shared

= 5.5 =
* Resolved special characters showing incorrectly on advanced share message

= 5.4 =
* Resolved fully special characters showing incorrectly

= 5.3 =
* Fixes issue with website name and post title showing special characters incorrectly

= 5.2 =
* New getting started video which is viewable from the plugin settings

= 5.1 =
* Minor change to 'Share Now' button

= 5.0 =
* Implemented new 'Share Now' button on posts page meta box so posts can be shared without having to update/publish the page
* New smart AJAX post option saving which will give more predictable results when choosing to share, not share or change the custom message of a post
* Now the 'Share Now' button on the All Posts page will actually share the post to LinkedIn rather than taking you to the post edit page to then share the post to LinkedIn

= 4.2 =
* Made it easier to reshare previously published posts as you don't need to make them draft and then publish them again

= 4.1 =
* Fixes issue with custom post types being shared to LinkedIn - it is stronly advised to update to this version

= 4.0 =
* Now works with scheduled posts
* New help tab to help people with common issues particular as to why posts aren't being shared on LinkedIn
* Tested with WordPress version 4.7.2

= 3.5 =
* Added notice regarding scheduled posts not working

= 3.4 =
* Fixed PHP warning if setting not set

= 3.3 =
* Removed 'Share With' option because when set to 'Connections Only' posts weren't being shared on LinkedIn - I couldn't find a solution to this so just removed the option

= 3.2 =
* Removed error message created by expiry message if the user hasn't saved settings yet

= 3.1 =
* Fix of advanced option share where the pulling of the title was triggering an error message
* Added quick settings link on plugin page

= 3.0 =
* Now you can share custom post types and pages - check out the new setting in the sharing options tab

= 2.8 =
* There are now more more shortcodes to use for the default share message which include the posts excerpt, content, author and the website title

= 2.7 =
* Fixed numbering error

= 2.6 =
* Updated screenshots

= 2.5 =
* Now displays whether a post has been shared with LinkedIn or not on the main posts listing - this can be turned off with a new setting as well

= 2.4 =
* Improved logic so that once a post has been sent to LinkedIn the post will default to not sending the post again if updated
* Added a share history section at the bottom of the meta box on the posts page so you can see if the post has been sent to linkedin before

= 2.3 =
* Added clipboard functionality to make it easier to copy redirect url
* Added admin warning when access token is about to expire - it's strongly advised if you are currently using the plugin to reauthenticate after this update otherwise you won't receive an expiry notice

= 2.2 =
* Updated links and messaging

= 2.1 =
* Updated file names

= 2.0 =
* Reconfigured plugin setting arrangement to follow WordPress best practice
* Updated settings interface

= 1.1 =
* You can now choose particular categories not to share on LinkedIn

= 1.0 =
* This is the first version of the plugin.