<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Счётчик воды';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(!empty($waters)):?>

        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Фамилия</td>
                    <td>Email</td>
                    <td>Квартира</td>
                    <td>Холодная вода</td>
                    <td>Горячая вода</td>
                    <td>Дата отправления </td>
                </tr>
            </thead>

            <tbody>
                <?php foreach($waters as $water):?>
                    <tr>
                        <td><?= $water->id?></td>
                        <td><?= $water->surname?></td>
                        <td><?= $water->email?></td>
                        <td><?= $water->apartment?></td>
                        <td><?= $water->coldwater?></td>
                        <td><?= $water->hotwater?></td>
                        <td><?= changeLanguage($water->date)?></td>
                        <td>
                            <a class="btn btn-danger" href="<?= Url::toRoute(['water/delete', 'id' => $water->id]); ?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    <?php endif;?>
</div>
