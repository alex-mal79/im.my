<main class="main">
 
            <nav class="nav">
                <div class="">
                    <div class="menu">

                        <div class="menu-head">
                            
                            <div class="site-map site-map_screen">
                                <a class="flex-sb" href="<?=PATH . \core\base\settings\Settings::get('routes')['admin']['alias']?>/createsitemap">
                                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/sitemap.svg" alt="site-map">
                                    <span class="site-map__text">Карта сайта</span>
                                </a>
                            </div>
                            
                            <div class="nav-head">
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
                        </div>
                        
                        <div class="menu__index">
                            <a class="menu__link flex-sb box" href="/admin">
                                <img src="<?=PATH.ADMIN_TEMPLATE?>img/home.svg" alt="home">
                                <span class="menu__text">Главная</span>
                            </a>
                        </div>

                        <div class="menu__items">
                            <a class="menu__link flex-sb box" href="#">
                                <img src="<?=PATH.ADMIN_TEMPLATE?>img/server.svg" alt="db">
                                <span class="menu__text">База данных</span>
                            </a>
                        </div>

                        <div class="submenu">
                            <ul>
                                <?php if($this->menu):?>
                                    <?php foreach ($this->menu as $table => $item):?>
                                        <li class="submenu__items">
                                            <a class="submenu__link flex-sb" href="<?=$this->adminPath?>show/<?=$table?>">
<!--                                                <img src="--><?//=PATH.ADMIN_TEMPLATE?><!--img/--><?//=$item['img'] ? $item['img'] : 'pages.svg'?><!--" alt="db">-->
                                                <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                                <span class="submenu__text">
                                                    <?=$item['name'] ? $item['name'] : $table?>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </div>

                        <div class="menu__items">
                            <a class="menu__link flex-sb box" href="#">
                                <img src="<?=PATH.ADMIN_TEMPLATE?>img/users.svg" alt="db">
                                <span class="menu__text">Пользователи</span>
                            </a>
                        </div>

                        <div class="submenu">
                            <ul>
                            <li class="submenu__items">
                                <a class="submenu__link flex-sb" href="#">
                                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                    <span class="submenu__text">Lorem, ipsum.</span>
                                </a>
                            </li>

                                <li class="submenu__items">
                                    <a class="submenu__link flex-sb" href="#">
                                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                        <span class="submenu__text">lorem</span>
                                    </a>
                                </li>

                                <li class="submenu__items">
                                    <a class="submenu__link flex-sb" href="#">
                                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                        <span class="submenu__text">Lorem ipsum dolor sit.</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="menu__items">
                            <a class="menu__link flex-sb box" href="#">
                                <img src="<?=PATH.ADMIN_TEMPLATE?>img/service.svg" alt="db">
                                <span class="menu__text">Настройки</span>
                            </a>
                        </div>

                        <div class="submenu">
                            <ul>
                            <li class="submenu__items">
                                <a class="submenu__link flex-sb" href="#">
                                    <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                    <span class="submenu__text">Lorem, ipsum.</span>
                                </a>
                            </li>

                                <li class="submenu__items">
                                    <a class="submenu__link flex-sb" href="#">
                                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                        <span class="submenu__text">lorem</span>
                                    </a>
                                </li>

                                <li class="submenu__items">
                                    <a class="submenu__link flex-sb" href="#">
                                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                        <span class="submenu__text">Lorem, ipsum dolor.</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="menu__items">
                            <a class="menu__link flex-sb box" href="#">
                                <img src="<?=PATH.ADMIN_TEMPLATE?>img/report.svg" alt="db">
                                <span class="menu__text">Отчеты</span>
                            </a>
                        </div>

                        <div class="submenu">
                            <ul>
                                <li class="submenu__items">
                                    <a class="submenu__link flex-sb" href="#">
                                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                        <span class="submenu__text">Lorem, ipsum.</span>
                                    </a>
                                </li>

                                <li class="submenu__items">
                                    <a class="submenu__link flex-sb" href="#">
                                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                        <span class="submenu__text">lorem</span>
                                    </a>
                                </li>

                                <li class="submenu__items">
                                    <a class="submenu__link flex-sb" href="#">
                                        <img src="<?=PATH.ADMIN_TEMPLATE?>img/pages.svg" alt="db">
                                        <span class="submenu__text">Lorem, ipsum dolor.</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>