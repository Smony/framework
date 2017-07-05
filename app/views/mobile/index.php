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
                                <?php if(isset($_SESSION['error_us_pass'])): ?>
                                <a class="swiper_read_more"><?=$_SESSION['error_us_pass'];?></a>
                                <?php elseif(isset($_SESSION['error_us_name'])): ?>
                                    <a class="swiper_read_more"><?=$_SESSION['error_us_name'];?></a>
                                <?php endif; ?>
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

<!-- Register Popup -->
<div class="popup popup-signup">
    <div class="content-block-login">
        <h4>РЕЄСТРАЦІЯ</h4>
        <div class="form_logo"><img src="/mobile/img/small-logo.png" alt="" title="" /></div>
        <div class="loginform">
            <form action="/mobile/singup" method="POST" id="register" enctype="multipart/form-data">
                <div class="list-block">
                    <ul class="posts">
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <input type="text" name="nick" value="" maxlength=51
                                           class="form_input required" placeholder="Псевдонім"/>
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <input type="text" name="email" value="" autocomplete="off"
                                           class="form_input required" placeholder="email" />
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <input type="password" id="password" name="password" value="" autocomplete="off"
                                           maxlength="255" class="form_input required" placeholder="Пароль"
                                    />
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <input type="password" name="rep_password" value="" autocomplete="off" maxlength="255"
                                           class="form_input required" placeholder="Повторіть пароль" />
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <input type="text" name="realname" value="" autocomplete="off"
                                           class="form_input required" placeholder="ПІБ"/>
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <input type="text" name="phone" id="phone" value="" autocomplete="off"
                                           class="form_input required" placeholder="(000) 000-00-00"/>
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <input type="text" name="b_date" id="b_date" value=""
                                           class="form_input required" placeholder="дд-мм-рррр"/>
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <input type="text" name="city" id="city" value=""
                                           class="form_input required" placeholder="Місто (українською)"
                                    />
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry">
                                    <label>Стать:</label>
                                    <br>
                                    <label class="label-radio item-content" style="width:45%; float: left;">
                                        <input type="radio" name="sez" value="male" checked="checked">
                                        <div class="item-inner">
                                            <div class="item-title">Чоловiча</div>
                                        </div>
                                    </label>

                                    <label class="label-radio item-content" style="width:45%; float: left;">
                                        <input type="radio" name="sez" value="female">
                                        <div class="item-inner">
                                            <div class="item-title">Жіноча</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry" style="margin-top: 15px;">
                                    <label>Чи публікувалися десь? :</label>
                                    <textarea name="public" class="form_textarea" rows="" cols=""></textarea>
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry" style="margin-top: 15px;">
                                    <label>Про себе:</label>
                                    <textarea name="aboutme" class="form_textarea" rows="" cols=""></textarea>
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry" style="margin-top: 15px;">
                                    <label>Фото (тільки JPG):</label>
                                    <input type="file" name="photo"  class="form_input required" style="width: 86%;" value=""/>
                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry" style="margin-top: 15px;">

                                    <label>ДОДАТКОВІ МОЖЛИВОСТІ :</label>

                                    <label class="label-checkbox item-content" style="width: 93%;">
                                        <input type="checkbox" name="send_club" value=''>
                                        <div class="item-media">
                                            <i class="icon icon-form-checkbox"></i>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Отримувати вірші членів клубу</div>
                                        </div>
                                    </label>

                                    <label class="label-checkbox item-content" style="width: 93%;">
                                        <input type="checkbox" name="send_news" value=''>
                                        <div class="item-media">
                                            <i class="icon icon-form-checkbox"></i>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Отримувати новини</div>
                                        </div>
                                    </label>

                                    <label class="label-checkbox item-content" style="width: 93%;">
                                        <input type="checkbox" name="send_comments" value=''>
                                        <div class="item-media">
                                            <i class="icon icon-form-checkbox"></i>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Отримувати коментарі щодо своїх віршів</div>
                                        </div>
                                    </label>

                                    <label class="label-checkbox item-content" style="width: 93%;">
                                        <input type="checkbox" name="send_email" value=''>
                                        <div class="item-media">
                                            <i class="icon icon-form-checkbox"></i>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Надсилати сповіщення на e-mail</div>
                                        </div>
                                    </label>

                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry" style="margin-top: 15px;">

                                    <label>АНКЕТА КЛУБУ:Звідки ви дізналися про сайт?</label>
                                    <br>
                                    <label class="label-radio item-content" style="width:45%; float: left;">
                                        <input type="radio" name="anketa" value="З Інтернету">
                                        <div class="item-inner">
                                            <div class="item-title">З Інтернету</div>
                                        </div>
                                    </label>

                                    <label class="label-radio item-content" style="width:45%; float: left;">
                                        <input type="radio" name="anketa" value="Від друзів">
                                        <div class="item-inner">
                                            <div class="item-title">Від друзів</div>
                                        </div>
                                    </label>

                                    <label class="label-radio item-content" style="width:45%; float: left;">
                                        <input type="radio" name="anketa" value="З книг">
                                        <div class="item-inner">
                                            <div class="item-title">З книг</div>
                                        </div>
                                    </label>

                                    <label class="label-radio item-content" style="width:45%; float: left;">
                                        <input type="radio" name="anketa" value="З реклами">
                                        <div class="item-inner">
                                            <div class="item-title">З реклами</div>
                                        </div>
                                    </label>

                                </div>
                            </div>
                        </li>
                        <li class="swipeout">
                            <div class="swipeout-content item-content">
                                <div class="post_entry" style="margin-top: 15px;">
                                    <label class="label-checkbox item-content" style="width: 93%;">
                                        <input type="checkbox" name="agree" value='1' />
                                        <div class="item-media">
                                            <i class="icon icon-form-checkbox"></i>
                                        </div>
                                    </label>
                                    <span>Натискаючи кнопку «Надіслати», я підтверджую, що вказана вище інформація є достовірною, а також погоджуюсь з Правилами публікації та користування сайтом</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <div id="loadMore"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                    <div id="showLess" class="close_icon"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                </div>

                <input type="submit" name="do_singup" class="form_submit" id="do_singup" value="НАДІСЛАТИ" />
            </form>
        </div>
        <div class="close_loginpopup_button"><a href="#" class="close-popup"><img src="/mobile/img/icons/white/menu_close.png" alt="" title="" /></a></div>
    </div>
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
<script>
    $().ready(function() {
        $.validator.methods.email = function( value, element ) {
            //	console.log(element);
            return this.optional( element ) || /^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z.]{2,}$/i.test( value );
        }

        $("#register").validate({
            rules: {
                nick: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 6
                },
                rep_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
                realname: {
                    required: true,
                    minlength: 10
                },
                phone: {
                    required: true,
                    minlength: 15

                },
                b_date: {
                    required: true,
                    minlength: 10
                },
                city: {
                    required: true
                },
                photo: {
                    required: true
                },
                agree: {
                    required: true
                }
            },
            messages: {
                nick: {
                    required: "Будь ласка, заповніть поле 'Псевдонім'",
                    minlength: "Мінімальний розмір - 3 символи",
                    maxlength: "Максимальний розмір - 50 символів"
                },
                email: {
                    required: "Будь ласка, вкажіть Ваш email",
                    email: "Невірний формат email"
                },
                password: {
                    required: "Будь ласка, заповніть поле 'Пароль'",
                    minlength: "Мінімальний розмір - 6 символи"
                },
                rep_password: {
                    required: "Будь ласка, повторіть Ваш пароль",
                    minlength: "Мінімальний розмір - 6 символи",
                    equalTo: "Введені паролі не співпадають"
                },
                realname: {
                    required: "Будь ласка, вкажіть Ваше повне ім'я",
                    minlength: "Мінімальний розмір - 10 символів"
                },
                phone: {
                    required: "Будь ласка, вкажіть Ваш телефон",
                    minlength: "Мінімальний розмір - 10 символів"
                },
                b_date: {
                    required: "Будь ласка, вкажіть дату Вашого народження",
                    minlength: "Ви невірно ввели дату народження",
                },
                city: {
                    required: "Будь ласка, вкажіть місце Вашого проживання"
                },
                photo: {
                    required: "Будь ласка, загрузiть Фото"
                }
            }
        });
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#b_date').mask('00-00-0000');
        $('#phone').mask('(000) 000-00-00');
    });
</script>