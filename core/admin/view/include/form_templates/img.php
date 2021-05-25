<div class="add-img flex-c wrap-mt border-page">
    <span class="add-img__text">
        <?=$this->translate[$row][0] ?: $row?>
    </span>
    <?php if ($this->translate[$row][1]):?>
        <span class="add-rows__text_ph">
            <?=$this->translate[$row][1] ?: $row?>
        </span>
    <?php endif;?>
    <div class="flex-r wrap-mt">

        <div class="button add-img__button border-button button-wrap">
            <label for="<?=$row?>">
                <input class="add-img__input" type="file" name="<?=$row?>" id="<?=$row?>">
                <span class="button__link flex-sb box">Выбрать</span>
            </label>
        </div>

        <div class="button button_margin border-button">
            <a class="button__link flex-sb box" href="#">Удалить</a>
        </div>

    </div>

    <div class="add-img__img border-form flex-sb wrap-mt">
        <?php if ($this->data[$row]):?>
            <img class="add-img__img_item" src="<?=PATH . UPLOAD_DIR . $this->data[$row]?>">
        <?php endif;?>
    </div>
</div>