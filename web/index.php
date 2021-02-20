<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';




function debug($data){
  echo "<pre>";
  print_r($data);
  echo "</pre>";
  exit;
}
function changeLanguage($date){
  $arrLanguage = array(
    '01'=>'января',
    '02'=>'февраля',
    '03'=>'март',
    '04'=>'апреля',
    '05'=>'мая',
    '06'=>'июня',
    '07'=>'июля',
    '08'=>'августа',
    '09'=>'сентября',
    '10'=>'октября',
    '11'=>'ноября',
    '12'=>'декабря',
  );

  $month  = substr($date,3,-5);

  $day  = $date[0].$date[1];
  $year  = substr($date,-4);
  if (!empty($arrLanguage[$month])) {
    return $day." ".$arrLanguage[$month]." ".$year;
  }else{
    return $date;
  }

}
$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
