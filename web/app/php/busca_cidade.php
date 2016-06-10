<?php


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use app\models\Contador;

echo $this->renderPartial('buscar.php');  


/*

$sql = 'SELECT * FROM CIDADE WHERE ID_ESTADO = 1 AND ID_CIDADE = 2 ORDER BY ID_CIDADE';
$id  = Contador::findBySql($sql)->all();


/*
$i = 0;
foreach ($id as $um_id) {
	$i++;
	$resultado[$i] = array(
			"id_cidade" => $um_id->id_cidade,
			"nm_cidade" => $um_id->nome
			);
}

/*
$i = 0;

$resultado[$i] = array(
		"id_cidade" => '6505',
		"nm_cidade" => 'cidade 2'
		);


$i = 1;

$resultado[$i] = array(
		"id_cidade" => '6507',
		"nm_cidade" => 'cidade 3'
);
*/

//echo json_encode($resultado);

?>