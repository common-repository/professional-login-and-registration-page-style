<?php 
/*
     * Plugin Name:       Professional login and registration page style
     * Plugin URI:        https://wordpress.org/plugins/professional-login-and-registration-page-style/
     * Description:       Advanced editing of WordPress membership form and login form
     * Version:           1.1
     * Requires at least: 5.2
     * Requires PHP:      7.2
     * Author:            Sajjad Dehghanian
     * Author URI:        https://graphwp.ir/
     * License:           GPL v2 or later
     * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
     * Text Domain:       wrlstyle 
     * Domain Path:       /languages
     * Copyright 2022  Sajjad Dehghanian (email : dghn.sajjad83@gmail.com)
        This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
        This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of Medical Design or Companies design FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
        You should have received a copy of the GNU General Public License
        along with this program; if not, write to the Free Software
        Foundation, Inc., Shahrood, Semnan , IRAN
 */
define('WRL_INC_DIR', plugin_dir_path(__FILE__));
define('WRL_INC_URL', plugin_dir_url(__FILE__));
define('WRL_INC_INC', WRL_INC_DIR . 'includes');
define('WRL_INC_TPL', WRL_INC_DIR . 'template');
include WRL_INC_INC.'/user/functions.php';
if(is_admin()){
    /* register textdomain */
    function wrl_load_textdomain() {
        //load_plugin_textdomain( 'wrlstyle', false, plugin_dir_url(__DIR__).'languages/');
        load_plugin_textdomain( 'wrlstyle', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }
    add_action('plugins_loaded', 'wrl_load_textdomain',0);
    include WRL_INC_INC.'/admin/functions.php';
    include WRL_INC_INC.'/admin/login-register-menu.php';
}
?>