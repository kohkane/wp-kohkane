<?php
/*
Plugin Name: Kohkane
Description: A plugin that does stuff.
Author: Team Kohkane
Version: 0.0.1
Author URI: https://kohkane.com
License: GPL2

MWD Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

MWD Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MWD Plugin. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.
*/

defined( 'ABSPATH' ) or die( 'Nothing to see here, move along please...' );
// require_once plugin_dir_path( __FILE__ ) . '/inc/class.rest-api.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/class.settings-api.php';
require_once plugin_dir_path( __FILE__ ) . '/admin/settings.php';

class Kohkane
{
  public $plugin_name;

	function __construct() {
    $this->plugin_name = plugin_basename( __FILE__ );
    add_action( 'wp_enqueue_scripts', array( $this, 'add_scripts' ) );
    add_filter( "plugin_action_links_$this->plugin_name", array( $this, 'settings_link') );
	}

	function activate() {
	}

	function deactivate() {
	}

	public function add_scripts() {
    // wp_register_script( 'font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", null, null);
    // wp_register_script( 'matchheight', "https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js", ['jquery'], '', true );
    // wp_register_script( 'kohkane', plugin_dir_url( __FILE__ ) . 'assets/dist/build.js', '', '', true );
	}

  public function settings_link( $links ) {
    array_push($links, '<a href="admin.php?page=kohkane_plugin">Settings</a>');
    return $links;
  }
}

if ( class_exists( 'Kohkane' ) ) {
  $kohkane = new Kohkane();
}

// Plugin activation
register_activation_hook( __FILE__, array($kohkane, 'activate') );