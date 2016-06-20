<?php

namespace app\modules\auth\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    public $entity=[];
    public $identify;
    public $tipo_identify;
    public $codigo;
    public $email;
    
    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            ['username', 'required','message'=>'Preencha campo "{attribute}"!'],
            ['password', 'required','message'=>'Preencha campo "{attribute}"!'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            /*['identify', 'required', 'when' => function ($model) {
                    return $model->identify == '';
	            }, 'whenClient' => "function (attribute, value) {
       						return $('#loginform-identify').val() == '';
   						 }",'message'=>'Obrigatório uma "{attribute}" selecionada!'],*/
    
            // password is validated by validatePassword()
            ['password', 'validateUser'],
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
            

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError('password', 'Usuário ou senha incorreto.');
                $this->addError('username', 'Usuário ou senha incorreto.');
            }
            else {
           		$this->identify = $this->codigo;
                $empresa = AuthUser::validateUser($user,$this->identify);
//                   echo "<pre>";
//                  print_r ($empresa);
//                  exit();
                
                if(!$empresa)
                {
                    $this->addError('inscmob', 'Usuário não cadastrado para essa empresa.');
                }
            }


        }
    }


    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
    	
        if ($this->validate()) {
            $this->getUser()->setEmpresa($this->getUser()->id);
            $this->getUser()->setUsuarios($this->getUser()->id);
            $this->getUser()->setMedico($this->identify);
            $this->getUser()->initRule();
            
            return Yii::$app->user->login($this->getUser(), 3600*24*7);
        }
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
