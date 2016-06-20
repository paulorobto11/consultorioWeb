<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserSenha;
use app\models\Usuarios;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'logout'],
                'rules' => [
                    [
                        'actions' => ['index', 'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
    	$usuario 		= Usuarios::find()->where(['id' => \Yii::$app->user->identity->usuarios_id])->one();
    	
    	if ($usuario->tipo_user == 2) {
   			return $this->render('index_gerente');
    	} else {
    		return $this->render('index');
    	}
    }
    
    public function actionLogin()
    {
        $cookies = Yii::$app->response->cookies;

        $cookies->remove('_gercpn');

        $this->layout = 'login';

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $request = Yii::$app->request;
        $model = new \app\modules\auth\models\LoginForm();
        

        
        if($request->isPost)
        {
        	 
            if($model->load($request->post()))
            {
            	 
            	//$model->tipo_identify = $_REQUEST['LoginForm']['tipo_identify'];
            	$model->codigo = $_REQUEST['LoginForm']['codigo'];
            	 
                if($model->validate())
                {
//                 	echo "aaa00";
//                 	exit();
                	 
                    if($model->login())
                    {
                    	 
                        return $this->goBack();
                    }
                }
            }
        }

        return $this->render('@app/modules/auth/views/auth-user/login', [
            'model' => $model
        ]);
    }
    
    public function actionLembrete()
    {
    	$cookies = Yii::$app->response->cookies;
    
    	$cookies->remove('_gercpn');
    
    	$this->layout = 'login';
    
    	if (!\Yii::$app->user->isGuest) {
    		return $this->goHome();
    	}
    
    	$request = Yii::$app->request;
    	$model = new \app\modules\auth\models\UserSenha();
    
    	if($request->isPost)
    	{
    		if($model->load($request->post()))
    		{
    			$model->username = $_REQUEST['UserSenha']['username'];
    			$model->email = $_REQUEST['UserSenha']['email'];
    			if($model->lembrete()) {
    				if ($model->envioSenha()) {
		    			$model_user = \app\modules\auth\models\AuthUser::findByUsername($model->username);
		    			$this->redirect(['site/login']);
    				}
    			}
    		}
    	}
    
    	return $this->render('@app/modules/auth/views/auth-user/lembrete', [
    			'model' => $model
    	]);
    }
    

    public function actionLogout()
    {
        Yii::$app->user->logout();
        $session = Yii::$app->session;
        $session->close();
        $session->destroy();

        $this->redirect(['site/login']);
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
