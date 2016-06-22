<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "cargo".
 *
 * @property integer $id
 * @property string $cargo
 * @property integer $ativo
 * @property integer $empresa_id
 *
 * @property Colaborador[] $colaboradors
 */
class Funcoes extends \yii\db\ActiveRecord
{
	public function mascaraCpf($numero) {
		if (!$numero) return;
		$nr1  = substr(str_pad($numero, 11,0, STR_PAD_LEFT),0,3);
		$nr2  = substr(str_pad($numero, 11,0, STR_PAD_LEFT),3,3);
		$nr3  = substr(str_pad($numero, 11,0, STR_PAD_LEFT),6,3);
		$nr4  = substr(str_pad($numero, 11,0, STR_PAD_LEFT),9,2);
		$numero = $nr1.'.'.$nr2.'.'.$nr3.'-'.$nr4;
		return $numero;
	}
	
	
	public function mascaraCnpj($numero) {
		if (!$numero) return;
	
		$nr1  = substr(str_pad($numero, 14,0, STR_PAD_LEFT),0,2);
		$nr2  = substr(str_pad($numero, 14,0, STR_PAD_LEFT),2,3);
		$nr3  = substr(str_pad($numero, 14,0, STR_PAD_LEFT),5,3);
		$nr4  = substr(str_pad($numero, 14,0, STR_PAD_LEFT),8,4);
		$nr5  = substr(str_pad($numero, 14,0, STR_PAD_LEFT),12,2);
	
		$numero = $nr1.'.'.$nr2.'.'.$nr3.'/'.$nr4.'-'.$nr5;
	
		return $numero;
	
	}
	
	
	public function inverteData($data)
	{
		if (!$data) return;
		$data = str_replace('/','', $data);
		$dia = substr(str_pad($data, 8,0, STR_PAD_LEFT),0,2);
		$mes = substr(str_pad($data, 8,0, STR_PAD_LEFT),2,2);
		$ano = substr(str_pad($data, 8,0, STR_PAD_LEFT),4,4);
	
		$data = $ano.'-'.$mes.'-'.$dia;
		return $data;
	}
	
	public function ajustaData($data)
	{
		if (!$data) return '00/00/0000';
		$data = str_replace('-','', $data);
		$dia = substr(str_pad($data, 8,0, STR_PAD_LEFT),6,2);
		$mes = substr(str_pad($data, 8,0, STR_PAD_LEFT),4,2);
		$ano = substr(str_pad($data, 8,0, STR_PAD_LEFT),0,4);
	
		$data = $dia.'/'.$mes.'/'.$ano;
		return $data;
	}
	
	public function ajustaDataTime($dataNormal)
	{
		if (!$dataNormal) return;
		$data = substr($dataNormal,0,10);
		$hora = substr($dataNormal,11,8);
	
		$data = str_replace('-','', $data);
		$dia = substr(str_pad($data, 8,0, STR_PAD_LEFT),6,2);
		$mes = substr(str_pad($data, 8,0, STR_PAD_LEFT),4,2);
		$ano = substr(str_pad($data, 8,0, STR_PAD_LEFT),0,4);
	
		$data = $dia.'/'.$mes.'/'.$ano.' '.$hora;
		return $data;
	}
	
	public function mostraHora($hora)
	{
		if (!$hora) return '00:00'; 
		$hora1 = substr($hora,0,2);
		$hora2 = substr($hora,2,2);
		$hora = $hora1.':'.$hora2;
		return $hora;
	}
	
	public function formataValor($valor) {
		if (!$valor) return;
		$valor = str_replace('.','',$valor);
		$valor = str_replace(',','.',$valor);
		return $valor;
	}
	
	public 	function mostraValor($valor) {
		if (!$valor) return '0,00';
		$valor = str_replace(',','.',$valor);
		$valor=number_format($valor,2,',','.');
		return $valor;
	}
	
	
	public function retiraMascaras($numero) {
		$numero = str_replace('(', '', $numero);
		$numero = str_replace(')', '', $numero);
		$numero = str_replace('-', '', $numero);
		$numero = str_replace('/', '', $numero);
		$numero = str_replace('.', '', $numero);
		$numero = str_replace(':', '', $numero);
		$numero = str_replace(' ', '', $numero);
		return ($numero);
	}
	
	public function mascaraCep($numero) {
		$cep1 = substr($numero, 0,5);
		$cep2 = substr($numero, 5,3);
		$cep = $cep1.'-'.$cep2;
		return $cep;
	}
	
	public function mascaraServico($numero) {
		$nro1 = substr($numero, 0,2);
		$nro2 = substr($numero, 2,2);
		$numero = $nro1.'.'.$nro2;
		return $numero;
	}
	
	
	public function mascaraFone($numero) {
		if (!$numero) return false;
		
// 		echo $qtd = count($numero);
// 		exit();
// 		if ($qtd == 11) {
			$fone1 = substr($numero, 0,2);
			$fone2 = substr($numero, 2,4);
			$fone3 = substr($numero, 6,4);
// 		} else {
// 			$fone1 = substr($numero, 0,2);
// 			$fone2 = substr($numero, 2,5);
// 			$fone3 = substr($numero, 7,4);
// 		}
		
		$fone = '('.$fone1.') '.$fone2.'-'.$fone3;
		return $fone;
	}
	
	
	public function mascaraAtividade($valor)
	{
		if (!$valor) return '0000-0/00';
		$nro1 = substr(str_pad($valor, 7,0, STR_PAD_LEFT),0,4);
		$nro2 = substr(str_pad($valor, 7,0, STR_PAD_LEFT),4,1);
		$nro3 = substr(str_pad($valor, 7,0, STR_PAD_LEFT),5,2);
	
		$valor = $nro1.'-'.$nro2.'/'.$nro3;
		return $valor;
	}
	
	public function replace_nome($nome) {
//		$nome = utf8_encode($nome);
		$nome = str_replace('ç', 'Ç', $nome);
		$nome = str_replace('ã', 'Ã', $nome);
		return $nome;
		
	}
}
