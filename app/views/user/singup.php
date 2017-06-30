<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>

<div class="container">
    <div class="jumbotron">
        <button><a href="/user/singin">Ввойти</a></button>
        <h4>РЕЄСТРАЦІЯ</h4>
        <?php if(!empty($errors)): ?>
            <?php echo $errors; ?>
        <?php endif; ?>
        <form action="/user/singup" method="POST" enctype="multipart/form-data">
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
                                       class="form_input required" placeholder="Телефон" maxlength="50"/>
                            </div>
                        </div>
                    </li>
                    <li class="swipeout">
                        <div class="swipeout-content item-content">
                            <div class="post_entry">
                                <input type="text" name="b_date" id="b_date" value=""
                                       class="form_input required" placeholder="Дата народження"/>
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


                </ul>

                <div class="clear"></div>
                <div id="loadMore"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                <div id="showLess" class="close_icon"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
            </div>

            <button class="btn btn-default" name="do_singup" id="do_singup">Надіслати</button>
        </form>




    </div>
</div>
