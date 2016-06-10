<?php
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;



$arry=[];

    foreach($list['list'] as $id=>$lists)
    {

if(is_array($lists))
{

$count=0;
    foreach($lists as $_valuelist)
    {


            $_explode=explode('/value#/',$_valuelist);
        if(count($_explode) > 1)
        {


            $_tmparry=Json::decode($_explode[1]);

            $controller=$_tmparry['id'];
            $name=$_tmparry['nome'].' - '.$_tmparry['descr'];

            $arry[]=['id'=>$controller,'name'=>$name];
        }





        $count++;


    }
}



    }




    ?>

<?php

echo Html::dropDownList('combo',null,ArrayHelper::map($arry, 'id', 'name'));
?>