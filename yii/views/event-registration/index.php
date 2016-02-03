<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventRegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Event Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-registration-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Event Registration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'event_id',
            'name',
            'guests',
            'add_date',
            // 'edit_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
