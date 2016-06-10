<?php

namespace app\controllers;

use Yii;
use app\models\Agenda;
use app\models\AgendaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\HorarioSearch;
use app\models\AgendaData;
use app\models\ClientesSearch;
use app\models\Clientes;
use app\models\Funcoes;
use app\models\Horario;
use app\models\Tempcon;

/**
 * AgendaController implements the CRUD actions for Agenda model.
 */
class AgendaController extends Controller
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
     * Lists all Agenda models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AgendaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Agenda model.
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
     * Creates a new Agenda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Agenda();
        $searchModel = new HorarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        if (isset($_REQUEST['alterar_data'])) {
	        $funcoes = new Funcoes();
	         
	        $model_agenda = new Agenda();
	        $model_agenda->bsc_medico = isset($_REQUEST['medico'])?$_REQUEST['medico']:2;
	        $model_agenda->bsc_data_agenda = isset($_REQUEST['data'])?$_REQUEST['data']:date('d/m/Y');
	        
	        $model_data = AgendaData::findOne(['medico'=>$model_agenda->bsc_medico]);
	        $model_data->data_base = $funcoes->inverteData($model_agenda->bsc_data_agenda);
	        $transaction = \Yii::$app->db->beginTransaction();
	        try {
	        	if (!$flag = $model_data->save(false)) {
	        		$key = 1;
	        	}
	        	$transaction->commit();
	        } catch (Exception $e) {
	        	$transaction->rollBack();
	        	echo $e->getMessage();
	        	exit;
	        }
	         
	        $model = new Agenda();
	        $searchModel = new HorarioSearch();
	        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
	        return $this->renderAjax('grid_agenda', [
	        		'model' 	  => $model,
	        		'searchModel' => $searchModel,
	        		'dataProvider' => $dataProvider,
	        ]);
        }

        if (isset($_REQUEST['enviar_consulta'])) {
	        $funcoes = new Funcoes();
	         
	        $model_agenda = new Agenda();
	        $model_agenda->bsc_medico = $_REQUEST['bsc_medico'];
	        $model_agenda->bsc_data_agenda = $_REQUEST['bsc_data'];
	        
	        $model_temp = Tempcon::findOne(['medico'=>$model_agenda->bsc_medico]);
	        if (!empty($model_temp)) {
	        	echo "1";
	        	exit();
	        }
	         
	        $data = $funcoes->inverteData($_REQUEST['bsc_data']);
	        $model_agenda = Agenda::findOne(['hora'=>$_REQUEST['id'],'medico'=>$_REQUEST['bsc_medico'],'data'=>$data]);
	        if (empty($model_agenda)) {
	        	echo '2';
	        	exit();
	        }
	         
	        $model_agenda->confirmada = 1;
	         
	        $model_temp = new Tempcon();
	        $model_temp->id = '';
	        $model_temp->data = $model_agenda->data;
	        $model_temp->medico = $model_agenda->medico;
	        $model_temp->codigo = $model_agenda->codigo;
	        $model_temp->tipo = $model_agenda->tipo;
	        $model_temp->hora = $model_agenda->hora;
	        $model_temp->busca = 0;
	        $transaction = \Yii::$app->db->beginTransaction();
	        try {
	        	if (!$flag = $model_temp->save(false)) {
	        		$key = 1;
	        	}
	        	if (!$flag = $model_agenda->save(false)) {
	        		$key = 1;
	        	}
	        	$transaction->commit();
	        } catch (Exception $e) {
	        	$transaction->rollBack();
	        	echo $e->getMessage();
	        	exit;
	        }
	         
	        $model = new Agenda();
	        $searchModel = new HorarioSearch();
	        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
	        return $this->renderAjax('grid_agenda', [
	        		'model' 	  => $model,
	        		'searchModel' => $searchModel,
	        		'dataProvider' => $dataProvider,
	        ]);
        }

        if (isset($_REQUEST['excluir_consulta'])) {
        	$funcoes = new Funcoes();
        
        	$model_agenda = new Agenda();
        	$model_agenda->bsc_medico = $_REQUEST['bsc_medico'];
        	$model_agenda->bsc_data_agenda = $_REQUEST['bsc_data'];
        	 
        	$model_temp = Tempcon::findOne(['medico'=>$model_agenda->bsc_medico]);
        	if (!empty($model_temp)) {
        		$model_temp->delete();
        	}
        
        	$data = $funcoes->inverteData($_REQUEST['bsc_data']);
        	$model_agenda = Agenda::findOne(['hora'=>$model_temp->hora,'medico'=>$model_temp->medico,'data'=>$model_temp->data]);
        	$model_agenda->confirmada = 0;
        	$transaction = \Yii::$app->db->beginTransaction();
        	try {
        		if (!$flag = $model_agenda->save(false)) {
        			$key = 1;
        		}
        		$transaction->commit();
        	} catch (Exception $e) {
        		$transaction->rollBack();
        		echo $e->getMessage();
        		exit;
        	}
        
        	$model = new Agenda();
        	$searchModel = new HorarioSearch();
        	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        	return $this->renderAjax('grid_agenda', [
        			'model' 	  => $model,
        			'searchModel' => $searchModel,
        			'dataProvider' => $dataProvider,
        	]);
        }
        
        
        if (isset($_REQUEST['salvar'])) {
        	if ($_REQUEST['salvar'] == 2) {
        		$funcoes = new Funcoes();
        		$codigo_cliente = Clientes::find()->count()+1;
        		
        		$model_cliente = new Clientes();
        		$model_cliente->codigo    = $codigo_cliente; 
        		$model_cliente->nome      = $_REQUEST['nome'];
        		$model_cliente->fone      = $funcoes->retiraMascaras($_REQUEST['fone']);
        		$model_cliente->celular   = $funcoes->retiraMascaras($_REQUEST['celular']);
        		$model_cliente->formapgto = $_REQUEST['formapgto'];
        		$model_cliente->convenio  = $_REQUEST['convenio'];
        		$model_cliente->matricula = $_REQUEST['matricula'];
        		$model_cliente->dtavalid  = $funcoes->inverteData($_REQUEST['dtavalid']);
        		$model_cliente->vlrcons   = $_REQUEST['vlrcons'];
        		
        		$transaction = \Yii::$app->db->beginTransaction();
        		try {
        			if (!$flag = $model_cliente->save(false)) {
        				$key = 1;
        				$message = 'Atenção - Não foi possivel efetuar o Cancelamento da Nota Fiscal !';
        			}
        			$transaction->commit();
        		} catch (Exception $e) {
        			$transaction->rollBack();
        			echo $e->getMessage();
        			exit;
        		}
        		
        		$params = [
        				'filtros' => '1',
        				'bsc_data'	 => '',
        				'bsc_cliente' 	 => $model_cliente->codigo,
        		];
        		
        		$model_agenda = new Agenda();
        		$model_agenda->hora   = $_REQUEST['id'];
        		$model_agenda->medico = $_REQUEST['medico'];
        		
        		 
        		$searchModel = new ClientesSearch();
        		$dataProvider = $searchModel->search($params);
        		return $this->renderAjax('buscar_cadastro/index', [
        				'model_agenda' => $model_agenda,
        				'searchModel' => $searchModel,
        				'dataProvider' => $dataProvider,
        		]);
        	} else {
        		$codigo_cliente = $_REQUEST['id_cliente'];
        	}

        	$model_data = new AgendaData();
        	 
        	$data_base = $model_data->entra_data($_REQUEST['medico']);
        	
        	$model_agenda = Agenda::findAll(['medico'=>$_REQUEST['medico'],'codigo'=>$_REQUEST['id_cliente'],'data'=>$data_base]);
//         	echo "<pre>";
//         	print_r ($model_agenda);
//         	exit();
        	if (!empty($model_agenda)) {
        		echo '1';
        		exit();
        	}
        	
        	$model_cliente = Clientes::findOne(['codigo'=>$codigo_cliente]);
        	
        	$model_agenda = new Agenda();
        	$model_agenda->id        = '';
        	$model_agenda->medico    = $_REQUEST['medico'];
        	$model_agenda->codigo    = $_REQUEST['id_cliente'];
        	$model_agenda->tipo      = 1;
        	$model_agenda->fone      = $model_cliente->fone;
        	$model_agenda->data      = $data_base;
        	$model_agenda->hora      = $_REQUEST['id'];
        	$model_agenda->modopgto  = $model_cliente->formapgto;
        	$model_agenda->vlrpgto   = $model_cliente->vlrcons;
        	
        	$transaction = \Yii::$app->db->beginTransaction();
        	try {
        		if (!$flag = $model_agenda->save(false)) {
        			$key = 1;
        			$message = 'Atenção - Não foi possivel efetuar o Cancelamento da Nota Fiscal !';
        		}
        		$transaction->commit();
        	} catch (Exception $e) {
        		$transaction->rollBack();
        		echo $e->getMessage();
        		exit;
        	}
        	
        	$model = new Agenda();
        	$searchModel = new HorarioSearch();
        	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        	return $this->renderAjax('grid_agenda', [
        			'model' 	  => $model,
        			'searchModel' => $searchModel,
        			'dataProvider' => $dataProvider,
        	]);
        }
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
        	
        	$funcoes = new Funcoes();

        	$model_agenda = new Agenda();
        	$model_agenda->bsc_medico = isset($_REQUEST['medico'])?$_REQUEST['medico']:2;
        	$model_agenda->bsc_data_agenda = isset($_REQUEST['data'])?$_REQUEST['data']:date('d/m/Y');
        	
            if (empty($_REQUEST)) {
	        	$model_data = AgendaData::findOne(['medico'=>$model_agenda->bsc_medico]);
	        	$model_data->data_base = $funcoes->inverteData($model_agenda->bsc_data_agenda); 
	        	$transaction = \Yii::$app->db->beginTransaction();
	        	try {
	        		if (!$flag = $model_data->save(false)) {
	        			$key = 1;
	        		}
	        		$transaction->commit();
	        	} catch (Exception $e) {
	        		$transaction->rollBack();
	        		echo $e->getMessage();
	        		exit;
	        	}
            }
        	 
			$model       = new Horario();
			$searchModel = new HorarioSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->render('create', [
            		'model_agenda' => $model_agenda,
                	'model' => $model,
            		'searchModel' => $searchModel,
            		'dataProvider' => $dataProvider,
            		
            ]);
        }
    }
    
    public function actionEnviar() {
    	$funcoes = new Funcoes();
    	
    	$model_agenda = new Agenda();
    	$model_agenda->bsc_medico = $_REQUEST['bsc_medico'];
    	$model_agenda->bsc_data_agenda = $_REQUEST['bsc_data'];
    	 
    	$model_temp = Tempcon::findOne(['medico'=>$model_agenda->bsc_medico]);
    	if (!empty($model_temp)) {
    		echo "1";
    		exit();
    	}
    	
    	$data = $funcoes->inverteData($_REQUEST['bsc_data']);
    	$model_agenda = Agenda::findOne(['hora'=>$_REQUEST['id'],'medico'=>$_REQUEST['bsc_medico'],'data'=>$data]);
    	if (empty($model_agenda)) {
    		echo '2';
    		exit();
    	}
    	
    	$model_agenda->confirmada = 1;
    	
//     	echo "<pre>";
//     	print_r ($model_agenda);
//     	exit();
    	
    	$model_temp = new Tempcon();
    	$model_temp->data = $model_agenda->data;
    	$model_temp->medico = $model_agenda->medico;
    	$model_temp->codigo = $model_agenda->codigo;
    	$model_temp->tipo = $model_agenda->tipo;
    	$model_temp->hora = $model_agenda->hora;
    	$model_temp->busca = 0;
    	$transaction = \Yii::$app->db->beginTransaction();
    	try {
    		if (!$flag = $model_temp->save(false)) {
    			$key = 1;
    		}
    		if (!$flag = $model_agenda->save(false)) {
    			$key = 1;
    		}
    		$transaction->commit();
    	} catch (Exception $e) {
    		$transaction->rollBack();
    		echo $e->getMessage();
    		exit;
    	}
    	
    	$model = new Agenda();
    	$searchModel = new HorarioSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    	return $this->renderAjax('grid_agenda', [
    			'model' 	  => $model,
    			'searchModel' => $searchModel,
    			'dataProvider' => $dataProvider,
    	]);
    	 
    	
    }

    /**
     * Updates an existing Agenda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Agenda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
    public function actionEntra_cadastro()
    {
    	$model_agenda = new Agenda();
    	$model_agenda->hora   = $_REQUEST['id'];
    	$model_agenda->medico = $_REQUEST['medico'];
    	$searchModel = new ClientesSearch();
    	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
    	echo $this->renderAjax('buscar_cadastro/index', [
    			'model_agenda' => $model_agenda,
    			'searchModel' => $searchModel,
    			'dataProvider' => $dataProvider,
    	]);
    }
    
    public function actionBuscar_cadastro()
    {
    	$funcoes = new Funcoes();
    	$model_agenda = new Agenda();
    	
    	$model_agenda->hora   = $_REQUEST['id'];
    	$model_agenda->medico = $_REQUEST['medico'];
    	
    	$model_agenda->bsc_data	 = $funcoes->inverteData($_REQUEST['bsc_data']);
    	$model_agenda->bsc_cliente  = $_REQUEST['bsc_cliente'];
    	 
    	$params = [
    			'filtros' => '1',
    			'bsc_data'	 => $_REQUEST['bsc_data'],
    			'bsc_cliente' 	 => $_REQUEST['bsc_cliente'],
    	];
    	
    	$searchModel = new ClientesSearch();
    	$dataProvider = $searchModel->search($params);
    
    	echo $this->renderAjax('buscar_cadastro/grid_index', [
    			'model_agenda' => $model_agenda,
    			'searchModel' => $searchModel,
    			'dataProvider' => $dataProvider,
    	]);
    }
    
    
    public function actionCadastro()
    {
    	$funcoes = new Funcoes();
    	$model_agenda = new Agenda();
    	 
    	$model_agenda->hora   = $_REQUEST['id'];
    	$model_agenda->medico = $_REQUEST['medico'];
    	
    	$model = new Clientes();
   		return $this->renderAjax('buscar_cadastro/_form', [
    				'model' => $model,
    				'model_agenda' => $model_agenda,
   		]);
    }
    
    public function actionConsultar_cliente()
    {
    	$funcoes = new Funcoes();
    	 
    	$data = $funcoes->inverteData($_REQUEST['bsc_data']);
    	$model_agenda = Agenda::findOne(['hora'=>$_REQUEST['id'],'medico'=>$_REQUEST['bsc_medico'],'data'=>$data]);
    	if (empty($model_agenda)) {
    		echo '2';
    		exit();
    	}
    	 
    	$model = Clientes::findOne(['codigo'=>$model_agenda->codigo]);
    	return $this->renderAjax('buscar_cadastro/_form', [
    			'model' => $model,
    			'model_agenda' => $model_agenda,
    	]);
    }
    
    
    

    public function actionEntra_clientes() {
    	
    }
    

    /**
     * Finds the Agenda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Agenda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Agenda::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
