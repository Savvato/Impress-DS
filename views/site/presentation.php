<?php
use yii\helpers\HtmlPurifier;
?>


<div id="impress">
    <?php foreach($slides as $slide): ?>
        <div
            class="step <?php if($slide["fon"] == "true") {echo "slide";} ?>"
            data-x="<?= HtmlPurifier::process($slide["x"]) ?>"
            data-y="<?= HtmlPurifier::process($slide["y"]) ?>"
            data-z="<?= HtmlPurifier::process($slide["z"]) ?>"
            data-rotate="<?= HtmlPurifier::process($slide["rotate"]) ?>"
            data-scale="<?= HtmlPurifier::process($slide["scale"]) ?>"
            >
            <?= HtmlPurifier::process($slide["slide"]) ?>
        </div>

    <?php endforeach; ?>
</div>