<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auth Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-user-index">


    <p>
        <?= Html::a('Create Auth User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
           

            'username',
            'email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
