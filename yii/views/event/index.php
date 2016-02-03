<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Events</h1>
<ul>
    <?php foreach ($events as $event): ?>
    <li>
        <?= Html::encode("{$event->name} ({$event->location})") ?>:
        <?= $event->date ?>
    </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>