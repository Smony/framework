<div class="views">
    <div class="view view-main">
        <div class="pages  toolbar-through">
            <div data-page="index" class="page homepage">
                <div class="page-content">
                    <!-- Slider -->
                    <div class="swiper-container swiper-init" data-effect="slide" data-direction="horizontal" data-pagination=".swiper-pagination">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/mobile/img/logo.png" alt="" title="" style="margin-top:20%;width:200px;">
                                <br />
                            </div>
                            <!-- TWO SWIPE-SLIDER -->
                            <div class="swiper-slide swiper-slide-two" style="background: #fff;">
                                <div id="pages_maincontent">

                                    <h2 class="page_title"></h2>

                                    <div class="page_content">

                                        <blockquote>

                                        </blockquote>

                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/mobile/img/logo.png" alt="" title="" style="margin-top:20%;width:200px;">
                                <br />
                                <a href="about.html" class="swiper_read_more">slide down to see more</a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Toolbar-->
        <div class="toolbar">
            <div class="toolbar-inner">
                <ul class="toolbar_icons">
                    <?php if ($user):?>
                    <li><a href="#" data-panel="left" class="open-panel"><img src="/mobile/img/icons/white/user.png" alt="" title="" /> </a></li>
                    <?php elseif(!$user):?>
                    <li><a href="#" data-popup=".popup-login" class="open-popup"><img src="/mobile/img/icons/white/user.png" alt="" title="" /></a></li>
                    <?php endif;?>
                    <li>
                        <a href="register.php">
                            <img src="/mobile/img/icons/white/photos.png" alt="" title="" />
                        </a>
                    </li>
                    <li class="menuicon">
                        <a href="menu.php">
                            <img src="/mobile/img/icons/white/menu.png" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="blog.html">
                            <img src="/mobile/img/icons/white/blog.png" alt="" title="" />
                        </a>
                    </li>
                    <li>
                        <a href="#" data-panel="right" class="open-panel">
                            <img src="/mobile/img/icons/white/contact.png" alt="" title="" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- Login Popup -->
<div class="popup popup-login">
    <div class="content-block-login">
        <h4>ВХІД ДЛЯ ЧЛЕНІВ КЛУБУ</h4>
        <div class="form_logo"><img src="/mobile/img/small-logo.png" alt="" title="" /></div>
        <div class="loginform">
            <form id="singinform" method="post" action="/mobile/singin">
                <input type="text" name="email" value="" class="form_input required" placeholder="e-mail"/>
                <input type="password" name="password" value="" class="form_input required" placeholder="пароль"/>
                <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">забули пароль?</a></div>
                <input type="submit" name="do_singin" class="form_submit" id="submit" value="УВІЙТИ" />
            </form>
            <div class="signup_bottom">
                <p>ласкаво просимо до нашого клубу!</p>
                <a href="#" data-popup=".popup-signup" class="open-popup">РЕЄСТРAЦІЯ</a>
            </div>
        </div>
    </div>
    <div class="close_loginpopup_button"><a href="#" class="close-popup"><img src="/mobile/img/icons/white/menu_close.png" alt="" title="" /></a></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
<script>
    $().ready(function() {
        $.validator.methods.email = function( value, element ) {
            //	console.log(element);
            return this.optional( element ) || /^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z.]{2,}$/i.test( value );
        }

        $("#singinform").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                email: {
                    required: "Будь ласка, вкажіть Ваш email",
                    email: "Невірний формат email"
                },
                password: {
                    required: "Будь ласка, заповніть поле 'Пароль'",
                    minlength: "Мінімальний розмір - 6 символи"
                }
            }
        });
    });
</script>