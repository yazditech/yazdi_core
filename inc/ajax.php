<?php
function ym_save_settings() {
    ob_start();
    $gfms_file_address = sanitize_text_field($_POST['gfms_file_address']);
    echo '<div id="gfms_up_res_wrapper">';

//    echo $gfms_file_address;

//    echo "<div class='gfms-msg-upload'>فایل آپلود شد</div>";


    echo '<div class="updated notice is-dismissible wow flip" style="width: 300px;"><p>'.var_dump($_FILES['gfms_file_address']).'</p></div>';
    echo '</div>';

    $output_html = ob_get_clean();

    $result['content'] = $output_html;

    wp_die(json_encode($result));
}

add_action('wp_ajax_ym_save_settings', 'ym_save_settings');
add_action('wp_ajax_nopriv_ym_save_settings', 'ym_save_settings');