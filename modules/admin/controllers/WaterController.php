<?php

namespace app\modules\admin\controllers;

use app\models\Water;
use yii\web\Controller;

class WaterController extends Controller
{
    public function actionIndex()
    {
        $waters = Water::find()->orderBy('id desc')->all();

        return $this->render('index',['waters'=>$waters]);
    }

    public function actionDelete($id)
    {
        $water = Water::findOne($id);
        if($water->delete())
        {
            return $this->redirect(['water/index']);
        }
    }


}
