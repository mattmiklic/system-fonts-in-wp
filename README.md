# system-fonts-in-wp

WordPress 4.6 has switched to system fonts. 🎉 You should deactivate this plugin if you're using WordPress 4.6 or higher.

#### Read More

* [Native Fonts in 4.6](https://make.wordpress.org/core/2016/07/07/native-fonts-in-4-6/)
* [Font Natively](https://make.wordpress.org/core/features/font-natively/)
* [#36753: Use system fonts for a faster, more native-feeling admin](https://core.trac.wordpress.org/ticket/36753)

---------------------

#### Original Description

A plugin for WordPress that replaces Open Sans with your device's standard user interface typeface.

There are other plugins that remove Open Sans, but they rely on the generic `sans-serif` fallback. This one adds a new stylesheet that specifies the system UI font for most major operating systems.

This is based on the approach we developed for [WordPress.com](https://wordpress.com) and [Calypso](https://github.com/Automattic/calypso). For more background, see this Calypso PR: [Replace Open Sans with system UI fonts](http://github.com/Automattic/wp-calypso/pull/3016).

Credit to this WordPress forums thread for the code that removes Open Sans. https://wordpress.org/support/topic/remove-open-sans-and-add-custom-fonts

**Disclaimer:** I never claimed to know what I was doing; if your site is hacked by pirates after installing this plugin, it's not my fault.
