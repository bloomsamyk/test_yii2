<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6])  ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'cat_id')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'empty' => 'Empty', 'in progress' => 'In progress', 'done' => 'Done', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
