<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;

class PresentationController extends Controller
{
    public $layout = 'presentation-layout';
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $slides = $request->post('slides');
        return $this->render('index', ['slides' => $slides]);
    }

}
