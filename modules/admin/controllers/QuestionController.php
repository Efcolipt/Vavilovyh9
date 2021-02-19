<?php

namespace app\modules\admin\controllers;

use app\models\Question;
use yii\web\Controller;

class QuestionController extends Controller
{
    public function actionIndex()
    {
        $questions = Question::find()->orderBy('id desc')->all();

        return $this->render('index',['questions'=>$questions]);
    }

    public function actionDelete($id)
    {
        $question = Question::findOne($id);
        if($question->delete())
        {
            return $this->redirect(['question/index']);
        }
    }


}
