=== YD Setup Locale ===
Contributors: ydubois
Donate link: http://www.yann.com/
Tags: multilingual, international, i18n, l10n, internationalization, localization, language, xml, lang, country, translate, translation, translating, header
Requires at least: 2.0.0
Tested up to: 2.7.1
Stable tag: trunk

Automatically sets up the WP language environment based on first part of url. Will setup XML lang attribute + $locale variable.

== Description ==

This very simple Wordpress plugin automatically sets up the WP language environment based on the first part of the url of any page.

It will automatically setup the right XML header lang attribute + the internal Wordpress $locale variable that is used to load the right language files for i18n and l10n (.po, .mo).

= Usage: =

Your blog URL structure should always begin with an official two-letter langage code, for example:

- /en/... for english
- /es/... for Spanish
- /ja/... for Japanese
- /fr/... for French
- etc.

Please use only lower-case codes.

Pages that don’t comply to this URL scheme will still get your blog’s default locale setting, as configured in your wp-config.php file.

Sometimes you need to rename or copy some of your po/mo files, for example French language PO files are usually named like this: `fr_FR.po`; 
just copy it to `fr.po` to make it work with a two-letter code.

= Example =

This plugin is used for extended multi-language support on the [Post2Peer.com open posts directory](http://post2peer.com/about "Post2Peer posts and sites directory").

= Français =

Ce plugin permet très simplement de faire fonctionner un blog multilingue ou bilingue, français/anglais par exemple.

= Active support =

Drop me a line on my [YD Setup Locale plugin support site](http://www.yann.com/wp-plugins/yd-setup-locale "Yann Dubois' Setup Locale for Wordpress") to report bugs, ask for specific feature or improvement, or just tell me how you're using the plugin.

== Installation ==

1. Unzip yd-setup-locale.zip
1. Upload the `yd-setup-local` directory and all its contents into your `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where should I ask questions? =

http://www.yann.com/wp-plugins/yd-setup-locale

Use comments.

I will answer only on that page so that all users can benefit from the answer. 
So please come back to see the answer or subscribe to that page's post comments.

== Screenshots ==

No screenshot yet. This plugin is used on the [Post2Peer.com open posts directory](http://post2peer.com/about "Post2Peer posts and sites directory").


== Revisions ==

0.1.0 Initial beta release

== Did you like it? ==

Drop me a line on http://www.yann.com/wp-plugins/yd-setup-locale

