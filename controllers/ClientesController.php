<?php

namespace app\controllers;

use Yii;
use app\models\Clientes;
use app\models\ClientesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Agenda;
use app\models\Funcoes;

define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'].'consultorioWeb/web/uploads/');

date_default_timezone_set('America/Sao_Paulo');
/**
 * ClientesController implements the CRUD actions for Clientes model.
 */
class ClientesController extends Controller
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
     * Lists all Clientes models.
     * @return mixed
     */
    public function actionIndex()
    {
    	$model = new Clientes();
    	
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	
    	if (isset($_REQUEST['filtros'])) {
	    	$model->bsc_data_inicio	 = $_REQUEST['bsc_data_inicio'];
	    	$model->bsc_data_final 	 = $_REQUEST['bsc_data_final'];
	    	$model->bsc_cliente		 = $_REQUEST['bsc_cliente'];
	    	$model->bsc_tipo	 	 = $_REQUEST['bsc_tipo'];
	    	$model->bsc_forma 		 = $_REQUEST['bsc_forma'];
	    	 
	    	$params = [
	    			'filtros' => '3',
	    			'bsc_data_inicio'	 => $_REQUEST['bsc_data_inicio'],
	    			'bsc_data_final' 	 => $_REQUEST['bsc_data_final'],
	    			'bsc_cliente' 		 => $_REQUEST['bsc_cliente'],
	    			'bsc_tipo'		 	 => $_REQUEST['bsc_tipo'],
	    			'bsc_forma' 		 => $_REQUEST['bsc_forma'],
	    	];
	    	
	        $searchModel = new ClientesSearch();
	    	$dataProvider = $searchModel->search($params);
	    	return $this->renderAjax('gridView', [
	    			'searchModel' => $searchModel,
	    			'dataProvider' => $dataProvider,
	    	]);
    	}
    	
    	$model->bsc_tipo = '';
    	
    	if (isset($_REQUEST['p'])) {
    		$model->bsc_tipo = 2;
   			$model->bsc_data_inicio	 = date('01/m/Y');
   			$model->bsc_data_final 	 = date('d/m/Y');
    	}
    	 
    	$params = [
    			'filtros' => '3',
    			'bsc_data_inicio'	 => $model->bsc_data_inicio,
    			'bsc_data_final' 	 => $model->bsc_data_final,
    			'bsc_cliente' 		 => '',
    			'bsc_tipo'		 	 => $model->bsc_tipo,
    			'bsc_forma' 		 => '',
    	];
    	
	    $searchModel = new ClientesSearch();
    	$dataProvider = $searchModel->search($params);
    	
    	return $this->render('index', [
    			'model'       => $model,
    			'searchModel' => $searchModel,
    			'dataProvider' => $dataProvider,
    	]);
    }

    public function actionSalvar_imagem()
    {
    	$imagem = str_replace('data:image/png;base64,','',$_POST['imagem']);
    	
    	$img = rand(0,10000000).'.jpg';
    	$this->base64_to_jpeg($imagem,$img);
    	
    	$model_cliente = Clientes::findOne(['codigo'=>$_REQUEST['codigo']]);
    	if (!empty($model_cliente)) {
    		$transaction = \Yii::$app->db->beginTransaction();
    		$model_cliente->foto = $img;
    		try {
    			if (!$flag = $model_cliente->save(false)) {
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
    	$model_cliente = Clientes::findOne(['codigo'=>$_REQUEST['codigo']]);
    	if (!empty($model_cliente)) {
    		$transaction = \Yii::$app->db->beginTransaction();
    		$model_cliente->foto = '';
    		try {
    			if (!$flag = $model_cliente->save(false)) {
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
    
    public function actionEntra_cadastro()
    {
    	
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
    	$model_agenda = new Agenda();
    	$model_agenda->hora   = $_REQUEST['id'];
    	$model_agenda->medico = $_REQUEST['medico'];
    	$searchModel = new ClientesSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
    	return $this->renderAjax('buscar_cadastro/index', [
    			'model_agenda' => $model_agenda,
    			'searchModel' => $searchModel,
    			'dataProvider' => $dataProvider,
    	]);
    }
    
    function base64_to_jpeg($base64img,$img) {
    	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
    	$data = base64_decode($base64img);
    	$file = UPLOAD_DIR . $img;
    	file_put_contents($file, $data);    	
    }    
    
    public function actionIdade() {
			$data = $_REQUEST['valor'];  
			// Separa em dia, mês e ano 
			list($dia, $mes, $ano) = explode('/', $data);  
			// Descobre que dia é hoje e retorna a unix timestamp 
			$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y')); 
			// Descobre a unix timestamp da data de nascimento do fulano 
			$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);  
			// Depois apenas fazemos o cálculo já citado :) 
			$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
			
			echo str_pad($idade, 2,0, STR_PAD_LEFT);     	
    }
    

    /**
     * Displays a single Clientes model.
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
     * Creates a new Clientes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Clientes();
        if (!isset(Yii::$app->user->identity)) {
        	return $this->redirect(Yii::$app->user->loginUrl);
        }
        
        if ($model->load(Yii::$app->request->post())) {
        	$funcoes = new Funcoes();
        	$codigo_cliente = Clientes::find()->count()+1;
        	$model->codigo    = $codigo_cliente;
        	$model->nome      = strtoupper($model->nome);
        	$model->cpf       = $funcoes->retiraMascaras($model->cpf);
        	$model->fone      = $funcoes->retiraMascaras($model->fone);
        	$model->celular   = $funcoes->retiraMascaras($model->celular);
        	$model->cep  	  = $funcoes->retiraMascaras($model->cep);
        	$model->dtnascto  = $funcoes->inverteData($model->dtnascto);
        	$model->dtavalid  = $funcoes->inverteData($model->dtavalid);
        	$model->foto      = $_REQUEST['foto_cliente'] ? $_REQUEST['foto_cliente'] : '';
        	$model->data_cadastro = date('Y-m-d');
        	$model->tipo      = 0;
        	$transaction = \Yii::$app->db->beginTransaction();
        	try {
        		if (!$flag = $model->save(false)) {
        			$key = 1;
        			$message = 'Atenção - Não foi possivel efetuar o Cancelamento da Nota Fiscal !';
        		}
        		$transaction->commit();
        	} catch (Exception $e) {
        		$transaction->rollBack();
        		echo $e->getMessage();
        		exit;
        	}
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Clientes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if (!isset(Yii::$app->user->identity)) {
        	return $this->redirect(Yii::$app->user->loginUrl);
        }
        

        if ($model->load(Yii::$app->request->post())) {
        	$funcoes = new Funcoes();
        	$model->nome      = strtoupper($model->nome);
        	$model->cpf       = $funcoes->retiraMascaras($model->cpf);
        	$model->fone      = $funcoes->retiraMascaras($model->fone);
        	$model->celular   = $funcoes->retiraMascaras($model->celular);
        	$model->cep  	  = $funcoes->retiraMascaras($model->cep);
        	$model->dtnascto  = $funcoes->inverteData($model->dtnascto);
        	$model->dtavalid  = $funcoes->inverteData($model->dtavalid);
        	$model->foto      = $_REQUEST['foto_cliente'] ? $_REQUEST['foto_cliente'] : '';
        	$model->tipo      = 0;
        	$transaction = \Yii::$app->db->beginTransaction();
        	try {
        		if (!$flag = $model->save(false)) {
        			$key = 1;
        			$message = 'Atenção - Não foi possivel efetuar o Cancelamento da Nota Fiscal !';
        		}
        		$transaction->commit();
        	} catch (Exception $e) {
        		$transaction->rollBack();
        		echo $e->getMessage();
        		exit;
        	}
        	return $this->redirect(['index']);
        } else {
        	$funcoes = new Funcoes();
        	
        	$model->dtnascto  = $funcoes->ajustaData($model->dtnascto);
        	$model->dtavalid  = $funcoes->ajustaData($model->dtavalid);
        	$model->dtacons  = $funcoes->ajustaData($model->dtacons);
        	$model->dataultima  = $funcoes->ajustaData($model->dataultima);
        	$model->dtaproxima  = $funcoes->ajustaData($model->dtaproxima);
        	 
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Clientes model.
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
     * Finds the Clientes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Clientes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Clientes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
