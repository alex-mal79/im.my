<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($this->styles as $style):?>
        <link rel="stylesheet" href="<?=$style?>">
    <?php endforeach;?>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>TEST Shop</title>
</head>
<body>
<!-- Шапка -->
<header>
    <div class="wrap wrap-header">
        <!-- Логотип -->
        <div class="header-section">
            <div class="header-section-item">
                <a href="<?=PATH?>" target="_blank">
                    <span>LOGO</span>
                </a>
            </div>
        </div>
        <!-- Меню -->
        <div class="header-section">
            <div class="header-section-item">
                <img src="<?=PATH.ADMIN_TEMPLATE?>img/menu-button.png" alt="Menu">
            </div>
        </div>
        <!-- Поиск -->
        <div class="header-section">
            <div class="header-section-item">
                <form method="post" action="<?=PATH . \core\base\settings\Settings::get('routes')['admin']['alias']?>/search">
                    <input class="" type="text" placeholder="Поиск">
                    <a href="#" class="a">
                        <i class="fa fa-search fa-fw fa-lg"></i>
                    </a>
                </form>
            </div>
        </div>
        <!-- Кнопка "Карта сайта" -->
        <div class="header-section">
            <div class="header-section-item">
                <a href="<?=PATH . \core\base\settings\Settings::get('routes')['admin']['alias']?>/createsitemap" class="a">
                    <i class="fa fa-sitemap fa-lg" aria-hidden="true"></i>
                    <span>Карта сайта</span>
                </a>
            </div>
        </div>
        <!-- Кнопка "Выход" -->
        <div class="header-section">
            <div class="header-section-item">
                <div class="">
                    <span>admin</span>
                </div>
                <div class="">
                    <a href="#">
                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/out.png" alt="Out">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>