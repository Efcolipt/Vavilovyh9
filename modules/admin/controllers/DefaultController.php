<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\ArticleSearchLatest;
use Yii;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
      $searchModel = new ArticleSearchLatest();
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
      return $this->render('index', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
      ]);
    }

}
