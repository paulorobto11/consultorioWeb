<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\auth\models\AuthUser */

$this->title = 'Create Auth User';
$this->params['breadcrumbs'][] = ['label' => 'Auth Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-user-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
