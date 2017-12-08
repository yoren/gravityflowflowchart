<?php
/*
Plugin Name: Gravity Flow Flowchart Extension
Plugin URI: http://gravityflow.io
Description: Flowchart Extension for Gravity Flow
Version: 0.1
Author: stevehenty
Author URI: http://gravityflow.com
License: GPL-3.0+
Text Domain: gravityflowflowchart
Domain Path: /languages

------------------------------------------------------------------------
Copyright 2017 Steven Henty S.L.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses.

*/

// Defines the current version of the Gravity Flow Flowchart Extension.
define( 'GRAVITY_FLOW_FLOWCHART_VERSION', '0.1' );

// Defines the minimum version of Gravity Forms required to run Gravity Flow Flowchart Extension.
define( 'GRAVITY_FLOW_FLOWCHART_MIN_GF_VERSION', '2.0' );

// After GF is loaded, load the add-on
add_action( 'gravityflow_loaded', array( 'Gravity_Flow_Flowchart_Bootstrap', 'load' ), 1 );

/**
 * Loads the Gravity Flow Flowchart Extension} Add-On.
 *
 * Includes the main class and registers it with GFAddOn.
 *
 * @since 0.1
 */
class Gravity_Flow_Flowchart_Bootstrap {

	/**
	 * Loads the required files.
	 *
	 * @since  0.1
	 * @access public
	 * @static
	 */
	public static function load() {

		// Requires the class file
		require_once( plugin_dir_path( __FILE__ ) . '/class-gravity-flow-flowchart.php' );

		// Registers the class name with GFAddOn
		GFAddOn::register( 'Gravity_Flow_Flowchart' );
	}
}

/**
 * Returns an instance of the Gravity_Flow_Flowchart class
 *
 * @since  0.1
 * @return Gravity_Flow_Flowchart An instance of the Gravity_Flow_Flowchart class
 */
function gravity_flow_flowchart() {
	return Gravity_Flow_Flowchart::get_instance();
}
