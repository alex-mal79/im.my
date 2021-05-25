<div class="add-rows border-page flex-c wrap-mt">
    <span class="add-rows__text">
        <?=$this->translate[$row][0] ?: $row?>
    </span>
    <?php if ($this->translate[$row][1]):?>
        <span class="add-rows__text_ph">
            <?=$this->translate[$row][1] ?: $row?>
        </span>
    <?php endif;?>
    <?php foreach ($this->foreignData[$row] as $key => $item):?>
        <?php if (is_int($key)):?>
            <label for="<?=$row?>">
                <input class="add-rows__radio" type="radio" name="<?=$row?>"
                       <?php if (isset($this->data[$row]) && $this->data[$row] == $key) echo 'checked';
                       elseif (!isset($this->data[$row]) && $this->foreignData[$row]['default'] == $item) echo 'checked';?> value="<?=$key?>">
                <span class="add-rows__text wrap-ml"><?=$item?></span>
            </label>
        <?php endif;?>
    <?php endforeach;?>
</div>