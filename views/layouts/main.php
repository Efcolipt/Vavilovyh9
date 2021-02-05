<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;
PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>







<!-- Header section -->
<header class="header-section">
  <a href="<?= Url::toRoute(['site/index'])?>" class="site-logo">
    <img src="/public/img/logo.png" alt="logo">
  </a>
  <ul class="main-menu">
    <li><a href="<?= Url::toRoute(['site/index'])?>">Home</a></li>
    <?php if(Yii::$app->user->isGuest):?>
      <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
      <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
  <?php else: ?>
    <li>
      <?= Html::beginForm(['/auth/logout'], 'post')
      . Html::submitButton(
          'Logout (' . Yii::$app->user->identity->name . ')',
          ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
      )
      . Html::endForm() ?>
      </li>
  <?php endif;?>
  </ul>
</header>
<!-- Header section end -->

<?=$content?>

<!-- Footer section -->
<div class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="footer-widget">
          <div class="about-widget">
            <img src="/public/img/logo.png" alt="">
            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. Morbi id dictum quam, ut commodo.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="footer-widget">
          <h2 class="fw-title">Usfull Links</h2>
          <ul>
            <li><a href="#">Games</a></li>
            <li><a href="#">testimonials</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Characters</a></li>
            <li><a href="#">Latest news</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="footer-widget">
          <h2 class="fw-title">Services</h2>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Become a writer</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="footer-widget">
          <h2 class="fw-title">Careeres</h2>
          <ul>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Subscriptions</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Our team</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="footer-widget fw-latest-post">
          <h2 class="fw-title">Usfull Links</h2>
          <div class="latest-news-widget">
            <div class="ln-item">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="social-links-warp">
    <div class="container">
      <div class="social-links">
        <a href="#"><i class="fa fa-instagram"></i><span>instagram</span></a>
        <a href="#"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
        <a href="#"><i class="fa fa-facebook"></i><span>facebook</span></a>
        <a href="#"><i class="fa fa-twitter"></i><span>twitter</span></a>
        <a href="#"><i class="fa fa-youtube"></i><span>youtube</span></a>
      </div>
    </div>
  </div>
</div>
<!-- Footer section end -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
