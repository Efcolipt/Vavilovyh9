<section class="main__question question">

  <h2 class="question__title">Задайте вопрос председателю</h2>
  <p class="question__desc">Вы получите ответ в течение трёх рабочих дней.</p>
  <?php $form = \yii\widgets\ActiveForm::begin(
    ['action' => ['site/question'],
    'enableAjaxValidation' => true,
    'enableClientValidation' => false,
    'options' => ['class'=>'question__form js-form',
      'role'=>'form',
      'data-action'=>'site/question',

    ]]);?>
  <label for="question" class="visually-hidden">Ваш вопрос</label>
  <?= $form->field($questionForm, 'text')->textarea(['class'=>'question__input question__input--text','id' => 'question','data-field-type'=> 'text-all','placeholder'=>'Напишите, что вы хотите спросить у председателя ТСЖ или предложить для нашего дома'])->label(false);?>
  <label for="name" class="visually-hidden">Как вас зовут</label>
  <?= $form->field($questionForm, 'name')->textInput(['class'=>'question__input','id' => 'name','data-field-type'=> 'text-all','placeholder'=>'Как вас зовут'])->label(false);?>
  <label for="apartment" class="visually-hidden">Из какой вы квартиры</label>
  <?= $form->field($questionForm, 'apartment')->textInput(['class'=>'question__input','id' => 'apartment','data-field-type'=> 'text-all','placeholder'=>'Из какой вы квартиры'])->label(false);?>
  <label for="contact" class="visually-hidden">Как с вами связаться?</label>
  <?= $form->field($questionForm, 'contact')->textInput(['class'=>'question__input','id' => 'contact','data-field-type'=> 'email-phone','placeholder'=>'Как с вами связаться?'])->label(false);?>
  <div class="question__inner">
    <div class="question__btn-box autoform-submit-invalid">
      <button class="question__btn" type="submit">Отправить</button>
      <span class="autoform-form-text-error"></span>
      <div class="autoforms_errors">скрыто</div>
    </div>
    <p class="question__desc question__desc--bottom">
      Все поля обязательны <br>
      для заполнения
    </p>
  </div>
  <div class="answer">
    <div class="js-preloader answer__preloader-wrapper">
      <div class="answer__preloader">
      </div>
    </div>
    <div class="answer__item js-fail">
      <div class="answer__box">
        <div class="answer__inner">
          <p class="answer__text">
            Не удалось отправить форму, попробуйте через некоторое время. Мы уже знаем об этом и скоро решим
            проблему.
          </p>
        </div>
      </div>
    </div>
    <div class="answer__item js-success">
      <div class="answer__box">
        <div class="answer__inner">
          <p class="answer__text">
            Спасибо за ваше сообщение — председатель ответит вам в течение трёх рабочих дней.
          </p>
        </div>
      </div>
    </div>
  </div>


  <?php \yii\widgets\ActiveForm::end();?>
  <p class="question__note">
    Мы уже получили <?=$countQuestion ?> сообщений
  </p>
</section>
