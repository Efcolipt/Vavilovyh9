<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin([ 'options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput()->widget(DatePicker::classname(), [
      'name' => 'date',
      'value' => date('Y-m-d'),
      'options' => ['placeholder' => 'Select issue date'],
      'language' => 'ru',
      'pluginOptions' => [
        'format' => 'yyyy-mm-dd',
        'autoclose'=>true,
        'todayHighlight' => true,
      ]
    ]); ?>


    <?= $form->field($model, 'status')->checkbox([ 'value' => '1', 'checked ' => true])->label(''); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
