<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" href="/mobile/images/apple-touch-icon.png" />
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="apple-touch-startup-image-640x1096.png">

    <?php vendor\core\base\View::getMeta();?>

    <link rel="stylesheet" href="/mobile/css/framework7.css">
    <link rel="stylesheet" href="/mobile/style.css">
    <link rel="stylesheet" href="/mobile/css/colors/red.css">
    <link type="text/css" rel="stylesheet" href="/mobile/css/swipebox.css" />
    <link type="text/css" rel="stylesheet" href="/mobile/css/animations.css" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

</head>
<body id="mobile_wrap">
<div class="statusbar-overlay"></div>
<div class="panel-overlay"></div>
<?php if ($user):?>
<!-- LEFT -->
<div class="panel panel-left panel-cover">
    <div class="user_login_info">
        <div class="user_thumb">
            <?php if(!empty($user->photo)): ?>
                <img src="/mobile/img/smony.jpg" alt="" title=""/>
            <?php elseif(empty($user->photo)): ?>
                <img src="/mobile/img/author_<?=$user['sez']?>.gif" alt="" title=""/>
            <?php endif; ?>
            <div class="user_details">
                <p>Ласкаво просимо, <span><?=$user->nick?></span></p>
            </div>
            <div class="user_social">
                <form action="mobile/logout" method="post">
                    <button type="submit" class="btn_exit"><i class="fa fa-sign-out" aria-hidden="true" style="font-size: 35px;"></i></button>
                </form>
            </div>
        </div>

        <nav class="user-nav">
            <ul>
                <li><a href="author.php?id=parent_id" class="close-panel"><i class="fa fa-home" aria-hidden="true"></i><p>39</p></a></li>

                <li><a href="favorite.php" class="close-panel"><i class="fa fa-gratipay" aria-hidden="true"></i><p>233</p></a></li>

                <li><a href="profile.php" class="close-panel"><i class="fa fa-pencil-square" aria-hidden="true"></i><p>40</p></a></li>

<!---->
<!--                    <img src="/img/!.gif" alt="" width="12" height="13" border="0" align="absmiddle"> <a href="/alert.php"><strong style="color:#dc143c;">noread_alert 898</strong></a><br><br>-->
<!--<!---->
<!--<!--                    <li><a href="sender.php?folder=incomming" class="close-panel"><i class="fa fa-reply" aria-hidden="true"></i><p>389</p><strong class="green">noread</strong></a></li>-->
<!---->
<!---->
<!--                    <li><a href="sender.php?folder=incomming" class="close-panel"><i class="fa fa-reply" aria-hidden="true"></i><p>389</p></a></li>-->


                <li><a href="sender.php?folder=outcomming" class="close-panel"><i class="fa fa-share" aria-hidden="true"></i><p>390</p></a></li>

                <li><a href="sender_make.php?action=new" class="close-panel"><i class="fa fa-envelope" aria-hidden="true"></i><p>391</p></a></li>


                <hr style="background: #932b40; border: 1px solid #8d291d;">

                <!-- menu -->
                <li><a href="usrpoemsadm.php" class="close-panel"><i class="fa fa-plus-square" aria-hidden="true"></i><p>41</p></a></li>

                <li><a href="login.php" class="close-panel"><i class="fa fa-newspaper-o" aria-hidden="true"></i><p>42</p></a></li>

                <li><a href="usrcomments.php" class="close-panel"><i class="fa fa-commenting" aria-hidden="true"></i><p>43</p></a></li>

                <li><a href="mycomments.php" class="close-panel"><i class="fa fa-comments" aria-hidden="true"></i><p>234</p></a></li>

                <li><a href="dnevnikview.php?id=parent_id" class="close-panel"><i class="fa fa-book" aria-hidden="true"></i><p>190</p></a></li>

                <li><a href="dadmin.php" class="close-panel"><i class="fa fa-address-book" aria-hidden="true"></i><p>191</p></a></li>

                <li><a href="photoalbum_user.php?userid=parent_id" class="close-panel"><i class="fa fa-camera" aria-hidden="true"></i><p>235</p></a></li>

                <li><a href="photoalbum_edit.php" class="close-panel"><i class="fa fa-picture-o" aria-hidden="true"></i><p>236</p></a></li>

                <li><a href="wblist.php" class="close-panel"><i class="fa fa-black-tie" aria-hidden="true"></i><p>363</p></a></li>

            </ul>
        </nav>


    </div>
</div>
<?php endif;?>
<?php echo $content; ?>

<script type="text/javascript" src="/mobile/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="/mobile/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/mobile/js/framework7.js"></script>
<script type="text/javascript" src="/mobile/js/my-app.js"></script>
<script type="text/javascript" src="/mobile/js/jquery.swipebox.js"></script>
<script type="text/javascript" src="/mobile/js/email.js"></script>
<?php foreach ($scripts as $script){echo $script;} ?>
</body>
</html>