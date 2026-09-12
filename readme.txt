=== Iyo Scratch Blocks ===
Contributors: kazweda
Tags: scratch, education, code, block, coderdojo
Requires at least: 5.8
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 1.1.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Visualize Scratch project code as block images in your posts and pages.

== Description ==

Iyo Scratch Blocks lets you write Scratch-style pseudocode in your WordPress content and renders it as images of Scratch blocks, using the [scratchblocks](https://github.com/scratchblocks/scratchblocks) library.

This is useful for tutorials, coding classes (such as CoderDojo), and documentation that references Scratch code.

= Bundled library =

This plugin bundles the scratchblocks JavaScript library (MIT License, Copyright 2013–2026 Tim Radvan). See `assets/js/scratchblocks/LICENSE` for the full license text.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/iyo-scratch-blocks` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Add a `scratchblocks` class element to your content and write Scratch pseudocode inside it:

`<div class="scratchblocks">
when green flag clicked
say [Hello!]
</div>`

Note: Manually escape `<` and `>` characters (e.g. `&lt;` and `&gt;`) inside the block.

== Frequently Asked Questions ==

= Which languages are supported for block labels? =

Currently English (`en`) and Japanese (`ja`) are enabled.

= Where does the rendering happen? =

Rendering happens entirely in the visitor's browser via JavaScript; no server-side processing or external requests are made.

= Where can I report bugs or request features? =

Please use the [GitHub issue tracker](https://github.com/kazweda/iyo-scratch-blocks/issues) for bug reports and feature requests.

== Changelog ==

= 1.1.2 =
* Update Author URI to the canonical non-www URL.
* Add a support/bug report link (GitHub issue tracker) to the FAQ.

= 1.1.1 =
* Align plugin header license declaration with GPLv2 or later and add License URI.

= 1.1.0 =
* Bundle the scratchblocks library (v3.7.1) with the plugin and load it from the plugin directory instead of an external CDN.
* Add readme.txt for WordPress.org plugin directory submission.

= 1.0.4 =
* Update scratchblocks to v3.7.1 (previously loaded from CDN).

= 1.0.3 =
* Maintenance update.

= 1.0.0 =
* Initial release.
