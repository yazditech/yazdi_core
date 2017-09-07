<?php
function ym_save_settings()
{

    $ym_settings_key= sanitize_text_field($_POST['ym_settings_key']);
    $ym_settings_value  = (sanitize_text_field($_POST['ym_settings_value']) == "checked") ? 1 : 0;

    ob_start();

//    echo "key:$ym_settings_key __ value:$ym_settings_value";

    update_option( $ym_settings_key, $ym_settings_value );

    $output_html = ob_get_clean();

    $result['content'] = $output_html;
    $result['ym_amib'] = 'asd';

    wp_die(json_encode($result));
}

add_action('wp_ajax_ym_save_settings', 'ym_save_settings');
add_action('wp_ajax_nopriv_ym_save_settings', 'ym_save_settings');