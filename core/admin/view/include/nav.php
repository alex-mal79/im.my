<!--Контейнер-->
<main>
<!-- Навигация -->
<nav>
    <div class="wrap">
        <div class="menu">

            <div class="menu-list-index">
                <div class="menu-list__img">
                    <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                </div>

                <a href="/admin" class="menu-list__link a">
                    <span class="menu-list__text">
                       Главная
                    </span>
                </a>
            </div>

            <div class="menu-list">
                <div class="menu-list__img">
                    <i class="fa fa-database fa-fw" aria-hidden="true"></i>
                </div>
                <span class="menu-list__text">
                    База данных
                </span>
            </div>

            <div class="menu-list-item">
                <ul class="submenu-list">
                    <?php if($this->menu):?>
                        <?php foreach ($this->menu as $table => $item):?>
                            <li class="submenu-list-item">
                                <div class="menu-list__img">
                                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/<?=$item['img'] ? $item['img'] : 'pages.png'?>" alt="DataBase">
                                </div>
                                <a href="<?=$this->adminPath?>show/<?=$table?>" class="menu-list__link a">
                                    <span class="menu-list__text">
                                        <?=$item['name'] ? $item['name'] : $table?>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
            </div>

            <div class="menu-list">
                <div class="menu-list__img">
                    <i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>
                </div>
                <span class="menu-list__text">
                    Покупатели
                </span>
            </div>

            <div class="menu-list-item">
                <ul class="submenu-list">

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                1
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                2
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                3
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                4
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                5
                            </span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="menu-list">
                <div class="menu-list__img">
                    <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
                </div>
                <span class="menu-list__text">
                    Настройки
                </span>
            </div>

            <div class="menu-list-item">
                <ul class="submenu-list">

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                1
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                2
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                3
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                4
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                5
                            </span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="menu-list">
                <div class="menu-list__img">
                    <i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i>
                </div>
                <span class="menu-list__text">
                    Отчеты
                </span>
            </div>

            <div class="menu-list-item">
                <ul class="submenu-list">

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                1
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                2
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                3
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                4
                            </span>
                        </a>
                    </li>

                    <li class="submenu-list-item">
                        <div class="menu-list__img">
                            <img src="" alt="">
                        </div>
                        <a href="1.php" class="menu-list__link a">
                            <span class="menu-list__text">
                                5
                            </span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>