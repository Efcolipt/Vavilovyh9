<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'Home';
?>
<!-- Hero section -->
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
                <div class="post-meta">By Admin</div>
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
        "articles" => $data['articles'],
        "pagination" => $data['pagination'] ,
        "populars" => $populars ,
        "categories" => $categories
      ]); ?>
    </div>
  </div>
</section>
<!-- Blog section end -->
