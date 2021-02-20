<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добвить статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Yii::$app->formatter->locale = 'ru-RU'; ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'content:ntext',
            [
                'attribute' => 'date',
                'format' => 'raw',
                'value' => function($data){
                    return $data->date ? changeLanguage($data->date) : $data->date;
                }
            ],
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
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
