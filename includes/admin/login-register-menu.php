<?php 
    function wrl_menus(){
        add_menu_page(
            __( 'WordPress Login Style Editing Plugin Settings', 'wrlstyle' ),
            __( 'login style', 'wrlstyle' ),
            'manage_options',
            'wrl_setting',
            'wrl_tpl_content',
            'dashicons-admin-appearance'
        );
    }
    add_action('admin_menu','wrl_menus');
    function wrl_tpl_content(){
        if(isset($_POST['lg-reg-set-Setting']) && current_user_can('administrator')){
            $bg_url = sanitize_text_field($_POST['background-url']);
            $login_logo = sanitize_text_field($_POST['logo-url']);
            $register_top_text =sanitize_text_field($_POST['register-top-text']);
            $register_button_color =sanitize_text_field($_POST['btn-register-color']);
            $msg_register_color =sanitize_text_field($_POST['msg-register-color']);
            if(isset($bg_url)){
                update_option('wrl_bg_url',$bg_url);
            }
            if(isset($login_logo)){
                update_option('wrl_register_logo_url',$login_logo);
            }
            if(isset($register_top_text)){
                update_option('wrl_register_top_text',$register_top_text);
            }
            if(isset($register_button_color)){
                update_option('wrl_register_button_color',$register_button_color);
            }
            if(isset($msg_register_color)){
                update_option('wrl_msg_register_color',$msg_register_color);
            }
        }

        include WRL_INC_TPL.'/general.php';
    }
?>