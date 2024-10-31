<?php
/*
	Plugin Name: Multibox Headers
	Plugin URI: http://cgarvey.ie/
	Feed URI: 
	Description: Multibox Headers adds the necessary includes for the Multibox javascript libarry to your blog post / page headers. Multibox is a Lightbox-like javascript libraray, based on MooTools, that supports HTML content and Flash movies in the lightbox). This plugin simply adds the required includes; it does not change your content, or galleries, to use it (there are other plugins available for that).
	Version: 1.0
	Author: Cathal Garvey
	Author URI: http://cgarvey.ie/
*/

/*
	Copyright (c) 2009 Cathal Garvey ( http://cgarvey.ie/ )

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

define( "CG_MULTIBOX_HEADERS_PLUGINURI", WP_CONTENT_URL . "/plugins/" . dirname( plugin_basename( __FILE__ ) ) . "/" );

function cgMultiBoxHeader() {
	$content = "\n";
	$content .= "\t\t<!-- cg-multibox -->\n";
	$content .= "\t\t<style type=\"text/css\">\n";
		$content .= "\t\t\t.MultiBoxClose, .MultiBoxPrevious, .MultiBoxNext, .MultiBoxNextDisabled, .MultiBoxPreviousDisabled {\n";
			$content .= "\t\t\t\tbehavior: url( \"" . CG_MULTIBOX_HEADERS_PLUGINURI . "multibox/iepngfix.htc\" );\n";
		$content .= "\t\t\t}\n";
	$content .= "\t\t</style>\n";
	$content .= "\t\t<link rel=\"stylesheet\" href=\"" . CG_MULTIBOX_HEADERS_PLUGINURI . "multibox/multibox.yui.css\" type=\"text/css\" media=\"screen\" />\n";
	$content .= "\t\t<script type=\"text/javascript\" src=\"" . CG_MULTIBOX_HEADERS_PLUGINURI . "multibox/multibox-v1.3.1.yui.js\"></script>\n";
	$content .= "\t\t<script type=\"text/javascript\" src=\"" . CG_MULTIBOX_HEADERS_PLUGINURI . "multibox/overlay-v1.2.yui.js\"></script>\n";
	$content .= "\t\t<!-- /cg-multibox -->\n";
	echo $content;
}
add_action( "wp_head", "cgMultiBoxHeader" );
?>
