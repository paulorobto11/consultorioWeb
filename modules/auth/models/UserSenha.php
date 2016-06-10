<?php

namespace app\modules\auth\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class UserSenha extends Model
{
    public $username;
    public $password;
    public $tipo_identify;
    public $cpf;
    public $cnpj;
    public $inscmob;
    public $email;
    
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
	   	    
	   	    if ($this->tipo_identify == 1) {
	   	    	$model_empresa = \app\models\Mobiliario::find()->where(['cadmob'=>$this->inscmob])->one();
	   	    } else {
	   	    	if ($this->tipo_identify == 2) $documento = $this->cpf;
	   	    	if ($this->tipo_identify == 3) $documento = $this->cnpj;
	   	    	$model_empresa = \app\models\Mobiliario::find()->where(['cpfcnpj'=>$documento])->one();
	   	    }
	   	    
	   	    if ($user->email != $this->email) {
	   	    	echo "<hr>".$user->email;
	   	    	exit();
	   	    	return false;
	   	    }
	   	    
	   	    if ($model->empresa_id != $model_empresa->cadmob) {
	   	    	return false;
	   	    }
	   	    
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
//         }
        return false;
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
