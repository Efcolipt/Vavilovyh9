<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Home';
?>
<!-- Hero section -->
<section class="main__blanks blanks">
  <h2 class="blanks__title">Бланки заявлений:</h2>
  <a href="#" class="blanks__link">Бесконтактный ключ</a>
  <a href="#" class="blanks__link">Вступление в ТСЖ</a>
</section>
<div class="main__wrapper">
  <section class="main__news news">
    <h2 class="visually-hidden">Новости</h2>
    <ul class="news__list">
      <li class="news__item">
        <time class="news__time" datetime="2020-06-28">28 июня 2020</time>
        <h3 class="news__title">
          Итоги общего собрания собственников
        </h3>
        <p class="news__text">
          18 июня завершилось годовое общее собрание собственников жилья, которое проводилось в форме
          очно-заочного
          голосования.
        </p>
        <p class="news__text">
          Счётная комиссия проверила бюллетени и подсчитала голоса. Кворум собрания состоялся. По большинству
          вопросов
          приняты положительные решения большинством голосов.
        </p>
        <a href="#" class="news__link">Протокол № 1 от 28 июня 2020 года</a>
      </li>
      <li class="news__item">
        <time class="news__time" datetime="2020-06-13">13 июня 2020</time>
        <h3 class="news__title">
          Итоги общего собрания членов ТСЖ
        </h3>
        <p class="news__text">
          11 июня завершилось годовое отчётно-перевыборное собрание членов ТСЖ «Вавиловых 9», которое проводилось
          в
          форме очно-заочного голосования.
        </p>
        <p class="news__text">
          Счётная комиссия проверила бюллетени и подсчитала голоса. Кворум собрания состоялся. По всем вопросам
          приняты положительные решения большинством голосов.
        </p>
        <a href="#" class="news__link">Выписка из Протокола № 1 от 13 июня 2020 года</a>
      </li>
      <li class="news__item">
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
      </li>
        <time class="news__time" datetime="2017-09-10">10 сентября 2017</time>
        <h3 class="news__title">
          Бесконтактные ключи к парадной двери
        </h3>
        <img src="/img/upload/10092017.png" width="450" height="311" alt="Примеры ключей">
        <p class="news__text">
          <a href="#" class="news__link">Бланк заявления</a> можно скачать на сайте, либо взять бланк у
          диспетчера.
        </p>
        <p class="news__text">
          В заявлении укажите модель ключа и необходимое количество. Стоимость ключей будет включена в следующую
          квитанцию по квартплате.
        </p>
        <p class="news__text">
          После оплаты квитанции, управляющая передаст вам закодированные ключи.
        </p>
      </li>
    </ul>
  </section>
  <section class="main__question question">
    <h2 class="question__title">Задайте вопрос председателю</h2>
    <p class="question__desc">Вы получите ответ в течение трёх рабочих дней.</p>
    <form action="/" method="POST" class="question__form">
      <label for="question" class="visually-hidden">Ваш вопрос</label>
      <textarea placeholder="Напишите, что вы хотите спросить у председателя ТСЖ или предложить для нашего дома"
        id="question" name="question" data-field-type="text-all" class="question__input question__input--text"
        name="question"></textarea>
      <label for="name" class="visually-hidden">Ваше имя</label>
      <input type="text" placeholder="Как вас зовут" data-field-type="text-all" class="question__input"
        name="name" id="name">
      <label for="apartment" class="visually-hidden">Из какой вы квартиры</label>
      <input type="text" placeholder="Из какой вы квартиры" data-field-type="text-all" class="question__input"
        name="apartment" id="apartment">
      <label for="contact" class="visually-hidden">Как с вами связаться?</label>
      <input type="text" placeholder="Как с вами связаться?" data-field-type="text-all" class="question__input"
        name="contact" id="contact">
      <div class="question__inner">
        <div class="question__btn-box autoform-submit-invalid">
          <button class="question__btn" type="submit">Отправить</button>
          <span class="autoform-form-text-error visually-hidden"></span>
        </div>
        <p class="question__desc question__desc--bottom">
          Все поля обязательны <br>
          для заполнения
        </p>
      </div>
    </form>
    <p class="question__note">
      Мы уже получили 313 сообщений
    </p>
  </section>
</div>
<section class="hero-section">
  <div class="hero-slider owl-carousel">
    <?php foreach ($articles as $article):?>
    <div class="hero-item set-bg" data-setbg="<?=$article->getImage();  ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <h2><?=$article->title;  ?></h2>
            <p><?=$article->content;  ?></p>
            <a href="<?=Url::toRoute(['site/view', 'id' => $article->id]) ?>" class="site-btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- Hero section end -->

<!-- Blog section -->
<section class="blog-section spad">
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
                <?php if(!empty($article->category->title)): ?><div class="post-meta">in <a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]);  ?>"><?=$article->category->title;  ?></a></div><?php endif; ?>
                <div class="post-meta"><?=(int)$article->viewed;  ?> Shows</div>
              </div>
              <p><?=$article->content;  ?></p>
              <a href="<?=Url::toRoute(['site/view', 'id' => $article->id]) ?>" class="read-more">Read More</a>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
        <?=
           LinkPager::widget([
                'pagination' => $pagination,
            ]);
            ?>
      </div>
      <?= $this->render('/partials/sidebar', [
        "articles" => $articles,
        "populars" => $populars ,
      ]); ?>
    </div>
  </div>
</section>
<!-- Blog section end -->
