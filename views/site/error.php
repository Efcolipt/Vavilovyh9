<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<header class="header container">
  <div class="header__wrapper">
    <div class="header__logo">
      <h2 class="header__title">
        <a class="header__t-link">ТСЖ «Вавиловых 9»</a>
      </h2>
    </div>
    <div class="header__contacts">
      <p class="header__contact-desc">Диспетчер</p>
      <a href="tel:+79111813960" class="header__phone">+7 (911) 181-39-60</a>
    </div>
  </div>
  <div class="header__wrapper header__wrapper--bottom">
    <div class="header__forms">
      <div class="header__link-box header__link-box--water-form">
        <a href="#" class="header__link">Сдать показания на воду</a>
      </div>
      <div class="header__link-box header__link-box--feedback">
        <a href="#" class="header__link">Oтзывы и предложения</a>
      </div>
    </div>
    <p class="header__reception">
      Приём собственников:<br>
      Управляющий — каждый четверг с 16:00 до 19:00.<br>
      Председатель и бухгалтер — каждый первый и третий четверг месяца.
    </p>
  </div>
</header>
<main class="main container">
  <div class="main__wrapper">
    <div class="site-error">

        <h1><?= Html::encode($this->title) ?></h1>

        <div class="alert alert-danger">
            <?= nl2br(Html::encode($message)) ?>
        </div>

        <p>
            The above error occurred while the Web server was processing your request.
        </p>
        <p>
            Please contact us if you think this is a server error. Thank you.
        </p>

    </div>
  </div>
</div>
