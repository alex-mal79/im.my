    <!-- Контент -->
    <article>
        <!-- Вывод данных из таблиц БД -->
        <div class="wrap">
            <div class="vg">
                <!-- Title -->
                <div class="vg-title vg-wrap vg-title_bg-blue">
                    <!-- Кнопка -->
                    <div class="vg-button">
                        <a href="<?=$this->adminPath?>add/<?=$this->table?>">
                            <span class="vg-text">Добавить</span>
                        </a>
                    </div>
                    <!-- Название таблицы БД -->
                    <div class="vg-wrap">
                        <div class="vg-circle vg-title_bg-blue">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="vg-text vg-text_white">
                                <span>База данных: таблица "<?=$this->table; ?>"</span>
                        </div>
                    </div>
                </div>
                <!-- Список БД -->
                <div class="wrap wrap_padding-tb-10px">
                    <div class="vg-items vg-items-item">
                        <!-- Элемент БД -->
                        <?php if($this->data):?>
                            <?php foreach ($this->data as $data):?>
                                <div class="vg-item vg-wrap">
                                    <div class="vg-item-img temp vg-wrap">
                                        <a href="<?=$this->adminPath?>edit/<?=$this->table?>/<?=$data['id']?>" class="wrap vg-wrap">
                                            <?php if ($data['img']):?>
                                                <img src="<?=PATH . UPLOAD_DIR . $data['img']?>" alt="<?=$data['name']?>">
                                            <?php endif;?>
                                        </a>
                                    </div>

                                    <div class="vg-item-text temp vg-wrap">
                                        <a href="<?=$this->adminPath?>edit/<?=$this->table?>/<?=$data['id']?>" class="wrap vg-wrap">
                                            <span><?=$data['name']?></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
                <!-- Title -->
                <div class="vg-title vg-wrap vg-title_bg-blue">
                    <!-- Кнопка -->
                    <div class="vg-button">
                        <a href="#">
                            <span class="vg-text">Добавить</span>
                        </a>
                    </div>
                    <!-- Название таблицы БД -->
                    <div class="vg-wrap">
                        <div class="vg-circle vg-title_bg-blue">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                        <div class="vg-text vg-text_white">
                            <span>База данных: таблица "<?=$this->table; ?>"</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </article>
    </main>