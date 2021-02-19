<div class="comments">
  <h5>Comments</h5>
  <?php if(!empty($comments)):?>
  <ul class="comments-list">
     <?php foreach($comments as $comment):?>
    <li>
      <!-- <img src="/public/img/author-thumbs/1.jpg" alt=""> -->
      <div class="comment-text">
        <h6><?= $comment->user->name;?><a href="#" class="reply">Reply</a></h6>
        <div class="comment-date"><?= $comment->getDate();?></div>
        <p><?= $comment->text; ?></p>
      </div>
    </li>
    <?php endforeach;?>
  </ul>
  <?php endif;?>
<?php if(!Yii::$app->user->isGuest): ?>
  <h5>Leave a comment</h5>
  <?php if(Yii::$app->session->getFlash('comment')): ?>
      <div class="alert alert-success" role="alert">
          <?= Yii::$app->session->getFlash('comment'); ?>
      </div>
  <?php endif;?>
  <?php $form = \yii\widgets\ActiveForm::begin([
            'action' => ['site/comment', 'id'=>$article->id],
            'options' => ['class'=>'comment-form', 'role'=>'form']]);?>
    <div class="row">
      <div class="col-md-12">
        <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Write Message'])->label(false);?>
        <button class="site-btn">post Comment</button>
      </div>
    </div>
    <?php \yii\widgets\ActiveForm::end();?>
  <?php endif; ?>
</div>
