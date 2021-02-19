<?php

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use app\models\CommentForm;
use app\models\QuestionForm;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $data = Article::getAll();
        $populars = Article::getPopulars();
        $questionForm = new QuestionForm();
        return $this->render('index', [
          "articles" => $data['articles'],
          "pagination" => $data['pagination'] ,
          "populars" => $populars ,
          "questionForm" => $questionForm
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
     public function actionComment($id)
     {
         $model = new CommentForm();

         if(Yii::$app->request->isPost)
         {
             $model->load(Yii::$app->request->post());
             if($model->saveComment($id))
             {
                 Yii::$app->getSession()->setFlash('comment', 'Ваш комментарий добавлен!');
                 return $this->redirect(['site/view','id'=>$id]);
             }
         }
     }

     public function actionQuestion()
     {
         $model = new QuestionForm();

         if(Yii::$app->request->isPost)
         {
             $model->load(Yii::$app->request->post());
             if($model->saveQuestion())
             {
                 Yii::$app->getSession()->setFlash('question', 'Спасибо за ваше сообщение!');
                 return $this->redirect(['site/index']);
             }
         }
     }

    /**
     * Displays Single Page.
     *
     * @return string
     */
    public function actionView($id)
    {

        $article = new Article();
        $article = $article->findOne($id);
        $populars = $article->getPopulars();
        $questionForm = new QuestionForm();

        $tags = $article->getArticleTags();

        $article->viewedCounter();
        return $this->render('single',compact('article','tags','populars','questionForm'));
    }



    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
