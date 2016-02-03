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

<a href="?r=event-registration/create">Sign up for an event.</a>
<?= LinkPager::widget(['pagination' => $pagination]) ?>