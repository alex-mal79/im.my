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
        <form method="POST" action="<?=$this->adminPath . $this->action?>">

            <div class="wrap-pb">
                <div class="inform-field inform-field_color flex-sb">
                    <div class="button button_margin">
                        <a class="button__link flex-sb box" href="#">Сохранить</a>
                    </div>
                    <?php if(!$this->noDelete && $this->data):?>
                        <div class="button button_margin">
                            <a class="button__link flex-sb box" href="#">Удалить</a>
                        </div>
                        <div class="button button_margin">
                            <a class="button__link flex-sb box" href="#">Очистить</a>
                        </div>
                    <?php endif;?>
                    <img class="inform-field__img" src="<?=PATH.ADMIN_TEMPLATE?>img/ex-mark.svg" alt="">
                    <span class="inform-field__text">Таблица БД: "<?=$this->table?>".</span>
                </div>
            </div>

            <?php if($this->data):?>
                <input type="hidden" name="<?=$this->columns['id_row']?>" value="<?=$this->data[$this->columns['id_row']]?>">
            <?php endif;?>
            <input type="hidden" name="table" value="<?=$this->table?>">

            <div class="content-add flex-c">
                <div class="vg-wrap flex-r">
                    <?php
                        foreach ($this->blocks as $class => $block){
                            if (is_int($class)) $class = 'vg-rows';
                            if($class !== 'vg-content') {
                                echo '<div class=" '. $class .' flex-c">';
                                    if($block){
                                        foreach ($block as $row){
                                            foreach ($this->templateArr as $template => $items){
                                                if(in_array($row, $items)){
                                                    if(!@include $_SERVER['DOCUMENT_ROOT'] . $this->formTemplates . $template .'.php'){
                                                        throw new \core\base\exceptions\RouteException('Не найден шаблон ' .
                                                            $_SERVER['DOCUMENT_ROOT'] . $this->formTemplates . $template .'.php');
                                                    }
                                                    break;
                                                }
                                            }
                                        }
                                    }
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
                <?php
                foreach ($this->blocks as $class => $block){
                    if (is_int($class)) $class = 'vg-rows';
                    if($class === 'vg-content') {
                        echo '<div class=" '. $class .' flex-c">';
                        if($block){
                            foreach ($block as $row){
                                foreach ($this->templateArr as $template => $items){
                                    if(in_array($row, $items)){
                                        if(!@include $_SERVER['DOCUMENT_ROOT'] . $this->formTemplates . $template .'.php'){
                                            throw new \core\base\exceptions\RouteException('Не найден шаблон ' .
                                                $_SERVER['DOCUMENT_ROOT'] . $this->formTemplates . $template .'.php');
                                        }
                                        break;
                                    }
                                }
                            }
                        }
                        echo '</div>';
                    }
                }
                ?>
            </div>

            <div class="wrap-pb">
                <div class="inform-field inform-field_color flex-sb">
                    <div class="button button_margin">
                        <a class="button__link flex-sb box" href="#">Сохранить</a>
                    </div>
                    <?php if(!$this->noDelete && $this->data):?>
                        <div class="button button_margin">
                            <a class="button__link flex-sb box" href="#">Удалить</a>
                        </div>
                        <div class="button button_margin">
                            <a class="button__link flex-sb box" href="#">Очистить</a>
                        </div>
                    <?php endif;?>
                    <img class="inform-field__img" src="<?=PATH.ADMIN_TEMPLATE?>img/ex-mark.svg" alt="">
                    <span class="inform-field__text">Таблица БД: "<?=$this->table?>".</span>
                </div>
            </div>
        </form>

    </div>
</article>

</main>