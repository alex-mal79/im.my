<div class="add-rows border-page flex-c wrap-mt">
    <span class="add-rows__text">
        <?=$this->translate[$row][0] ?: $row?>
    </span>
    <?php if ($this->translate[$row][1]):?>
        <span class="add-rows__text_ph">
            <?=$this->translate[$row][1] ?: $row?>
        </span>
    <?php endif;?>
    <select class="add-rows__select border-form" name="<?=$row?>" id="">
        <?php foreach ($this->foreignData[$row] as $item):?>
            <option value="<?=$item['id']?>" <?=$this->data[$row] == $item['id'] ? 'selected' : ''?>>
                <?=$item['name']?>
            </option>
        <?php endforeach;?>
    </select>
</div>
