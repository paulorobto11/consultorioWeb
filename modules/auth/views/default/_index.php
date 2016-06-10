<?php
use yii\helpers\Html;

?>
<div class="auth-default-index">
    <?php

    foreach($list['list'] as $id=>$lists)
    {
        print Html::beginTag('pre');
        print 'Início '.$id.' > ';
        print Html::tag('br');
       foreach($lists as $_l)
       {
           print $_l;
           print Html::tag('br');
       }
        print 'Fim '.$id.' < ';
        print Html::tag('br');
        print Html::endTag('pre');
    }


    ?>
</div>
