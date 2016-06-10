<?php

namespace app\base;

/**
 * Classe que contém métodos úteis para formatação, renderização de valores, etc.
 * 
 * @author Jonathan Fernando <jonathan@cpninformatica.com.br>
 */
class Util 
{
    
    CONST MASK_CNPJ = 'CNPJ';
    CONST MASK_CPF = 'CPF';
    CONST MASK_TELEFONE = 'FONE';
    CONST MASK_CEP = 'CEP';
    
    /**
     * Retorna uma lista html com os erros retornados na validação da model
     * 
     * @param array $errors
     * @return string (html)
     */
    public static function renderModelErrors(array $errors)
    {
        $errorStr = "<ul>";
        foreach ($errors as $field => $errorList){
            foreach($errorList as $error){
                $errorStr.= "<li>{$error}</li>";
            }
        }
        $errorStr.= "</ul>";
        
        return $errorStr;
    }
    
    public static function maskBackend($val, $mask)
    {
        switch ($mask) {
            case self::MASK_CNPJ:
                $mask = '##.###.###/####-##';
                break;
            case self::MASK_CPF:
                $mask = '###.###.###-##';
                break;
            case self::MASK_CEP:
                $mask = '#####-###';
                break;
            case self::MASK_TELEFONE:
                if (strlen($val) == 11)
                    $mask = '(##) #####-####';
                else
                    $mask = '(##) ####-####';
                break;
            default:
                throw new \Exception('Tipo de máscara não definida. Utilize os tipos disponíveis na classe.');
        }
        
    	$maskared = '';
    	if (strlen($val)){    	    
        	$k = 0;
        	for($i = 0; $i<=strlen($mask)-1; $i++) {
    			if($mask[$i] == '#') {
    				if(isset($val[$k]))
    					$maskared .= $val[$k++];
    			}
    			else {
    				if(isset($mask[$i]))
    					$maskared .= $mask[$i];
    			}
    		}
    	}
    	return $maskared;
    }
    
    /**
     * Remove os caracteres de um determinado campo.
     * Por padrão sao removidos os seguinte caracteres: . - / ( )
     * 
     * @param string $campo (Campo que deseja-se remover a máscara)
     * @param boolean $removerEspaco (Flag que determina remover ou não os espaços em branco. Default false.)
     * @param array $extra (Caractres extras a serem removidos)
     * @return string
     */
    public static function removeMascara($campo, $removerEspaco = false, $extra = [])
    {
        $remover = array('.','-','/', '(',')');
        $remover = array_merge($remover, $extra);
        if ($removerEspaco){
            $remover = array_merge($remover, [' ']);
        }
        
        return str_replace($remover, '', $campo);
    }
}

