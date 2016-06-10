<?php

namespace app\base;

class AppException extends \Exception
{
    protected $permitidoComSenhaMaster; 
    
    /**
     * Lança uma exception
     * 
     * @param string $message (Mensagem da exceção)
     * @param string $permitidoComSenhaMaster (Flag de controle para identificar se a ação pode ser concluída com a informação da senha master)
     * @param $code [optional]
     * @param $previous [optional]
     */
    public function __construct($message, $permitidoComSenhaMaster = false, $code = null, $previous = null)
    {
        $this->permitidoComSenhaMaster = $permitidoComSenhaMaster;
        parent::__construct($message, $code = null, $previous = null);
    }    
    
    public function permitidoComSenhaMaster()
    {
        return $this->permitidoComSenhaMaster;
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
