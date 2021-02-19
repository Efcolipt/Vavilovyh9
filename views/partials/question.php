
<section class="main__question question">
  <?php if(Yii::$app->session->getFlash('question')): ?>
      <div class="alert alert-success" role="alert">
          <?= Yii::$app->session->getFlash('question'); ?>
      </div>
  <?php endif; ?>
  <h2 class="question__title">Задайте вопрос председателю</h2>
  <p class="question__desc">Вы получите ответ в течение трёх рабочих дней.</p>
  <?php $form = \yii\widgets\ActiveForm::begin(
    ['action' => ['site/question'],
    'options' => ['class'=>'question__form', 'role'=>'form']]);?>
  <label for="question" class="visually-hidden">Ваш вопрос</label>
  <?= $form->field($questionForm, 'text')->textarea(['class'=>'question__input question__input--text','placeholder'=>'Напишите, что вы хотите спросить у председателя ТСЖ или предложить для нашего дома'])->label(false);?>
  <label for="name" class="visually-hidden">Как вас зовут</label>
  <?= $form->field($questionForm, 'name')->textInput(['class'=>'question__input','placeholder'=>'Как вас зовут'])->label(false);?>
  <label for="apartment" class="visually-hidden">Из какой вы квартиры</label>
  <?= $form->field($questionForm, 'apartment')->textInput(['class'=>'question__input','placeholder'=>'Из какой вы квартиры'])->label(false);?>
  <label for="contact" class="visually-hidden">Как с вами связаться?</label>
  <?= $form->field($questionForm, 'contact')->textInput(['class'=>'question__input','placeholder'=>'Как с вами связаться?'])->label(false);?>
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
  <?php \yii\widgets\ActiveForm::end();?>
  <p class="question__note">
    Мы уже получили 313 сообщений
  </p>
</section>
