<div class="add-img flex-c border-page wrap-mt">
    <span class="add-img__text">
        <?=$this->translate[$row][0] ?: $row?>
    </span>
    <?php if ($this->translate[$row][1]):?>
        <span class="add-rows__text_ph">
            <?=$this->translate[$row][1] ?: $row?>
        </span>
    <?php endif;?>
    <div class="add-img__gallery flex-r">

        <div class="add-img__items add-img__add border-form flex-sb">
            <label for="img">
                <input class="add-img__input" type="file" name="<?=$row?>[]" id="img" multiple>
                <img class="add-img__items-add" src="<?=PATH . ADMIN_TEMPLATE?>img/plus.svg" alt="add">
            </label>
        </div>
        <?php if ($this->data[$row]):?>
            <?php $this->data[$row] = json_decode($this->data[$row])?>
            <?php foreach ($this->data[$row] as $item):?>
                <div class="add-img__items border-form flex-sb wrap-ml">
                    <img class="add-img__item add-img__img_item" src="<?=PATH . UPLOAD_DIR . $item?>">
                </div>
            <?php endforeach;?>
            <?php
                for ($i = 0; $i < 2; $i++){
                    echo '<div class="add-img__items border-form flex-sb wrap-ml"></div>';
                }
            ?>
        <?php else:?>
            <?php
                for ($i = 0; $i < 11; $i++){
                    echo '<div class="add-img__items border-form flex-sb wrap-ml"></div>';
                }
            ?>
        <?php endif;?>
    </div>
</div>
