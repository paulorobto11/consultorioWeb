<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Horario */

$this->title = 'Inclusão de Horarios';
$this->params['breadcrumbs'][] = 'Cadastrar';
?>
<div class="horario-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
