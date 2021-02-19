<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title =  $article->title; ;
?>
<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="/public/img/header-bg/1.jpg">
  <div class="container">
    <h2><?= $article->title; ?></h2>
  </div>
</section>
<!-- Page top section end -->

<!-- Blog section -->
<section class="blog-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <article class="blog-post single-post">
          <img src="<?=$article->getImage(); ?>" alt="">
          <div class="post-date"><?=$article->getDate(); ?></div>
          <h3><?=$article->title ?></h3>
          <div class="post-metas">
            <div class="post-meta">By <?= $article->author->name?></div>
            <?php if(!empty($article->category->title)): ?><div class="post-meta">in <a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]);  ?>"><?=$article->category->title; ?></a></div><?php endif; ?>
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
          <?=$this->render('/partials/comment',  [
               'article'=>$article,
               'comments'=>$comments,
               'commentForm'=>$commentForm,
           ]); ?>
        </article>
      </div>
      <?= $this->render('/partials/sidebar', [
        "articles" => $article,
        "populars" => $populars ,
      ]); ?>
    </div>
  </div>
</section>
<!-- Blog section end -->
