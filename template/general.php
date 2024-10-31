<div class="wrapper">
    <div class="pannel-setting">
    <h1><?php _e('Advanced WordPress Login and Registration Plugin Settings', 'wrlstyle' ) ?></h1>
        <form method="post" action="" id="wrl-setting" onsubmit="return validationallform()">
        <table class="form-table">
            <tr valign="top">
            <th scope="row"><?php _e( 'Background image link:', 'wrlstyle' ) ?></th>
            <td><input type="text" name="background-url" value="<?php echo esc_html( get_option('wrl_bg_url') ) ?>" placeholder="<?php _e( 'Enter your background image link','wrlstyle' ) ?>"/></td>
            </tr>
            <tr valign="top">
            <th scope="row"><?php _e( 'Logo image link above the login form:', 'wrlstyle' ) ?></th>
            <td><input type="text" name="logo-url" value="<?php echo esc_html(get_option('wrl_register_logo_url')) ?>" placeholder="<?php _e( 'Enter the link to your logo image','wrlstyle' ) ?>"/></td>
            </tr>
            <tr valign="top">
            <th scope="row"><?php _e( 'Text above the registration form:', 'wrlstyle' ) ?></th>
            <td><input type="text" name="register-top-text" value="<?php echo esc_html(get_option('wrl_register_top_text')) ?>" placeholder="<?php _e( 'Enter the text','wrlstyle' ) ?>"/></td>
            </tr>
            <tr valign="top">
            <th scope="row"><?php _e( 'Buttons color:', 'wrlstyle' ) ?></th>
            <td><input type="text" data-coloris name="btn-register-color" value="<?php echo esc_html( get_option('wrl_register_button_color') ) ?>" /></td>
            </tr>
            <tr valign="top">
            <th scope="row"><?php _e( 'Color of the notification box above the forms:', 'wrlstyle' ) ?></th>
            <td><input type="text" data-coloris name="msg-register-color" value="<?php echo esc_html( get_option('wrl_msg_register_color') ) ?>" /></td>
            </tr>
        </table>
            <div id="wrl-error-prnt"></div>
            <button type="submit" name="lg-reg-set-Setting" class="button-login-panel"><?php _e( 'Save settings', 'wrlstyle' ) ?></button>
        </form>
    </div>
</div>
<?php wp_enqueue_script( 'wrl-panel-setting', WRL_INC_URL.'assest/js/valid.js', false, true );
wp_enqueue_script( 'wrl-panel-setting-color', WRL_INC_URL.'assest/js/coloris.min.js', false, true );
?>