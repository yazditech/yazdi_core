<div id="wpbody" role="main">
    <div id="wpbody-content" aria-label="محتوای اصلی" tabindex="0">
        <div class="wrap wow fadeInRight">
            <h1 class="">پنل تنظیمات کتابخانه ها</h1>
            <div id="gwc-register-wrapper" class="wow fadeInRight">
                <div class="updated notice is-dismissible ym-msg" style="display: none;"></div>
                <div class="ym-wrapper">
                    <form action="<?php echo get_permalink(); ?>" name="gwc_register_frm" id="gwc_register_frm" method="POST" class="frmLogin pull-right">
                        <div class="frm-row ym-row">
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                            </label>
                            <label>انتخابگر تاریخ شمسی</label>
                        </div>
                        <div class="frm-row ym-row">
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                            </label>
                            <label>اعتبارسنجی جی کوئری</label>
                        </div>
                        <div class="frm-row ym-row">
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                            </label>
                            <label>اعتبار سنجی PHP</label>
                        </div>
                        <div class="frm-row ym-row">
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                            </label>
                            <label>پلاگین Chartjs</label>
                        </div>
                        <div class="frm-row ym-row">
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                            </label>
                            <label>پلاگین jdate</label>
                        </div>
                        <div class="frm-row ym-row">
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                            </label>
                            <label>کلاس sms</label>
                        </div>
                        <div class="frm-row ym-row">
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                            </label>
                            <label>کلاس ایمیل</label>
                        </div>
                        <div class="frm-row ym-row">
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round"></div>
                            </label>
                            <label>پلاگین jdate</label>
                        </div>
<!--                        <div class="frm-row">-->
<!--                            <button id="frm-register-submit" name="register-submit-btn"-->
<!--                                    class="button button-primary">ثبت اطلاعات</button>-->
<!--                        </div>-->
                        <?php wp_nonce_field('gwc_register_form', 'gwc_nonces'); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
//    new WOW().init();
</script>
<style>
    .update-nag {
        display: none;
    }
</style>