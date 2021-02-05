<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Category';
?>
<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="/public/img/header-bg/1.jpg">
  <div class="container">
    <h2>Tips & Tricks</h2>
  </div>
</section>
<!-- Page top section end -->

  <!-- Blog section -->
<section class="blog-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php foreach ($articles as $article):?>
        <article class="blog-post review-post">
          <img src="<?=$article->getImage();  ?>" alt="">
          <div class="post-date"><?=$article->getDate();  ?></div>
          <h3><?=$article->title;  ?></h3>
          <div class="post-metas">
            <div class="post-meta">By Admin</div>
            <div class="post-meta">in <a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]);  ?>"><?=$article->category->title;  ?></a></div>
            <div class="post-meta"><?=(int)$article->viewed;  ?> Shows</div>
          </div>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p><?=$article->content;  ?></p>
          <a href="<?=Url::toRoute(['site/view', 'id' => $article->id]) ?>" class="site-btn">Read More</a>
        </article>
        <?php endforeach; ?>
        <?=
           LinkPager::widget([
                'pagination' => $pagination,
            ]);
            ?>
      </div>
      <?= $this->render('/partials/sidebar', compact('article','tags','categories','populars')); ?>
    </div>
  </div>
</section>
<!-- Blog section end -->
