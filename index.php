<?php
/*
Plugin Name: OU TIC TAC TOE
Plugin URI: http://oleksandrustymenko.com/tictactoe
Description: This is another tic tac toe game. Simply enter the [outictactoe] shortcode in a post or page.
Version: 1.0
Author: Oleksandr Ustymenko
Author URI: http://oleksandrustymenko.com
*/

/*  
	Copyright 2016 oleksandr87 (email:ustymenkooleksandrnew@gmail.com)

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

function outittactoe_file()
{
    wp_register_style('outictactoe-style', plugins_url('tictactoe.css', __FILE__));
	wp_enqueue_style('outictactoe-style');
    
    wp_enqueue_script( 'jquery');
    wp_localize_script( 'jquery', 'oumtttjaxcode', 
	array(
   'oumtttjaxcode_url'   => admin_url('admin-ajax.php'),
   'oumtttjaxcode_nonce' => wp_create_nonce('outttcreatenonce')
	));
    
}

add_action('wp_enqueue_scripts', 'outittactoe_file');

function outttstart()
{
	require_once( plugin_dir_path(__FILE__).'ttt_game.php');
	exit;
}

add_action( 'wp_ajax_nopriv_outttstart', 'outttstart');
add_action( 'wp_ajax_outttstart', 'outttstart');

function outtt_function()
{        
    require_once( plugin_dir_path(__FILE__).'ttt_welcome.php');  
}

add_shortcode('outictactoe', 'outtt_function');
?>