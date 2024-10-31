<?php 
/* change logo url */
function wrl_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wrl_login_logo_url' );
/* change logo name */
function wrl_login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'wrl_login_logo_url_title' );
/* change register text */
add_filter( 'login_init',
    function(){
      add_filter( 'gettext', 'wrl_change_login_text', 99, 3 );
    }
);
function wrl_change_login_text( $translated_text, $untranslated_text, $domain )
{
    $old = "Register For This Site";
    $new = get_option('wrl_register_top_text');

    if ( $untranslated_text === $old)
    {         
        $translated_text = $new;
        remove_filter( current_filter(), __FUNCTION__ );
    }
    return $translated_text;
}
function get_wrl_bg_login(){
    $bg_url_wrl = get_option('wrl_bg_url');
    return $bg_url_wrl ? $bg_url_wrl : WRL_INC_URL."assest/img/bg.jpg";
}
function get_wrl_logo_login(){
    $logo_url_wrl = get_option('wrl_register_logo_url');
    return $logo_url_wrl ? $logo_url_wrl : get_site_url()."/wp-admin/images/wordpress-logo.svg?ver=20131107";
}
function get_wrl_color_login(){
    $color_wrl_btn = get_option('wrl_register_button_color');
    return $color_wrl_btn ? $color_wrl_btn : "#545cfa";
}
function get_wrl_msg_login(){
    $color_wrl_msg = get_option('wrl_msg_register_color');
    return $color_wrl_msg ? $color_wrl_msg : "#545cfa";
}
/* register user css and js */
function wrl_login_register_style(){ 
    $bg_url = get_wrl_bg_login();
    $logo_url = get_wrl_logo_login();
    $color_login=get_wrl_color_login();
    $msg_color=get_wrl_msg_login();
    { ?>
        <style type="text/css">
    body.login {
        background: url(<?php echo esc_html( $bg_url ) ?>) no-repeat center top !important;
    }
    #login h1 a, .login h1 a {
            background-image: url(<?php echo esc_html(  $logo_url ) ?>);
    }
    .message.register,.message {
        background-color: <?php echo esc_html( $msg_color ) ?> !important;
    }
    .login .button-primary,.login .button-primary:hover,.login .button-primary:active,.login .button-primary:focus {
        background: <?php echo esc_html( $color_login ) ?> !important;
    }
    .wp-core-ui .button-secondary{
        color: <?php echo esc_html( $color_login ) ?> !important;
    }
    .login form input[type="radio"]:checked, .login form input[type="checkbox"]:checked {
        background: <?php echo esc_html( $color_login ) ?> !important;
    }
</style>
    <?php }
    wp_register_style('wrl-login-register-login',WRL_INC_URL.'assest/css/login-register.css');
    wp_enqueue_style('wrl-login-register-login');
}
add_action( 'login_enqueue_scripts', 'wrl_login_register_style' );