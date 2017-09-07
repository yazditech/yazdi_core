jQuery(document).ready(function ($) {

    jQuery(".chbx").click("click", function($) {
        var $this = jQuery(this);

        jQuery(".ym-msg").css("display", "block");
        jQuery(".ym-msg").find("p").remove();
        jQuery(".ym-msg").append("<p><img src='../wp-content/plugins/yazdi_essentials/admin/assets/img/preloader.gif' style='width: 26px;margin: -2px 10px 0 10px;'  /></p>");

        var ym_key = $this.attr('id');
        var ym_value = jQuery($this).attr("checked");

        jQuery.ajax({
            url: data.ajax_url,
            type: 'post',
            dataType: 'json',
            data: {
                'action': 'ym_save_settings',
                'ym_settings_key': ym_key,
                'ym_settings_value': ym_value
            },

            success: function (response) {
                //alert(response.content);
                jQuery(".ym-msg").find("p").remove();
                jQuery(".ym-msg").append("<p>تنظیمات بروز شد.</p>");

            },
            error: function () {}

        });

    });

});