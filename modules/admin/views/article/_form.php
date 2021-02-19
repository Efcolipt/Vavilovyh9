<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tag;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin([ 'options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6,'class' => 'form-control HTML']) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6,'class' => 'form-control HTML']) ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>
    <div class="form-group ">
      <label class="control-label" >Теги</label>
      <?= Html::dropDownList('tags', $selectedTags, $tags, ['class' => 'form-control', 'multiple' => true]);  ?>

    </div>
    <?= $form->field($model, 'date')->widget(DatePicker::classname(),
    [
      'name' => 'date',
      'type' => DatePicker::TYPE_COMPONENT_PREPEND ,
      'removeButton' => false,
      'pluginOptions' => [
        'format' => 'dd.mm.yyyy',
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
