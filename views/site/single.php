<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title =  $article->title;
?>
<header class="header header--news container">
  <div class="header__wrapper">
    <div class="header__logo">
      <h2 class="header__title">
        <a href="<?= Url::toRoute(['site/index'])?>" class="header__t-link">ТСЖ «Вавиловых 9»</a>
      </h2>
    </div>
    <div class="header__contacts">
      <p class="header__contact-desc">Диспетчер</p>
      <a href="tel:+79111813960" class="header__phone">+7 (911) 181-39-60</a>
    </div>
  </div>
</header>
<main class="main container">
<div class="main__wrapper">
  <section class="main__news news">
    <div class="news__item">
      <time class="news__time"><?=$article->getDate(); ?></time>
      <h2 class="news__title">
        <?=$article->title ?>
      </h2>
      <p class="news__text">
        <?=$article->description;  ?>
      </p>
      Теги:
      <?php foreach ($tags as $tag): ?>
        <span><?=$tag->title; ?></span>
      <?php endforeach; ?>
      <!-- <div class="news__subitem">
        <h4 class="news__subtitle">
          Годовое отчётно-перевыборное собрание членов ТСЖ
        </h4>
        <p class="news__text">
          На повестке собрания утверждение отчёта Правления ТСЖ за 2019 год, утверждение отчёта ревизионной
          комиссии
          за 2019 год, утверждение сметы доходов и расходов, штатного расписания и плана работ на 2020 год, а
          также
          переизбрание членов Правления ТСЖ.
        </p>
        <div class="news__schedule schedule">
          <div class="schedule__wrapper">
            <div class="schedule__item">
              <div class="schedule__date">
                21 мая <span class="schedule__date schedule__date--day-of-week">(четверг)</span>
              </div>
              <h5 class="schedule__title">Очная часть собрания</h5>
              <p class="schedule__text">19:15 — начало регистрации участников</p>
              <p class="schedule__text">19:30 — начало собрания</p>
            </div>
            <div class="schedule__item">
              <div class="schedule__date">
                с 21 мая по 11 июня
              </div>
              <h5 class="schedule__title">Заочная часть собрания</h5>
              <p class="schedule__text">Если очная часть собрания не наберёт кворум.</p>
            </div>
          </div>
        </div>
        <p class="news__docs">Документы к собранию:</p>
        <ul class="news__links-list">
          <li class="news__links-item">
            <a href="#" class="news__link">Уведомление о годовом отчётно-перевыборном собрании членов ТСЖ</a>
          </li>
          <li class="news__links-item">
            <a href="#" class="news__link">Отчет о деятельности правления за 2019 год</a>
          </li>
          <li class="news__links-item">
            <a href="#" class="news__link">Таблица 1 — Работы по содержанию и обслуживанию МКД в 2019 году</a>
          </li>
          <li class="news__links-item">
            <a href="#" class="news__link">Таблица 2 — Исполнение сметы</a>
          </li>
        </ul>
      </div>
      <div class="news__subitem">
        <h4 class="news__subtitle">
          Годовое общее собрание собственников жилья
        </h4>
        <p class="news__text">
          На повестке собрания принятие решения о закрытии специального счёта в банке «ФК Открытие» и открытие
          специального счёта в банке «Сбербанк», о предоставлении в пользование части общего имущества для
          размещения оборудования операторов связи, о предоставлении в пользование
          собственникамжилыхпомещенийчасть общего имущества и других решений.
        </p>
        <div class="news__schedule schedule">
          <div class="schedule__wrapper">
            <div class="schedule__item">
              <div class="schedule__date">
                21 мая (четверг)
              </div>
              <h5 class="schedule__title">Очная часть собрания</h5>
              <p class="schedule__text">20:15 — начало регистрации участников</p>
              <p class="schedule__text">20:30 — начало собрания</p>
            </div>
            <div class="schedule__item">
              <div class="schedule__date">
                с 21 мая по 18 июня
              </div>
              <h5 class="schedule__title">Заочная часть собрания</h5>
              <p class="schedule__text">Если очная часть собрания не наберёт кворум.</p>
            </div>
          </div>
        </div>
        <p class="news__docs">Документы к собранию:</p>
        <ul class="news__links-list">
          <li class="news__links-item">
            <a href="#" class="news__link">Уведомление об общем собрании собственников жилья</a>
          </li>
          <li class="news__links-item">
            <a href="#" class="news__link">Пояснения к вопросам повестки дня годового общего собрания
              собственников</a>
          </li>
        </ul>
      </div> -->
    </div>
  </section>
  <?=$this->render('/partials/question',  [
       'questionForm'=>$questionForm,
       'countQuestion'=>$countQuestion,
   ]); ?>
</div>
</main>
<!-- Blog section -->
<!-- <section class="blog-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <article class="blog-post single-post">
          <img src="<?=$article->getImage(); ?>" alt="">
          <div class="post-date"><?=$article->getDate(); ?></div>
          <h3><?=$article->title ?></h3>
          <div class="post-metas">
            <div class="post-meta">By <?= $article->author->name?></div>
            <div class="post-meta"><?=(int)$article->viewed; ?> Shows</div>

          </div>
          <p><?=$article->description;  ?></p>
          <hr>
          <p>Теги:
          <?php foreach ($tags as $tag): ?>
            <span><?=$tag->title; ?></span>
          <?php endforeach; ?>
        </p>
        <hr>

        </article>
      </div>
    </div>
  </div>
</section> -->

<!-- Blog section end -->
