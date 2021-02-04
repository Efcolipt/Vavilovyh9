<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
$this->title = 'Index';
?>
<!-- Hero section -->
<section class="hero-section">
  <div class="hero-slider owl-carousel">
    <div class="hero-item set-bg" data-setbg="/public/img/slider/1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <h2>Enter the Battle</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
            <a href="#" class="site-btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-item set-bg" data-setbg="/public/img/slider/2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <h2>Enter the Battle</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
            <a href="#" class="site-btn">Read More</a>
          </div>
        </div>
      </div>
    </div>
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
                <div class="post-meta">in <a href="#"><?=$article->category->title;  ?></a></div>
                <div class="post-meta"><?=(int)$article->viewed;  ?> Shows</div>
              </div>
              <p><?=$article->description;  ?></p>
              <a href="#" class="read-more">Read More</a>
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
      <div class="col-lg-4 sidebar">
        <!-- <div class="sb-widget">
          <form class="sb-search">
            <input type="text" placeholder="Search">
          </form>
        </div> -->
        <div class="sb-widget">
          <h2 class="sb-title">Categories</h2>
          <ul class="sb-cata-list">
            <?php foreach($categories as $category): ?>
            <li><a href=""><?=$category->title; ?><span><?= (int)$category->getArticlesCount(); ?></span></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="sb-widget">
          <h2 class="sb-title">Popular News</h2>
          <div class="latest-news-widget">
            <?php foreach($populars as $article): ?>
            <div class="ln-item">
              <img src="<?=$article->getImage();  ?>" alt="">
              <div class="ln-text">
                <div class="ln-date"><?=$article->getDate();  ?></div>
                <h6><?=$article->title;  ?></h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#"><?=$article->category->title;  ?></a></div>
                  <div class="ln-meta"><?=(int)$article->viewed;  ?> Shows</div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->
