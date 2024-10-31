<?php 
/* register admin css and js */
function wrl_panel_style(){
    wp_enqueue_style('wrl-panel-login',WRL_INC_URL.'assest/css/login-register-admin.css');
    wp_enqueue_style('wrl-panel-color-picker',WRL_INC_URL.'assest/css/coloris.min.css');
}
add_action( 'admin_enqueue_scripts', 'wrl_panel_style' );
?>