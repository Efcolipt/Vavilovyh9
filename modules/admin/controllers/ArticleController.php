<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Category;
use app\models\Article;
use app\models\Tag;
use app\models\ImageUpload;
use app\models\ArticleSearch;
use app\models\ArticleTag;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

use yii\web\UploadedFile;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();
        $imageUploadModel = new ImageUpload();
        $file = UploadedFile::getInstance($model,'image');
        if ($model->load(Yii::$app->request->post()) && $model->saveArticle()) {

            if ($file) {
              $model->saveImage($imageUploadModel->uploadFile($file , $model->image));
            }

            $this->setTags($model->id);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'selectedTags' => [],
            'tags' => ArrayHelper::map(Tag::find()->all(), 'id', 'title'),
        ]);
    }


    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $imageUploadModel = new ImageUpload();
        $file = UploadedFile::getInstance($model,'image');
        if ($model->load(Yii::$app->request->post()) && $model->saveArticle()) {
            if ($file) {
              $model->saveImage($imageUploadModel->uploadFile($file , $model->image));
            }
            $this->setTags($id);
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
            'selectedTags' => $model->getSelectedTags(),
            'tags' => ArrayHelper::map(Tag::find()->all(), 'id', 'title'),
        ]);
    }


    public function setTags($id)
    {
      $article = $this->findModel($id);
      $tags = ArrayHelper::map(Tag::find()->all(), 'id', 'title');
      $tags = Yii::$app->request->post('tags');
      $article->saveTags($tags);
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->clearCurrentTags();
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
