<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventRegistration */

$this->title = 'Create Event Registration';
$this->params['breadcrumbs'][] = ['label' => 'Event Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-registration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
