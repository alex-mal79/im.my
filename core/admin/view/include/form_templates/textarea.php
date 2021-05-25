<div class="add-rows border-page flex-c wrap-mt">
    <span class="add-rows__text">
        <?=$this->translate[$row][0] ?: $row?>
    </span>
    <?php if ($this->translate[$row][1]):?>
        <span class="add-rows__text_ph">
            <?=$this->translate[$row][1] ?: $row?>
        </span>
    <?php endif;?>
    <textarea class="add-rows__textarea border-form" name="<?=$row?>"><?=isset($_SESSION['res'][$row]) ? htmlspecialchars($_SESSION['res'][$row]) : htmlspecialchars($this->data[$row])?></textarea>
</div>