<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Вопросы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(!empty($questions)):?>

        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Имя</td>
                    <td>Контент</td>
                    <td>Квартира</td>
                    <td>Контакт</td>
                    <td>Дата отправления</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach($questions as $question):?>
                    <tr>
                        <td><?= $question->id?></td>
                        <td><?= $question->name?></td>
                        <td><?= $question->text?></td>
                        <td><?= $question->apartment?></td>
                        <td><?= $question->contact?></td>
                        <td><?= $question->date?></td>
                        <td>
                            <a class="btn btn-danger" href="<?= Url::toRoute(['question/delete', 'id' => $question->id]); ?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    <?php endif;?>
</div>
