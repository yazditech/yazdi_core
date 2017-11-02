<div id="wpbody" role="main">
    <div id="wpbody-content" aria-label="محتوای اصلی" tabindex="0">
        <div class="wrap wow fadeInRight">
            <h1 class="headline-text"><span class="dashicons
            dashicons-admin-settings"></span>پنل تنظیمات کتابخانه ها</h1>
            <div id="gwc-register-wrapper" class="wow fadeInRight">
                <div class="updated notice is-dismissible ym-msg" style="display: none;"></div>
                <div class="ym-wrapper">
                    <form action="" name="gwc_register_frm" id="gwc_register_frm" method="POST" class="frmLogin">

<!--                        AMIB -->
                        <div class="frm-row">
                            <div class="ym-row">
                                <label class="switch">
                                    <input type="checkbox" id="ym_amib" class="chbx" <?php echo (get_option('ym_amib') == 1) ? 'checked' : ''; ?>>
                                    <div class="slider round"></div>
                                </label>
                                <label>انتخابگر تاریخ شمسی</label>
                            </div>
                            <a href="#" class="ym-help" data-toggle="ym-amib-help"><span class="dashicons
                            dashicons-editor-help"></span></a>
                        </div>
                        <div id="ym-amib-help" class="ym-help-details">
                            <p><b>توضیحات</b></p>
                            <p>جهت
                                انتخاب تاریخ در فیلدها استفاده میشود. amib یکی از سبکترین کتابخانه‌ها در این زمینه می‌باشد.</p>

                            <p><b>نحوه استفاده</b></p>
                            <p>استفاده بصورت دستی که باید id یا کلاس هر تگ رو بهش بدیم:</p>
                            <xmp class="ym-codes">
                                <input type="text" id="pcalasd">
                                <script>
                                    ( function( $ ) {
                                        $.fn.persianCalendar = function(extra) {
                                            return this.each( function( index, element ) {
                                                var id = jQuery(element).attr("id");
                                                new AMIB.persianCalendar( id, extra );
                                            } );
                                        };
                                    })( jQuery );

                                </script>
                            </xmp>
                            <p><b>نحوه استفاده سریع</b></p>
                            <p>در
                                این حالت هر تگی که id داشته باشد که با date_ شروع شود به صورت خودکار به آن این قابلیت اضافه میگردد.</p>
                            <xmp class="ym-codes">
                                jQuery("input[id^=date_]").persianCalendar( {
                                initialDate: '1392-10-20',
                                defaultDate: '1392-10-20'
                                } );
                            </xmp>
                        </div>
