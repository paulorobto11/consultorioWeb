<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use \app\modules\loading\LoadingAsset;

LoadingAsset::register($this);

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?php echo Yii::$app->name .' | '. Html::encode($this->title); ?></title>
    <?php $this->head()?>
</head>

<body class="hold-transition login-page">


<?php $this->beginBody()?>
<div class="loading-fog-login text-center" id="loading-fog-login"  style="padding-top: 50px;">
    <div class="cssload-loader text-center"><p>Carregando</p></div>
</div>


	<?php echo $content; ?>

<?php $this->endBody()?>
</body>
</html>
<?php
$script = <<< JS
$(function(){


$('a').click(function (event)
{

if($(this).attr('href') != '#')
 {
 loading.turn.on('.loading-fog-login','.cssload-loader');
 }

});

$(":button").click(function(event) {
if($(this).attr('href') != '#')
 {
loading.turn.on('.loading-fog-login','.cssload-loader');
 }
});

$(window).bind('beforeunload',function(){

 loading.turn.on('.loading-fog-login','.cssload-loader');

});


});
JS;
$this->registerJs($script,\yii\web\View::POS_END);
?>
<?php $this->endPage() ?>
