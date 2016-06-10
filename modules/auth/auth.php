<?php

namespace app\modules\auth;

class auth extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\auth\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function ListControllers()
    {

        return Json::decode(Yii::$app->listcontrollers->getList());

    }
}