<!--                        jQuery Validator (form)-->
                        <div class="frm-row">
                            <div class="ym-row">
                                <label class="switch">
                                    <input type="checkbox" id="ym_jq_validator" class="chbx" <?php echo (get_option('ym_jq_validator') == 1) ? 'checked' : ''; ?>>
                                    <div class="slider round"></div>
                                </label>
                                <label>اعتبارسازی فرم (jQuery Validator)</label>
                            </div>
                            <a href="#" class="ym-help" data-toggle="ym-jq-validator-help"><span class="dashicons
                            dashicons-editor-help"></span></a>
                        </div>
                        <div id="ym-jq-validator-help" class="ym-help-details">
                            <p><b>توضیحات</b></p>
                            <p>اعتبارسنجی فرم‌ها توسط جی‌کوئری</p>

                            <p><b>نحوه‌ی استفاده</b></p>
                            <p>اگراین کتابخانه در پنل غیرفعال باشد باید به صروت زیر اول دستی آنرا به صفحه اضافه و بعد از آن استفاده کنید:</p>
                            <p>اگر در پنل فعال باشد در همه‌ی صفحات بدون نیاز به لود اسکریپت ها میتوان از آن استفاده کرد.</p>
                            <xmp class="ym-codes">
                                <script src="< ?php echo YZES_URL ? >assets/js/jquery.validate.js"></script>
                                <script src="< ?php echo YZES_URL ? >assets/js/jqueryvalidation.org.js"></script>
                                <script>
                                    $("#gwme_register_frm").validate({
                                        rules: {
                                            captcha: {
                                                required: true,
                                                remote: "< ?php echo YZES_URL ?  >lib/captcha/process.php"
                                            },
                                            gwme_name: {
                                                required: true
                                            },
                                            gwme_title: {
                                                required: true
                                            },
                                            gwme_email: {
                                                email: true
                                            },
                                            gwme_mobile: {
                                                required: true,
                                                minlength: 11,
                                                maxlength: 11,
                                                number: true
                                            },
                                            gwme_date: {
                                                required: true
                                            }

                                        },
                                        messages: {
                                            captcha: "کد اشتباه است"
                                        }
                                    });

                                </script>
                            </xmp>
                        </div>

                        <div class="frm-row">
                            <div class="ym-row">
                                <label class="switch">
                                    <input type="checkbox" id="ym_gump" class="chbx" <?php echo (get_option('ym_gump') == 1) ? 'checked' : ''; ?>>
                                    <div class="slider round"></div>
                                </label>
                                <label>کلاس اعتبارسنج سمت سرور Gump</label>
                            </div>
                            <a href="#" class="ym-help" data-toggle="ym-gump-help"><span class="dashicons
                            dashicons-editor-help"></span></a>
                        </div>
                        <div id="ym-gump-help" class="ym-help-details">
                            <p><b>توضیحات</b></p>
                            <p>اعتبارسنجی فرم‌ها از طریق کلاس Gump در سمت سرور</p>

                            <p><b>نحوه استفاده</b></p>
                            <p>برای
                                استفاده باید یک نمونه از کلاس Gump بسازیم. حتما نام نمونه باید در کل پروژه یکتا باشد.</p>
                            <xmp class="ym-codes">
                                $gwme_validation_1 = new GUMP();
                                $gwme_validation_1->set_field_name('gwme_name', ' نام و نام خانوادگی ');
                                $gwme_validation_1->set_field_name('gwme_name', ' کد امنیتی ');

                                $is_valid = $gwme_validation_1->is_valid($_POST, array(
                                        'gwme_name' => 'required',
                                        'captcha' => 'required'
                                ));

                                // Check the Captcha Entered is True or False
                                if (strtolower($_SESSION['captcha_id']) == strtolower(sanitize_text_field($_POST['captcha'])))
                                  $gwme_captcha = true;
                                else
                                   $gwme_captcha = false;

                                // Set Wrong Message for Captcha
                                if ($is_valid === true && $gwme_captcha === false)
                                $is_valid = array("کد امنیتی اشتباه است");
                                else if ($is_valid === false && $gwme_captcha === false)
                                array_push($is_valid, "کد امنیتی اشتباه است");

                                if ( wp_verify_nonce($_POST['gwme_nonces'], 'gwme_register_form')
                                     && $is_valid === true
                                    ) {
                                        در صورتیکه اعتبارسنجی درست باشد
                                    }
                                وگرنه ارورها رو نمایش میدهیم
                                else if (is_array($is_valid)) {
                                    foreach ($is_valid as $val_error) {
                                        //Display Validation Errors
                                        echo '<div class="register-message error">' . $val_error . '</div>';
                                    }
                                }

                            </xmp>
                        </div>

                        <div class="frm-row">
                            <div class="ym-row">
                                <label class="switch">
                                    <input type="checkbox" id="ym_chartjs" class="chbx" <?php echo (get_option('ym_chartjs') == 1) ? 'checked' : ''; ?>>
                                    <div class="slider round"></div>
                                </label>
                                <label>ساخت نمودارها Chartjs 2.2</label>
                            </div>
                            <a href="#" class="ym-help" data-toggle="ym-chartjs-help"><span class="dashicons
                            dashicons-editor-help"></span></a>
                        </div>
                        <div id="ym-chartjs-help" class="ym-help-details">
                            <p><b>توضیحات</b></p>
                            <p>برای ساخت نمودارها به صروت گرافیکی از چارت‌جی‌اس استفاده می‌شود.</p>
                            <p><b>مثال‌های بیشتر</b></p>
                            <p><a href="http://www.chartjs.org/docs/">www.chartjs.org/docs</a></p>
                            <p><b>نحوه استفاده</b></p>
                            <xmp class="ym-codes">
                                <div style="width: 500px; height: 400px;">
                                    <canvas id="myChart" width="400" height="400"></canvas>
                                </div>
                                <script src="< ?php echo YZES_URL ? >lib/Chart.min.js"></script>
                                <script>
                                    var ctx = document.getElementById("myChart");
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                                            datasets: [{
                                                label: '# of Votes',
                                                data: [12, 19, 3, 5, 2, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero:true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </xmp>
                        </div>

                        <div class="frm-row">
                            <div class="ym-row">
                                <label class="switch">
                                    <input type="checkbox" id="ym_jdf" class="chbx" <?php echo (get_option('ym_jdf') == 1) ? 'checked' : ''; ?>>
                                    <div class="slider round"></div>
                                </label>
                                <label>مبدل تاریخ و زمان  2.60 jdf</label>
                            </div>
                            <a href="#" class="ym-help" data-toggle="ym-jdf-help"><span class="dashicons
                            dashicons-editor-help"></span></a>
                        </div>
                        <div id="ym-jdf-help" class="ym-help-details">
                            <p><b>توضیحات</b></p>
                            <p>توضیحات و مستندات در آدرس زیر</p>

                            <p><a href="http://jdf.scr.ir/rahnama/">jdf.scr.ir/rahnama</a></p>

                            <p><b>توجه</b></p>
                            <p>این تابع به صورت پیشفرض در وردپرس فارسی موجود هست ولی
                                با فعال کردن آن تداخلی ایجاد نمیشود. همچنین بهتر است که فعال باشد چرا که وابستگی به پلاگین وردپرس فارسی از بین میرود.
                            </p>
                        </div>

                        <div class="frm-row">
                            <div class="ym-row">
                                <label class="switch">
                                    <input type="checkbox" id="ym_sms" class="chbx" <?php echo (get_option('ym_sms') == 1) ? 'checked' : ''; ?>>
                                    <div class="slider round"></div>
                                </label>
                                <label>کلاس SMS</label>
                            </div>
                            <a href="#" class="ym-help" data-toggle="ym-sms-help"><span class="dashicons
                            dashicons-editor-help"></span></a>
                        </div>
                        <div id="ym-sms-help" class="ym-help-details">
                            <p><b>توضیحات</b></p>
                            <p>جهت ارسال پیامک</p>

                            <p><b>نحوه استفاده</b></p>
                            <p>یک
                                آبجکت از کلاس sms میسازیم و اطلاعات پنل را هم به متود سازنده آن ارسال میکنیم. در نهایت متود send را فراخوانی میکنیم.</p>
                            <p>همچنین
                                هر وب سرویس پیامکی پیکربندی و نوع اتصال متفاوتی دارد که باید کلاس را با توجه به آن تغییر داد.</p>
                            <xmp class="ym-codes">
                                $obj_yzes_sms = new YZES_SMS( 'username', '1234', '10001431', '09387520909','متن پیامک' );
                                echo $obj_yzes_sms->send();
                            </xmp>
                            <p><b>نحوه استفاده سریع</b></p>
                            <p>در
                                این حالت هر تگی که id داشته باشد که با date_ شروع شود به صورت خودکار به آن این قابلیت اضافه میگردد.</p>
                            <xmp class="ym-codes">
                                jQuery("input[id^=date_]").persianCalendar( {
                                initialDate: '1392-10-20',
                                defaultDate: '1392-10-20'
                                } );
                            </xmp>
                        </div>

                        <div class="frm-row">
                            <div class="ym-row">
                                <label class="switch">
                                    <input type="checkbox" id="ym_email" class="chbx" <?php echo (get_option('ym_email') == 1) ? 'checked' : ''; ?>>
                                    <div class="slider round"></div>
                                </label>
                                <label>کلاس ارسال ایمیل</label>
                            </div>
                            <a href="#" class="ym-help" data-toggle="ym-email-help"><span class="dashicons
                            dashicons-editor-help"></span></a>
                        </div>
                        <div id="ym-email-help" class="ym-help-details">
                            <p><b>نحوه استفاده</b></p>
                            <p>برای ارسال ایمیل باید یک فایل tpl داشته باشیم با استفاده از این فایل ابتدا متن و قالب ایمیل را میسازیم و در نهایت این قالب را به کلاس ایمیل ارسال میکنیم.</p>
                            <p>برای استفاده ابتدا فایل tpl خود را include کرده و بعد متن هایی که در فایل قالب flag گذاشتیم رو جایگزین میکنیم.</p>
                            <p>در نهایت با متود send_html_email ایمیل خود را ارسال میکنیم.</p>
                            <p>ما برای هر ایمیل خود قالب ها و تنظیمات خود را داریم که در این قسمت قابل تغییر هستند</p>

                            <xmp class="ym-codes">
                                include YZES_PATH . '/inc/class_yzes_email.php';
                                ob_start();
                                include Your_Email_Template_PATH . '/tpl/contact-email.php';
                                $email_template = ob_get_clean();

                                $email_template = str_replace(array('#title#', '#name#', '#date#'), array ($title, $name, $date), $email_template);
                                $obj_email = new YZES_Email();
                                $obj_email->send_html_email('from', 'to', 'title', $email_template);
                            </xmp>
                            <p>فایل قالب نمونه</p>
                            <xmp class="ym-codes">
                                <div style="width:500px">
                                    <table>
                                        <tr>
                                            <td>موضوع:</td>
                                            <td>#title#</td>
                                        </tr>
                                        <tr>
                                            <td>با سلام</td>
                                            <td>این یک ایمیل تست است برای #name#</td>
                                        </tr>
                                        <tr>
                                            <td>تاریخ</td>
                                            <td>#date#</td>
                                        </tr>
                                    </table>
                                </div>

                            </xmp>
                        </div>

                        <?php wp_nonce_field('gwc_register_form', 'gwc_nonces'); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
//    new WOW().init();

    jQuery('.ym-help').click( function() {
        var a = jQuery(this).attr("data-toggle");
        jQuery('#'+a).fadeToggle();
    });

//    jQuery('.chbx-toggle').click(function(){
//        var dd = jQuery(this).attr("checked");
//        alert(dd);
//    });

</script>
<style>
    .update-nag {
        display: none;
    }
</style>
