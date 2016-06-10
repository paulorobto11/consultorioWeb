<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome-4.4.0/css/font-awesome.min.css',
        'css/ionicons-2.0.1/css/ionicons.min.css',
        'plugins/iCheck/all.css',
        'plugins/toastr/toastr.min.css',
        'plugins/jquery-confirm/jquery-confirm.min.css',
        
        'css/admin-lte/AdminLTE.min.css',
        'css/admin-lte/skins/_all-skins.min.css',
        'app/css/main.css',
    ];
    public $js = [
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js',
        'plugins/jquery/jquery.maskmoney.min.js',
        'plugins/autonumeric/autoNumeric.min.js',
        'plugins/iCheck/icheck.min.js',
        'plugins/toastr/toastr.min.js',
        'plugins/jquery-confirm/jquery-confirm.min.js',
        
        'js/admin-lte/app.min.js',
        'js/admin-lte/demo.js',
    	'js/main.js',
        'app/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

