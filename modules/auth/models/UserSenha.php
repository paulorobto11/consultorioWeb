<?php

namespace app\modules\auth\models;

use Yii;
use yii\base\Model;
use app\models\Funcoes;
use app\base\Util;

/**
 * LoginForm is the model behind the login form.
 */
class UserSenha extends Model
{
    public $username;
    public $password;
    public $email;
    public $rememberMe;
    
    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['username', 'required','message'=>'Preencha campo "{attribute}"!'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */

    public function validateUser($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
        }
    }


    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function lembrete()
    {
    	$user = $this->getUser();
    	if (!empty($user)) {
	   	    $model = \app\models\Usuarios::find()->where(['user_id'=>$user->id])->one();
	   	    if (empty($model)) {
	   	    	return false;
	   	    }

	   	    if ($user->email != $this->email) {
	   	    	return false;
	   	    }
	   	    	
	   	    if ($model->email_pessoal != $this->email) {
	   	    	return false;
	   	    }
	   	    
   	    	$model_empresa = \app\models\Empresa::find()->where(['id'=>$model->empresa_id])->one();
	   	    if (empty($model_empresa)) {
	   	    	return false;
	   	    }
//     	}   
	   	    return true;
    	}
    	
    	return false;
   	    
//    	    echo "<hr>".$this->tipo_identify;
//    	    echo "<pre>ddd ";
//    	    print_r ($model_empresa);
//    	    exit();
   	    
    	   
//         if ($this->validate()) {
//             $this->getUser()->setEmpresa($this->identify);
//             $this->getUser()->setUsuarios();
//             $this->getUser()->setMobiliario($this->tipo_identify,$this->identify);
//             $this->getUser()->setContador($this->tipo_identify,$this->identify);
//             $this->getUser()->initRule();
            
//             return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
//         	$this->getUser()->setEmpresa($this->getUser()->id);
//         	$this->getUser()->setUsuarios($this->getUser()->id);
//         	$this->getUser()->setMedico(2);
//         	$this->getUser()->initRule();
        	
//         	return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        	 
//         }
//         return false;
    }
    
    public function envioSenha() {
    	$user = $this->getUser();
    	if (!empty($user)) {
    		$model = \app\models\Usuarios::find()->where(['user_id'=>$user->id])->one();
    		
    		if (empty($model)) {
    			return false;
    		}
    		
    		if ($user->email != $this->email) {
    			return false;
    		}
    		
    		if ($model->email_pessoal != $this->email) {
    			return false;
    		}
    		
    		$from = $this->email;
    	 
	    	if ($this->email) {
//	    		$to = $this->email;
	    		$to = 'paulorobto11@gmail.com';
	    	} else {
	    		$to = 'paulorobto11@gmail.com';
	    	}
	    	
	    	$model_empresa = \app\models\Empresa::find()->where(['id'=>$model->empresa_id])->one();
	    	
	    	if (empty($model_empresa)) {
	    		return false;
	    	}
	    	
	    	$senha 	   = rand(0,10000000);
	    	$modelUser = AuthUser::findOne($model->user_id);	
	    	$modelUser->password = $senha;
	    	$modelUser->password_repeat = $senha;
	    	$modelUser->generateAuthKey();
	    	if (!$modelUser->save()){
	    		return $errorStr = Util::renderModelErrors($modelUser->getErrors());
	    	}
	    	
	    	$funcoes = new Funcoes();
	    	$cnpj 	 = $funcoes->mascaraCnpj($model_empresa->cnpj);
	    	$fone 	 = $funcoes->mascaraFone($model_empresa->telefone1);
    		$subject = 'Redefinição de Senha do Sistema Consultorio Medico';
    		$msg = "Sua Senha de Acesso ao Sistema de Consultorio será modificada por motivo de sua solicitação! <br>
    				Você poderá usar a Senha Provisoria abaixo informada e ao acessar o sistema,
    				você poderá altera-la por uma de sua escolha...<br><br> 
					Senha de Acesso Provisoria: ".$senha."<br><br><br>
					Mensagem criada automaticamente, por favor não responda !<br><br><br>
							
					Obrigado, <br>
					Equipe de Administração do Sistema.";
    	 
	    	Yii::$app->mailer->compose()
	    	->setFrom($from)
	    	->setTo($to)
	    	->setSubject($subject)
	    	->setTextBody('Plain text content')
	    	->setHtmlBody($msg)
	    	->send();
	    	
	    	return true;
    	}
    	 
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = AuthUser::findByUsername($this->username);
        }

        return $this->_user;
    }


    
    public function attributeLabels()
    {
        return [
            'username' => 'Usuário',
            'password' => 'Senha',
            'rememberMe' => 'Mantenha-me conectado',
            'entity'=>'Empresa',
        ];
    }
}
