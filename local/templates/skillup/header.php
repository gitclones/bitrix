<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();




?>
<html>
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?$APPLICATION->ShowHead()?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/local/templates/skillup/css.css" type="text/css" />
    <link rel="icon" type="image/png" href="/local/templates/skillup//images/favicon/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="/local/templates/skillup/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/local/templates/skillup/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/local/templates/skillup/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/local/templates/skillup/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/local/templates/skillup/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/local/templates/skillup/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/local/templates/skillup/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/local/templates/skillup/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/local/templates/skillup/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/local/templates/skillup/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/local/templates/skillup/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/local/templates/skillup/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/local/templates/skillup/images/favicon/favicon-16x16.png">
    <meta name='description' content=''/>
    <meta name='keywords' content=''/>

</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="header">
    <div class="header_wrapper">
        <div class="container">
            <div class="header_holder">
                <div class="logos">
                    <a href="index.php">
                            <span class="logo_img">
                            <img src="/local/templates/skillup/images/logo.jpg" alt="">
                            </span>
                        <span class="logo_holder">
                            <span class="logo_sup">SKILLOGRAM</span>
                            </span>
                    </a>
                </div>
                <div class="menu">
                    <ul class="menu_holder">
                        <?php
                        if (isset($_SESSION['user_name'])) {
                            echo '<li class="item"><a href="/" class="item_inner_button"><span>as '. $_SESSION['user_name'] . '</span></a></li>';
                        } else {
                            echo '<li class="item"><a href="index.php?action=login&auth" class="item_inner"><span>Вход</span></a></li>';
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['user_name'])) {
                            echo '<li class="item"><a href="index.php?action=logoff" class="item_inner_button"><span>Выход</span></a></li>';
                        } else {
                            echo '<li class="item"><a href="index.php?action=login&register" class="item_inner_button"><span>Регистрация</span></a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="search">
                    <form action="/search" method="get">
                        <div class="field">
                            <button type="submit" class="button">
                                <img src="/local/templates/skillup/images/search.jpg" alt="">
                            </button>
                            <div class="wrap_input">
                                <input type="text" name="search" class="input_field" placeholder="Search Here...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="menu">
                    <ul class="menu_holder">
                        <li class="item"><a href="/" class="item_inner"><span>По рейтингу</span></a></li>
                        <li class="item"><a href="/" class="item_inner"><span>Случайно</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>