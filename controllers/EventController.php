<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Event;

class EventController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Event();

        if ($model->load( Yii::$app->request->post() )){
            $model->save();
            //var_dump($model->getErrors()); die;
        }
        return $this->render('create', array('model'=>$model));

    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
