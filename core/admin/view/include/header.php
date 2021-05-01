<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($this->styles as $style):?>
        <link rel="stylesheet" href="<?=$style?>">
    <?php endforeach;?>
    <title>Auto Parts Shop</title>
</head>
<body class="body">
<!-- Шапка -->
<header class="header">
    <div class="header-section">
        <a href="<?=PATH?>" class="nav__heading" target="_blank">
            LOGO
        </a>
    </div>
    <div class="header-section">
        <img src="<?=PATH.ADMIN_TEMPLATE?>img/menu-button.png" alt="">
    </div>
    <div class="header-section">
        <form method="post" action="<?=PATH . \core\base\settings\Settings::get('routes')['admin']['alias']?>/search">
            <input class="" type="text" placeholder="Поиск">
            <a href="#">
                <i class="fa fa-search fa-fw fa-lg"></i>
            </a>
        </form>
    </div>
    <div class="header-section">
        <a href="<?=PATH . \core\base\settings\Settings::get('routes')['admin']['alias']?>/createsitemap" class="nav__heading">
            <i class="fa fa-sitemap fa-lg" aria-hidden="true"></i>
            Карта сайта
        </a>
    </div>
    <div class="header-section header-section_out">
        <a href="#">
            <img src="<?=PATH.ADMIN_TEMPLATE?>img/out.png" alt="">
        </a>
    </div>
</header>
<!-- Контейнер -->
<div class="container">
    <!-- Боковая панель -->
    <nav class="nav">
        <a href="/admin" class="nav__heading">
            <i class="fa fa-home fa-fw main-side-menu__icon-before" aria-hidden="true"></i>
            Главная
        </a>

        <div class="main-side-menu">
            <button class="main-side-menu__button">
                <i class="fa fa-database main-side-menu__icon-before" aria-hidden="true"></i>
                База данных
            </button>
            <div class="main-side-menu__panel">
                <ul class="main-side-menu__list">
                    <?php if($this->menu):?>
                        <?php foreach ($this->menu as $table => $item):?>
                            <li>
                                <a href="<?=$this->adminPath?>show/<?=$table?>">
                                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/<?=$item['img'] ? $item['img'] : 'pages.png'?>" alt="">
                                    <span><?=$item['name'] ? $item['name'] : $table?></span>
                                </a>
                            </li>
                        <?endforeach;?>
                    <?endif;?>
                </ul>
            </div>

            <button class="main-side-menu__button">
                <i class="fa fa-user-circle-o main-side-menu__icon-before" aria-hidden="true"></i>
                Покупатели
            </button>
            <div class="main-side-menu__panel">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </div>

            <button class="main-side-menu__button">
                <i class="fa fa-cog fa-fw main-side-menu__icon-before" aria-hidden="true"></i>
                Настройки
            </button>
            <div class="main-side-menu__panel">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </div>

            <button class="main-side-menu__button">
                <i class="fa fa-bar-chart main-side-menu__icon-before" aria-hidden="true"></i>
                Отчеты
            </button>
            <div class="main-side-menu__panel">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </div>
        </div>

    </nav>