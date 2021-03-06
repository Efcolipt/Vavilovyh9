<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCssFile('/reformator/reformator.css');?>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
  <?php
     NavBar::begin([
         'brandLabel' => 'Последние 10 новостей',
         'brandUrl' => '/admin/default/index',
         'options' => [
             'class' => 'navbar-inverse navbar-fixed-top',
         ],
     ]);
     echo Nav::widget([
         'options' => ['class' => 'navbar-nav navbar-right'],
         'items' => [
             ['label' => 'Статьи', 'url' => ['/admin/article/index']],
             // ['label' => 'Комментарии', 'url' => ['/admin/comment/index']],
             ['label' => 'Теги', 'url' => ['/admin/tag/index']],
             ['label' => 'Вопросы', 'url' => ['/admin/question/index']],
             ['label' => 'Счётчик воды', 'url' => ['/admin/water/index']]

         ],
     ]);
     NavBar::end();
 ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
<?php $this->registerJsFile('/reformator/reformator.js');?>
<script>
    reformator.auto({bar: true})
</script>
</body>
</html>
<?php $this->endPage() ?>
