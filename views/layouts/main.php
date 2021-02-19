<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;
PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>







<!-- Header section -->
<!-- <header class="header-section">
  <a href="<?= Url::toRoute(['site/index'])?>" class="site-logo">
    <img src="/public/img/logo.png" alt="logo">
  </a>
  <ul class="main-menu">
    <li><a href="<?= Url::toRoute(['site/index'])?>">Home</a></li>
    <?php if(Yii::$app->user->isGuest):?>
      <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
      <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
  <?php else: ?>
    <li>
      <?= Html::beginForm(['/auth/logout'], 'post')
      . Html::submitButton(
          'Logout (' . Yii::$app->user->identity->name . ')',
          ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
      )
      . Html::endForm() ?>
      </li>
  <?php endif;?>
  </ul>
</header> -->
<!-- Header section end -->
<main class="main container">
  <?=$content?>
</main>
<!-- Footer section -->
<footer class="footer container">
  <div class="footer__docs">
    <a href="#" class="footer__link">Положение о защите и хранении персональных данных</a>
    <a href="#" class="footer__link">Положение о ревизионной комиссии</a>
  </div>
  <div class="footer__wrapper">
    <p class="footer__copyright">
      © 2015 ... 2017
    </p>
    <a href="mailto:mail@vavilovyh9.ru" class="footer__link">mail@vavilovyh9.ru</a>
  </div>
</footer>
<!-- Footer section end -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
