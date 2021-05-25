<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php foreach ($this->styles as $style):?>
        <link rel="stylesheet" href="<?=$style?>">
    <?php endforeach;?>
    <title>Admin-panel</title>
</head>
<body>
    <div class="page">

        <header class="header flex-sb">
            
            <div class="logo">
                <a href="<?=PATH?>" target="_blank">
                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/logo.svg" alt="logo">
                </a>
            </div>
            <div class="menu-burger">
                <a href="#">
                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/menu-burger.svg" alt="menu">
                </a>
            </div>
            
            <div class="search">
                <form class="search-form flex-sb" action="<?=PATH . \core\base\settings\Settings::get('routes')['admin']['alias']?>/search">
                    <a class="flex-sb" href="#">
                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/search.svg" alt="search">
                        <span class="search-form__text">Поиск:</span>
                    </a>
                    <input class="search-form__input" type="text">
                </form>
            </div>
            
            <div class="site-map site-map_screen">
                <a class="flex-sb" href="<?=PATH . \core\base\settings\Settings::get('routes')['admin']['alias']?>/createsitemap">
                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/sitemap.svg" alt="site-map">
                    <span class="site-map__text">Карта сайта</span>
                </a>
            </div>
            
            <div class="nav-head nav-head_screen">
                <a class="nav-head__link" href="#">
                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/icon-bell.svg" alt="bell">
                </a>
                <a class="nav-head__link" href="#">
                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/icon-help.svg" alt="bell">
                </a>
                <a class="nav-head__link" href="#">
                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/icon-service.svg" alt="bell">
                </a>
            </div>
            
            <div class="log-out">
                <a class="flex-sb" href="#">
                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/log-out.svg" alt="bell">
                </a>
            </div>

        </header>