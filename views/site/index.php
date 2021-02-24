<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Home';
?>

<header class="header header--main container">
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
        <a href="#" class="header__link js-open-popup">Сдать показания на воду</a>
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
<section class="main__blanks blanks">
  <h2 class="blanks__title">Бланки заявлений:</h2>
  <a href="#" class="blanks__link">Бесконтактный ключ</a>
  <a href="#" class="blanks__link">Вступление в ТСЖ</a>
</section>
<div class="main__wrapper">
  <section class="main__news news">
    <h2 class="visually-hidden">Новости</h2>
    <ul class="news__list">
      <?php foreach ($articles as $article):?>
      <li class="news__item">
        <time class="news__time" datetime="<?=$article->getDate();  ?>"><?=$article->getDate();  ?></time>
        <h3 class="news__title">
        <?=$article->title;  ?>
        </h3>
        <img src="<?=$article->getImage();  ?>" width="450" height="311" alt="Примеры ключей">
        <p class="news__text">
        <?=$article->content;  ?>
        </p>
        <a href="<?=Url::toRoute(['site/view', 'id' => $article->id]) ?>" class="news__link">Подробнее</a>
      </li>
      <?php endforeach; ?>
      <!-- <li class="news__item">
        <time class="news__time" datetime="2020-05-11">11 мая 2020</time>
        <h3 class="news__title">
          21 мая общее собрание собственников и членов ТСЖ
        </h3>
        <p class="news__text">
          По инициативе членов Правления ТСЖ с 21 мая 2020 года по 31 июля 2019 года состоятся два собрания —
          годовое отчётно-перевыборное собрание членов ТСЖ и годовое общее собрание собственников жилья. Оба
          собрания пройдут в форме очно-заочного голосования.
        </p>
        <div class="news__subitem">
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
        </div>
      </li> -->
    </ul>
  </section>
  <?=$this->render('/partials/question',  [
       'questionForm'=>$questionForm,
       'countQuestion'=>$countQuestion,
   ]); ?>

  </main>

  <?=
     LinkPager::widget([
          'pagination' => $pagination,
      ]);
      ?>
      <?=$this->render('/partials/water',['waterForm'=>$waterForm]); ?>
</div>
<!-- Blog section -->
<!-- <section class="blog-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 blog-posts">
        <div class="row">
          <?php foreach ($articles as $article):?>
          <article class="col-md-6">
            <div class="blog-post">
              <img src="<?=$article->getImage();  ?>" alt="">
              <div class="post-date"><?=$article->getDate();  ?></div>
              <h4><?=$article->title;  ?></h4>
              <div class="post-metas">
                <div class="post-meta">By <?= $article->author->name?></div>
                <div class="post-meta"><?=(int)$article->viewed;  ?> Shows</div>
              </div>
              <p><?=$article->content;  ?></p>
              <a href="<?=Url::toRoute(['site/view', 'id' => $article->id]) ?>" class="read-more">Read More</a>
            </div>
          </article>
          <?php endforeach; ?>
        </div>

      </div>

    </div>
  </div>
</section> -->
