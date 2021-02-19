<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Последние 10 новостей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить статью', ['article/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'description:ntext',
            'content:ntext',
            'date:datetime',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($data){
                    return $data->status ? '<span class="text-success">Показывается</span>' : '<span class="text-danger">Не показывается</span>';
                }
            ],

            [
              'format' => "html",
              'label' => 'Обложка статьи',
              'value' => function($data){
                return Html::img($data->getImage(), ['width' => 200]);
              }
            ],

            [
              'class' => 'yii\grid\ActionColumn',
              'buttons' => [
                'update' => function($model, $key, $index) {
                    return Html::a(
                        '<span class="glyphicon glyphicon-pencil">',
                        Url::to(['article/update', 'id' => $index])
                    );
                },
                'view' => function($model, $key, $index) {
                    return Html::a(
                        '<span class="glyphicon glyphicon-eye-open">',
                        Url::to(['article/view', 'id' => $index])
                    );
                },
                'delete' => function($model, $key, $index) {
                    return Html::a('<span class="glyphicon glyphicon-trash">', Url::to(['article/delete', 'id' => $index]),
                    [
            					'title' => Yii::t('yii', 'Delete'),
            					'data-confirm' => Yii::t('yii', 'Уверены что хотите удалить?'),
            					'data-method' => 'post'
            				]);
                }
              ],
            ],
        ],
    ]); ?>


</div>
