<section class="water-form js-popup">
  <div class="water-form__wrapper">
    <div class="water-form__close js-close-popup">X</div>
    <h2 class="water-form__title">Укажите целые значения со счётчиков</h2>
    <?php $form = \yii\widgets\ActiveForm::begin(
      ['action' => ['site/water'],
      'enableAjaxValidation'   => false,
      'enableClientValidation' => false,
      'validateOnBlur'         => false,
      'validateOnType'         => false,
      'validateOnChange'       => false,
      'validateOnSubmit'       => true,
      'options' => ['class'=>'water-form__form js-form',
        'role'=>'form',
        'data-action'=>'site/water',

      ]]);?>
      <label class="water-form__box">
        <?= $form->field($waterForm, 'hotwater')->textInput(['class'=>'water-form__input water-form__input--number','data-field-type'=> 'text-all'])->label(false);?>
        <span class="water-form__label">Горячая вода</span>
      </label>
      <label class="water-form__box">
        <?= $form->field($waterForm, 'coldwater')->textInput(['class'=>'water-form__input water-form__input--number','data-field-type'=> 'text-all'])->label(false);?>
        <span class="water-form__label">Холодная вода</span>
      </label>
      <label class="water-form__box">
        <?= $form->field($waterForm, 'apartment')->textInput(['class'=>'water-form__input water-form__input--number','data-field-type'=> 'text-all'])->label(false);?>
        <span class="water-form__label">Номер квартиры</span>
      </label>

      <label class="water-form__box">
        <?= $form->field($waterForm, 'surname')->textInput(['class'=>'water-form__input','data-field-type'=> 'text-all'])->label(false);?>
        <span class="water-form__label">Фамилия</span>
      </label>
      <label class="water-form__box">
        <?= $form->field($waterForm, 'email')->textInput(['class'=>'water-form__input','data-field-type'=> 'email'])->label(false);?>
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


  </div>
</section>
