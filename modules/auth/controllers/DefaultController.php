<?php

namespace app\modules\auth\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use app\modules\auth\models\AuthUser;
use yii\data\ActiveDataProvider;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $list=Json::decode(Yii::$app->listcontrollers->getList([],'teste',1));
        $dataProvider_user = new ActiveDataProvider([
            'query' => AuthUser::find(),
        ]);
        return $this->render('index',[
            'list'=>$list,
            'user_data'=>$dataProvider_user,
        ]);

    }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['GET','POST'],
                ],
            ],
        ];
    }





}