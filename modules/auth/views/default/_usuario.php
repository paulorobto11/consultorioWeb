<?php

use yii\helpers\Html;
use yii\grid\GridView;

?>
<div class="auth-user-index">


    <p>
        <?= Html::a('Criar usuário', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $user_data,
        'columns' => [


            'username',
            'email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
