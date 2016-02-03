<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Event;

/* @var $this yii\web\View */
/* @var $model app\models\EventRegistration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_id')->dropDownList(Event::find()->select(['name', 'id'])->indexBy('id')->column(), ['prompt' => 'Event Name']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guests')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'add_date')->textInput(['maxlength' => 19]) ?>

    <?= $form->field($model, 'edit_date')->textInput(['maxlength' => 19]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
