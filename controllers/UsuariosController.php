<?php

namespace app\controllers;

use Yii;
use app\models\Usuarios;
use app\models\UsuariosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use app\models\Cidade;
use app\modules\auth\models\AuthUser;

use yii\web\UploadedFile;
use app\base\Util;

define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'].'consultorioWeb/web/uploads/usuarios/imagem/');

/**
 * UsuariosController implements the CRUD actions for Usuarios model.
 */
class UsuariosController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Usuarios models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsuariosSearch();
        $params['empresa_id'] = Json::decode(Yii::$app->user->identity->empresa_id);
        $dataProvider = $searchModel->search($params);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuarios model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Usuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Usuarios();
        $model->empresa_id = Yii::$app->user->identity->empresa_id;
        $errorStr = '';
        $modelUser = new AuthUser();
        
        if ($model->load(Yii::$app->request->post()) && $modelUser->load(Yii::$app->request->post())) {
        	try {
        		$transaction = \Yii::$app->db->beginTransaction();
        
        		if (empty($modelUser->password)){
        			throw new \Exception('Senha do Usuario não informada - Verifique !');
        		}
        		if ($modelUser->password != $modelUser->password_repeat){
        			throw new \Exception('As senhas informadas estão diferentes - Verifique !');
        		}
        
        		//Salva o User
        		$modelUser->email = $model->email_pessoal;
        		$modelUser->generateAuthKey();
        		if (!$modelUser->save()){
        			$errorStr = Util::renderModelErrors($modelUser->getErrors());
        			throw new \Exception($errorStr);
        		}
        
        		//Salva o usuario
        		$model->user_id = $modelUser->id;
        		if (!$model->save()){
        			$errorStr = Util::renderModelErrors($modelUser->getErrors());
        			throw new \Exception($errorStr);
        		}
        
        		$transaction->commit();
        
        		return $this->redirect(['index']);
        	} catch (\Exception $e) {
        		$transaction->rollBack();
        
        		return $this->render('create', [
        				'model' => $model,
        				'modelUser' => $modelUser,
        				'error' => $e->getMessage(),
        		]);
        	}
        } else {
        	return $this->render('create', [
        			'model' => $model,
        			'modelUser' => $modelUser,
        			'error' => $errorStr,
        	]);
        }
        

//         if ($model->load(Yii::$app->request->post()) && $model->save()) {
//             return $this->redirect(['view', 'id' => $model->id]);
//         } else {
//             return $this->render('create', [
//                 'model' => $model,
//             ]);
//         }
    }

    /**
     * Updates an existing Usuarios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelUser = AuthUser::findOne(['id'=>$model->user_id]);
        
        if ($model->load(Yii::$app->request->post())) {
        	$salvar_user = 0;
        	$modelUser->load(Yii::$app->request->post());
        	
        	if (($_REQUEST['AuthUser']['password'])){
	        	if ($modelUser->password != $modelUser->password_repeat){
	        		throw new \Exception('As senhas informadas estão diferentes - Verifique !');
	        	}
	        	$modelUser->generateAuthKey();
	        	$salvar_user = 1;
        	}
        	
        	if ($modelUser->email != $model->email_pessoal){
        		$modelUser->email = $model->email_pessoal;
        		$salvar_user = 1;
        	}
        	
        	//Salva o User
        	if ($salvar_user == 1) {
	        	if (!$modelUser->save()){
	        		$errorStr = Util::renderModelErrors($modelUser->getErrors());
	        		throw new \Exception($errorStr);
	        	}
        	}
        	
        	$model->save();
        	 
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            	'modelUser' => $modelUser,
            	'error' => '',
            ]);
        }
    }
    
    public function actionUpdateUsuario()
    {
    	$errorStr = '';
    	$model = $this->findModel(\Yii::$app->user->identity->usuarios_id);
    	$modelUser = AuthUser::findOne($model->user_id);
    	\Yii::$app->session->set('colab.id',\Yii::$app->user->identity->usuarios_id);
    	if ($model->load(Yii::$app->request->post())) {
    		$salvar_user = 0;
    		$modelUser->load(Yii::$app->request->post());
    		 
    		if (($_REQUEST['AuthUser']['password'])){
    			if ($modelUser->password != $modelUser->password_repeat){
    				throw new \Exception('As senhas informadas estão diferentes - Verifique !');
    			}
    			$modelUser->generateAuthKey();
    			$salvar_user = 1;
    		}
    		 
    		if ($modelUser->email != $model->email_pessoal){
    			$modelUser->email = $model->email_pessoal;
    			$salvar_user = 1;
    		}
    		 
    		//Salva o User
    		if ($salvar_user == 1) {
    			if (!$modelUser->save()){
    				$errorStr = Util::renderModelErrors($modelUser->getErrors());
    				throw new \Exception($errorStr);
    			}
    		}
    		 
    		$model->save();
   			return $this->redirect(['/site/index']);
    	} else {
    		return $this->render('updateusuario', [
    				'model' => $model,
    				'modelUser' => $modelUser,
    				'error' => $errorStr,
    		]);
    	}
    }
    
    public function actionSalvar_imagem()
    {
    	$imagem = str_replace('data:image/png;base64,','',$_POST['imagem']);
    	 
    	$img = rand(0,10000000).'.jpg';
    	$this->base64_to_jpeg($imagem,$img);
    	 
    	$model_usuarios = Usuarios::findOne(['id'=>$_REQUEST['codigo']]);
    	if (!empty($model_usuarios)) {
    		$transaction = \Yii::$app->db->beginTransaction();
    		$model_usuarios->foto = $img;
    		try {
    			if (!$flag = $model_usuarios->save(false)) {
    				$key = 1;
    			}
    			$transaction->commit();
    		} catch (Exception $e) {
    			$transaction->rollBack();
    			echo $e->getMessage();
    			exit;
    		}
    	}
    	echo $img;
    }
    
    public function actionExcluir_imagem() {
    	$model_usuarios = Usuarios::findOne(['id'=>$_REQUEST['codigo']]);
    	if (!empty($model_usuarios)) {
    		$transaction = \Yii::$app->db->beginTransaction();
    		$model_usuarios->foto = '';
    		try {
    			if (!$flag = $model_usuarios->save(false)) {
    				$key = 1;
    			}
    			$transaction->commit();
    		} catch (Exception $e) {
    			$transaction->rollBack();
    			echo $e->getMessage();
    			exit;
    		}
    	}
    	 
    	echo '0';
    	 
    }
    
    
    function base64_to_jpeg($base64img,$img) {
    	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
    	$data = base64_decode($base64img);
    	$file = UPLOAD_DIR . $img;
    	file_put_contents($file, $data);
    }
    
    
    /**
     * Deletes an existing Usuarios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usuarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usuarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuarios::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
