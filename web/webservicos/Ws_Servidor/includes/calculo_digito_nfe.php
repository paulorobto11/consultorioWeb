<?php


function calcular_chave_nfe($cUF,$ano_mes_emissao,$CNPJ,$mod,$nNF,$serie,$tpEmis,$cNF,$tipo) {
$chave_sem_dv = $cUF.$ano_mes_emissao.$CNPJ.$mod.$serie.$nNF.$tpEmis.$cNF;
$chave = $chave_sem_dv;
$modulo_11 = "23456789"; //não alterar, é padrão do sefaz
$pesos = $modulo_11;
$ponderacoes = 
$chave[0]*$pesos[2]+
$chave[1]*$pesos[1]+
$chave[2]*$pesos[0]+
$chave[3]*$pesos[7]+
$chave[4]*$pesos[6]+
$chave[5]*$pesos[5]+
$chave[6]*$pesos[4]+
$chave[7]*$pesos[3]+
$chave[8]*$pesos[2]+
$chave[9]*$pesos[1]+
$chave[10]*$pesos[0]+
$chave[11]*$pesos[7]+
$chave[12]*$pesos[6]+
$chave[13]*$pesos[5]+
$chave[14]*$pesos[4]+
$chave[15]*$pesos[3]+
$chave[16]*$pesos[2]+
$chave[17]*$pesos[1]+
$chave[18]*$pesos[0]+
$chave[19]*$pesos[7]+
$chave[20]*$pesos[6]+
$chave[21]*$pesos[5]+
$chave[22]*$pesos[4]+
$chave[23]*$pesos[3]+
$chave[24]*$pesos[2]+
$chave[25]*$pesos[1]+
$chave[26]*$pesos[0]+
$chave[27]*$pesos[7]+
$chave[28]*$pesos[6]+
$chave[29]*$pesos[5]+
$chave[30]*$pesos[4]+
$chave[31]*$pesos[3]+
$chave[32]*$pesos[2]+
$chave[33]*$pesos[1]+
$chave[34]*$pesos[0]+
$chave[35]*$pesos[7]+
$chave[36]*$pesos[6]+
$chave[37]*$pesos[5]+
$chave[38]*$pesos[4]+
$chave[39]*$pesos[3]+
$chave[40]*$pesos[2]+
$chave[41]*$pesos[1]+
$chave[42]*$pesos[0];
$ponderacoes_soma = $ponderacoes;
$resto_ = (int)($ponderacoes/11);
$resto = $resto_*11;
$resto = $ponderacoes - $resto;
$cDV = (11 - $resto);
if($cDV <= 1){$cDV = 0;} 
$cDV = substr($cDV,0,1);
$chave_de_acesso = $chave.$cDV;

if ($tipo == 1) return $chave_de_acesso; else return $cDV;

}

?>