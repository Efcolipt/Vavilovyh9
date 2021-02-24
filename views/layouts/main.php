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
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>







  <header class="header-section">
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
  </header>
  <!-- Header section end -->
  <div class="body-wrap">
    <?=$content?>
    <!-- Footer section -->
    <footer class="footer container">
      <div class="footer__docs">
        <a href="#" class="footer__link">Положение о защите и хранении персональных данных</a>
        <a href="#" class="footer__link">Положение о ревизионной комиссии</a>
      </div>
      <div class="footer__wrapper">
        <p class="footer__copyright">
          © 2015 ... <?= date("Y") ?>
        </p>
        <a href="mailto:mail@vavilovyh9.ru" class="footer__link">mail@vavilovyh9.ru</a>
      </div>
    </footer>
    <section class="water-form js-popup">
      <div class="water-form__wrapper">
        <div class="water-form__close js-close-popup">X</div>
        <h2 class="water-form__title">Укажите целые значения со счётчиков</h2>
        <form action="/" method="POST" class="water-form__form js-form" data-action="site/question"
          enctype="multipart/form-data">
          <label class="water-form__box">
            <input type="text" class="water-form__input water-form__input--number" data-field-type="text-all"
              name="hotwater">
            <span class="water-form__label">Горячая вода</span>
          </label>
          <label class="water-form__box">
            <input type="text" class="water-form__input water-form__input--number" data-field-type="text-all"
              name="coldwater">
            <span class="water-form__label">Холодная вода</span>
          </label>
          <label class="water-form__box">
            <input type="text" class="water-form__input water-form__input--number" data-field-type="text-all"
              name="appart">
            <span class="water-form__label">Номер квартиры</span>
          </label>
          <label class="water-form__box">
            <input type="text" class="water-form__input" data-field-type="text-all" name="name">
            <span class="water-form__label">Фамилия</span>
          </label>
          <label class="water-form__box">
            <input type="email" class="water-form__input" data-field-type="email" name="email">
            <span class="water-form__label">E-mail</span>
          </label>
          <div class="water-form__inner">
            <div class="water-form__btn-box autoform-submit-invalid">
              <button class="water-form__btn" type="submit">Отправить</button>
              <span class="autoform-form-text-error"></span>
              <div class="autoforms_errors">скрыто</div>
            </div>
            <p class="water-form__desc">
              Все поля обязательны <br>
              для заполнения
            </p>
          </div>
          <div class="answer">
            <div class="answer__item">
              <div class="answer__box">
                <div class="answer__inner">
                  <p class="answer__text">
                    Не удалось отправить форму, попробуйте через некоторое время. Мы уже знаем об этом и скоро решим
                    проблему.
                  </p>
                </div>
              </div>
            </div>
            <div class="answer__item">
              <div class="answer__box">
                <div class="answer__inner">
                  <p class="answer__text">
                    Спасибо за ваше сообщение — председатель ответит вам в течение трёх рабочих дней.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
  <!-- Footer section end -->


  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>