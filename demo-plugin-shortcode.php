<?php 
/*
 Plugin Name: Demo Plugin Shortcode
 Plugin URI: http://website-in-a-weekend.net/plugins/demo-plugins/
 Description: A brief description of the Plugin.
 Version: 0.1
 Author: Dave Doolin
 Author URI: http://website-in-a-weekend.net/
 */

/*  Copyright 2009 David M. Doolin  (email : david.doolin@gmail.com)
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/* On activation, register a new shortcode, and build a database table.
 * Find something to put into that database table.
 * Have the shortcode pull from the table.
 * On deactivation, disable the the shortcode and remove the database table.
 */
if (!class_exists("demo_plugin_shortcode")) {
    
    class demo_plugin_shortcode {
        
        function demo_plugin_shortcode() {
            
            add_shortcode('wiawcode', array(&$this, 'wiawcode_handler'));
            register_activation_hook('demo-plugin-shortcode/demo-plugin-shortcode.php', array(&$this, 'on_activation'));
            register_deactivation_hook('demo-plugin-shortcode/demo-plugin-shortcode.php', array(&$this, 'on_deactivation'));
        }
        
        function on_activation() {
            //stub
        }
        
        function on_deactivation() {
            remove_shortcode('wiawcode');
        }
        
        function wiawcode_handler() {
            
            $output = "WIAW shortcode text";
            return $output;
        }
            
    }
}


$wpdpd = new demo_plugin_shortcode();

?>
