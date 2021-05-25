<div class="add-rows flex-c wrap-mt border-page">
        <span class="add-rows__text">
            <?=$this->translate[$row][0] ?: $row?>
        </span>
        <?php if ($this->translate[$row][1]):?>
            <span class="add-rows__text_ph">
                <?=$this->translate[$row][1] ?: $row?>
            </span>
        <?php endif;?>
    <input class="add-rows__input border-form" type="text" name="<?=$row?>"
           value="<?=isset($_SESSION['res'][$row]) ? htmlspecialchars($_SESSION['res'][$row]) : htmlspecialchars($this->data[$row])?>">
</div>
