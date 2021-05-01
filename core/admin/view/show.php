<!-- Контент -->
<div class="content">
<!--    Кнопка "добавить"-->
    <div>
        <a href="<?=$this->adminPath?>add/<?=$this->table?>">
            <img src="<?=PATH.ADMIN_TEMPLATE?>img/plus.png" alt="">
            <span>Добавить</span>
        </a>
    </div>

    <?php if($this->data):?>
        <?php foreach ($this->data as $data):?>
            <div>
                <a href="<?=$this->adminPath?>edit/<?=$this->table?>/<?=$data['id']?>">
                    <div>
                        <?php if ($data['img']):?>
                            <img src="<?=PATH . UPLOAD_DIR . $data['img']?>" alt="">
                        <?php endif;?>
                        <span><?=$data['name']?></span>
                    </div>
                </a>
            </div>
        <?php endforeach;?>
    <?php endif;?>

</div>

</div>