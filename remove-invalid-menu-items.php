<?php 
/**
*@package rimip
**/
/*
Plugin Name: Remove invalid menu items
Plugin URI: https://shojibkhan.com/remove-invalid-menu-items
Author: Shojib Khan
Author URI: https://shojibkhan.com
Version: 1.3.0
Description: Remove all the invalid menu items in one click.
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

if( !function_exists('add_action')){
	echo 'Sorry, you just can\'t call me directly.';
	die;
}

class rimip
{
	/*----------------------------------------*
	* Constructor
	*----------------------------------------*/
	function __construct(){

		add_filter( 'admin_enqueue_scripts', array( $this, 'my_menu_item' ) );

	}

	function my_menu_item() {
		//Enqueue js file
		wp_enqueue_script('remove-invalid-menu-items', plugin_dir_url(__FILE__).'/js/remove-invalid-menu-items.js');
	}

}

if( class_exists('rimip')){
	$rimip = new rimip();
}

//Activate 
register_activation_hook(__FILE__, array($rimip, 'active'));

//Deactivate
register_deactivation_hook(__FILE__, array($rimip, 'deactivate'));
