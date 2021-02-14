<?php
use yii\helpers\Url;
?>
<div class="col-lg-4 sidebar">
<div class="sb-widget">
  <h2 class="sb-title">Categories</h2>
  <ul class="sb-cata-list">
    <?php foreach($categories as $category): ?>
      <li><a href="<?= Url::toRoute(['site/category', 'id' => $category->id]);  ?>"><?=$category->title; ?><span><?= (int)$category->getArticlesCount(); ?></span></a></li>
    <?php endforeach; ?>
  </ul>
</div>
<div class="sb-widget">
  <h2 class="sb-title">Popular News</h2>
  <div class="latest-news-widget">
    <?php foreach($populars as $article): ?>
      <div class="ln-item">
        <a href="<?=Url::toRoute(['site/view', 'id' => $article->id]) ?>">
          <img src="<?=$article->getImage();  ?>" alt="">
          <div class="ln-text">
            <div class="ln-date"><?=$article->getDate();  ?></div>
            <h6><?=$article->title;  ?></h6>
            <div class="ln-metas">
              <div class="ln-meta">By Admin</div>
              <?php if(!empty($article->category->title)): ?><div class="ln-meta">in <a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]);  ?>"><?=$article->category->title;  ?></a></div><?php endif; ?>
              <div class="ln-meta"><?=(int)$article->viewed; ?> Shows</div>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
