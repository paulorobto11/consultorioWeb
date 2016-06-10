<?php

namespace app\modules\auth;

use Yii;
use yii\web\AssetBundle;

/**
 * @author Guilherme Trevisan de Oliveira <havennow@gmail.com>
 */
class AuthAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/auth/assets';
    public $css = ['css/auth-overrider.css'];
    public $js = ['js/auth-main.js'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();
    }
}
