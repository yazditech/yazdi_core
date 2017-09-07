jQuery(document).ready(function ($) {
    $(document).on('keyup', '#gfms-user-search', function (event) {

        var $this = $(this);
        var gfms_user_name = $('#gfms-user-search').val();
        var current_deputy = $('#current_deputy').val();


        $(".user-item").remove();

        $(".preload").css("display", "block");

        $.ajax({
            url: data.ajax_url,
            type: 'post',
            dataType: 'json',
            data: {
                'action': 'get_user_names',
                'gfms_user_name': gfms_user_name,
                'current_deputy': current_deputy
            },
            success: function (response) {
                $(".user-item").remove();
                //alert(response.content);
                $(".preload").css("display", "none");

                $('#user-list').append(response.content);

            },
            error: function () {}

        });

    });

    // Loading First User List
    var $this = $(this);
    var gfms_user_name = $('#gfms-user-search').val();
    var current_deputy = $('#current_deputy').val();


    $(".user-item").remove();

    $(".preload").css("display", "block");

    $.ajax({
        url: data.ajax_url,
        type: 'post',
        dataType: 'json',
        data: {
            'action': 'get_user_names_first_loading',
            'gfms_user_name': gfms_user_name,
            'current_deputy': current_deputy
        },
        success: function (response) {
            $(".user-item").remove();
            //alert(response.content);
            $(".preload").css("display", "none");

            $('#user-list').append(response.content);

        },
        error: function () {}

    });
    //$.noConflict();

    $(".slider").click("click", function($) {
        var $this = jQuery(this);

        jQuery(".ym-msg").css("display", "block");
        jQuery(".ym-msg").find("p").remove();
        jQuery(".ym-msg").append("<p><img src='../wp-content/plugins/yazdi_essentials/admin/assets/img/preloader.gif' style='width: 26px;margin: -2px 10px 0 10px;'  /></p>");

        var gfms_file_address = $this.val();
        jQuery("#gfms_up_res_wrapper").remove();

//                $(".user-item").remove();

        jQuery.ajax({
            url: data.ajax_url,
            type: 'post',
            dataType: 'json',
            data: {
                'action': 'ym_save_settings',
                'gfms_file_address': gfms_file_address
            },
            success: function (response) {
//                        $(".user-item").remove();
                //alert(response.content);
                //jQuery(".ym-msg").css("display", "none");

                jQuery(".ym-msg").find("p").remove();
                jQuery(".ym-msg").append("<p>تنظیمات بروز شد.</p>");
                jQuery('#gfms_upload_result').append(response.content);

            },
            error: function () {}

        });

    });

    //$(".slider").click("click", function($) {
    //
    //    //alert('test');
    //});

});