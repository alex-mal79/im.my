<article class="content">
                <div class="wrap-p">
                    
                    <div class="">
                        <div class="breadcrumbs">
                            <p class="breadcrumbs__link">Главная / База данных / Автомобили</p>
                        </div>
                    </div>
                    
                    <div class="wrap-pb">
                        <div class="inform-field flex-sb">
                            <img class="inform-field__img" src="<?=PATH.ADMIN_TEMPLATE?>img/v.svg" alt="">
                            <span class="inform-field__text">Информационное поле!</span>
                        </div>
                    </div>
                     
                     <div class="inform-block flex-sb">
                        <div class="inform-block__item">
                            <ul>
                                <li class="inform-block__items">Информация по таблице.</li>
                            </ul>
                        </div>
                        <div class="inform-block__item">
                            <ul>
                                <li class="inform-block__items">Статистика по таблице.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="wrap-pb">
                        <div class="inform-field inform-field_color flex-sb">
                            <div class="button button_margin">
                                <a class="button__link flex-sb box" href="<?=$this->adminPath?>add/<?=$this->table?>">Добавить</a>
                            </div>
                            <img class="inform-field__img" src="<?=PATH.ADMIN_TEMPLATE?>img/ex-mark.svg" alt="">
                            <span class="inform-field__text">Таблица БД: "<?=$this->table?>".</span>
                        </div>
                    </div>
                     
                     <div class="wrap-pb">
                        <div class="content-inform flex-sb">
                            <?php if($this->data):?>
                                <?php foreach ($this->data as $data):?>
                                    <div class="db-block wrap-mt">
                                        <a class="db-block__link flex-sb" href="<?=$this->adminPath?>edit/<?=$this->table?>/<?=$data['id']?>">
                                            <?php if ($data['img']):?>
                                                <img class="db-block__img" src="<?=PATH . UPLOAD_DIR . $data['img']?>" alt="<?=$data['name']?>">
                                            <?php endif;?>
                                            
                                            <span class="db-block__text">
                                                <?=$data['name']?>
                                            </span> 
                                        </a>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;?>
                        </div>
                    </div>
                    
                    <div class="wrap-pb">
                        <div class="inform-field inform-field_color flex-sb">
                            <div class="button button_margin">
                                <a class="button__link flex-sb box" href="<?=$this->adminPath?>add/<?=$this->table?>">Добавить</a>
                            </div>
                            <img class="inform-field__img" src="<?=PATH.ADMIN_TEMPLATE?>img/ex-mark.svg" alt="">
                            <span class="inform-field__text">Таблица БД: "<?=$this->table?>".</span>
                        </div>
                    </div>

                </div>
            </article>

        </main>