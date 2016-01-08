<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form ActiveForm */
?>
<div class="event-create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'description') ?>
        <?= $form->field($model, 'venue') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'shared_with') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- event-create -->
