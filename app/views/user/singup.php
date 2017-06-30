<div class="container">
    <div class="jumbotron">
        <button><a href="/user/singin">Ввойти</a></button>
        <h4>РЕЄСТРАЦІЯ</h4>
        <code><?= $errors;?></code>
        <form action="/user/singup" method="POST" enctype="multipart/form-data">
            <div class="list-block">
                <ul class="posts">
                    <li class="swipeout">
                        <div class="swipeout-content item-content">
                            <div class="post_entry">
                                <input type="text" name="nick" value="" maxlength=51
                                       class="form_input required" placeholder="Псевдонім" required/>
                            </div>
                        </div>
                    </li>
                    <li class="swipeout">
                        <div class="swipeout-content item-content">
                            <div class="post_entry">
                                <input type="text" name="email" value="" autocomplete="off"
                                       class="form_input required" placeholder="email" required/>
                            </div>
                        </div>
                    </li>
                    <li class="swipeout">
                        <div class="swipeout-content item-content">
                            <div class="post_entry">
                                <input type="password" id="password" name="password" value="" autocomplete="off"
                                       maxlength="255" class="form_input required" placeholder="Пароль"
                                       required/>
                            </div>
                        </div>
                    </li>
                    <li class="swipeout">
                        <div class="swipeout-content item-content">
                            <div class="post_entry">
                                <input type="password" name="rep_password" value="" autocomplete="off" maxlength="255"
                                       class="form_input required" placeholder="Повторіть пароль" required/>
                            </div>
                        </div>
                    </li>



                </ul>

                <div class="clear"></div>
                <div id="loadMore"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                <div id="showLess" class="close_icon"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
            </div>

            <input type="submit" name="do_singup" class="form_submit" id="submit" value="Надіслати"/>
        </form>




    </div>
</div>
