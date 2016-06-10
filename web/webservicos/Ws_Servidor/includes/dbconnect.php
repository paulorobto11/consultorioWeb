<?php
//header('Content-Type: text/html; charset=utf-8');

$tpproc = 2;

	$host = "";
	$user = "root";
	$pass = "";
	$banco= "issfiscal";
	$connDB = mysql_connect($host, $user, $pass);
	$db = mysql_select_db($banco);

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');


?>