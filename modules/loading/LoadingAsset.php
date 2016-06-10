<?php

namespace app\modules\loading;

use Yii;
use yii\web\AssetBundle;

/**
 * @author Guilherme Trevisan de Oliveira <havennow@gmail.com>
 */
class LoadingAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/loading/assets';
    public $css = ['css/loading-main.css'];
    public $js = ['js/loading-main.js'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];


    public $jsOptions = array(
        'position' => \yii\web\View::POS_END
    );

    public function init()
    {
        parent::init();
    }
}
