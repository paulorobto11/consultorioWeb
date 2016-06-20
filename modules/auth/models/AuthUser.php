<?php

namespace app\modules\auth\models;

use Yii;
use yii\helpers\Json;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "auth_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string $email
 */
class AuthUser extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public $password_repeat;
    
    public $empresa_id;
    public $empresa_identificacao;
    public $empresa_dados=[];
    
//     public $mobiliario_cadmob;
//     public $mobiliario_nome;
//     public $mobiliario_dados=[];
    
//     public $contador_id;
//     public $contador_nome;
//     public $contador_dados=[];
    
    
    public $usuarios_id;
    public $usuarios_nome;
    public $usuarios_dados=[];

    public $medico_id;
    public $medico_nome;
    public $medico_dados=[];
    
    public function init()
    {        
    	
    	$this->usuarios_id=Yii::$app->session->get('user.usuarios_id');
    	$this->usuarios_nome=Yii::$app->session->get('user.usuarios_nome');
    	$this->usuarios_dados=Yii::$app->session->get('user.usuarios_dados');
    	
        $this->empresa_id=Yii::$app->session->get('user.empresa_id');
        $this->empresa_identificacao=Yii::$app->session->get('user.empresa_identificacao');
        $this->empresa_dados=Yii::$app->session->get('user.empresa_dados');
        
        $this->medico_id=Yii::$app->session->get('user.medico_id');
        $this->medico_nome=Yii::$app->session->get('user.medico_nome');
        $this->medico_dados=Yii::$app->session->get('user.medico_dados');
        
        /*        
        $this->mobiliario_cadmob=Yii::$app->session->get('user.mobiliario_cadmob');
        $this->mobiliario_nome=Yii::$app->session->get('user.mobiliario_nome');
        $this->mobiliario_dados=Yii::$app->session->get('user.mobiliario_dados');*/
        
    }

    public static function tableName()
    {
        return 'auth_user';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username'], 'string', 'max' => 30],
            
      /*      [['email'], 'required'],*/
            [['email'], 'string', 'max' => 500],
            [['email'], 'email'],

            [['password_reset_token'], 'string', 'max' => 300],
                        
            [['password'], 'required', 'on' => 'insert'],
            [['password'], 'string', 'max' => 20],
            
            [['password_repeat'], 'required', 'on' => 'insert'],
            [['password_repeat'], 'string', 'max' => 20],
            [['password_repeat'], 'compare', 'compareAttribute' => 'password', 'message' => 'As senhas informadas estão diferentes'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Usuário',
            'password' => 'Senha',
            'password_repeat' => 'Repita a Senha',
            'password_reset_token' => 'Token de reset',
        ];
    }
    public  function initRule()
    {        
        Yii::$app->session->set('user.empresa_id',$this->empresa_id);
        Yii::$app->session->set('user.empresa_identificacao',$this->empresa_identificacao);
        Yii::$app->session->set('user.empresa_dados',$this->empresa_dados);
        
        Yii::$app->session->set('user.usuarios_id',$this->usuarios_id);
        Yii::$app->session->set('user.usuarios_nome',$this->usuarios_nome);
        Yii::$app->session->set('user.usuarios_dados',$this->usuarios_dados);
        
        Yii::$app->session->set('user.medico_id',$this->medico_id);
        Yii::$app->session->set('user.medico_nome',$this->medico_nome);
        Yii::$app->session->set('user.medico_dados',$this->medico_dados);
        
    }
    public function setUsuarios()
    {        
       if($this->id)
       {
           $model = \app\models\Usuarios::find()->where(['user_id'=>$this->id])->one();
		   
           if($model != NULL)
           {

               $this->usuarios_id=$model->id;
               $this->usuarios_nome=$model->apelido;
               if($model->nome != NULL || $model->nome!='')
               {
               	$this->usuarios_dados['nome']=$model->nome;
               }
                
               if($model->apelido != NULL || $model->apelido!='')
               {
                   $this->usuarios_dados['apelido']=$model->apelido;
               }
               if($model->email_pessoal != NULL || $model->email_pessoal!='')
               {
                   $this->usuarios_dados['email_pessoal']=$model->email_pessoal;
               }
               if($model->data_cadastro != NULL || $model->data_cadastro!='')
               {
                   $this->usuarios_dados['data_cadastro']=$model->data_cadastro;
               }
               if($model->tipo_user != NULL || $model->tipo_user!='')
               {
	               	if ($model->tipo_user == 1) {
	               		$this->usuarios_dados['tipo_usuario']= 'Usuario';
	               	} else {
	               		$this->usuarios_dados['tipo_usuario']= 'Medico';
	               	}
               }
                
               
//                echo "<pre>";
//                print_r ($this->usuarios_dados);
//                exit();
               		

               //$this->usuarios_dados=Json::encode($this->usuarios_dados);

           }
       }
    }
    
    public function setMedico($value)
    {
    	if($this->id)
    	{
    		$model = \app\models\Usuarios::find()->where(['id'=>$value])->one();
    		 
    		if($model != NULL)
    		{
    			$this->medico_id=$model->id;
    			$this->medico_nome=$model->apelido;
    			if($model->apelido != NULL || $model->apelido!='')
    			{
    				$this->medico_dados['apelido']=$model->apelido;
    			}
    			if($model->email_pessoal != NULL || $model->email_pessoal!='')
    			{
    				$this->medico_dados['email_pessoal']=$model->email_pessoal;
    			}
    			if($model->data_cadastro != NULL || $model->data_cadastro!='')
    			{
    				$this->medico_dados['data_cadastro']=$model->data_cadastro;
    			}
    		}
    	}
    }
    
    
    public function setEmpresa($value)
    {
    	
    	$model_usuario = \app\models\Usuarios::find()->where(['user_id'=>$value])->one();
        $model = \app\models\Empresa::find()->where(['id'=>$model_usuario->empresa_id])->one();

        $empresa = [];

        if($model != NULL)
        {
            $this->empresa_id=$model->id;
            $this->empresa_identificacao=$model->identificacao;
          /*  if($model->empresa_secretaria != NULL || $model->empresa_secretaria!='')
            {
                $empresa['secretaria']=$model->empresa_secretaria;
            }
            if($model->empresa_departamento != NULL || $model->empresa_departamento!='')
            {
            	$empresa['departamento']=$model->empresa_departamento;
            }*/
            
            if($model->cnpj != NULL || $model->cnpj!='')
            {
                $empresa['cnpj']=$model->cnpj;
            }
            if($model->site != NULL || $model->site!='')
            {
                $empresa['site']=$model->site;
            }
            if($model->razao_social != NULL || $model->razao_social!='')
            {
                $empresa['razao_social']=$model->razao_social;
            }
            if($model->telefone1 != NULL || $model->telefone1!='')
            {
                $empresa['telefone1']=$model->telefone1;
            }
            if($model->telefone2 != NULL || $model->telefone2!='')
            {
                $empresa['telefone2']=$model->telefone2;
            }
            if($model->cep != NULL || $model->cep!='')
            {
                $empresa['cep']=$model->cep;
            }
            if($model->logradouro != NULL || $model->logradouro!='')
            {
                $empresa['logradouro']=$model->logradouro;
            }
            if($model->email != NULL || $model->email!='')
            {
                $empresa['email']=$model->email;
            }

           $this->empresa_dados=$empresa;


        }
    }
    
    
    /** INCLUDE USER LOGIN VALIDATION FUNCTIONS**/
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    /* modified */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /* removed
        public static function findIdentityByAccessToken($token)
        {
            throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
        }
    */
    /**
     * Finds user by username
     *
     * @param  string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds user by password reset token
     *
     * @param  string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int)end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {

        $hash = Yii::$app->params['hash'];
        if (Yii::$app->getSecurity()->validatePassword($password.$hash,$this->password)) {
            return true;
        } else {
            return false;
        }

    }

    public static function validateUser($username,$entity)
    {

    	 
       $_user = self::findByUsername($username);
//        echo "<pre>xxxx ".$entity;
//        print_r ($_user);
//        exit();
        
        if($_user != NULL)
        {
        	$model_usuarios = [];
             $model_usuarios=\app\models\usuarios::find()
               ->where(['id'=>$entity])
                ->one();
        	    
            if($model_usuarios != NULL)
            {
                return true;
            }else{
                return false;
            }

        }

           return false;

    }

    /**
     * Generates password hash from password and sets it to the model
     *
     */

    public function setPassword($password)
    {
        $hash = Yii::$app->params['hash'];
        return Yii::$app->getSecurity()->generatePasswordHash($password . $hash);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
      $this->auth_key=Yii::$app->getSecurity()->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->getSecurity()->generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }


    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            $this->password = $this->setPassword($this->password);

            return true;
        } else {
            return false;
        }
    }


    /** EXTENSION MOVIE **/

}
