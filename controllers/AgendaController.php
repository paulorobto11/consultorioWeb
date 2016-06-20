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
use yii\helpers\Url;

date_default_timezone_set('America/Sao_Paulo');

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
        $model = new Agenda();
        
        if (!isset(Yii::$app->user->identity)) {
        	return $this->redirect(Yii::$app->user->loginUrl);
        }
        
        if (isset($_REQUEST['filtros'])) {
        	$model->bsc_data_inicio	 = $_REQUEST['bsc_data_inicio'];
        	$model->bsc_data_final 	 = $_REQUEST['bsc_data_final'];
        	$model->bsc_cliente		 = $_REQUEST['bsc_cliente'];
        	$model->bsc_tipo	 	 = $_REQUEST['bsc_tipo'];
        	$model->bsc_forma 		 = $_REQUEST['bsc_forma'];
        	$model->bsc_confirmada	 = $_REQUEST['bsc_confirmada'];
        	
        	$params = [
        			'filtros' => '1',
        			'bsc_data_inicio'	 => $_REQUEST['bsc_data_inicio'],
        			'bsc_data_final' 	 => $_REQUEST['bsc_data_final'],
        			'bsc_cliente' 		 => $_REQUEST['bsc_cliente'],
        			'bsc_tipo'		 	 => $_REQUEST['bsc_tipo'],
        			'bsc_forma' 		 => $_REQUEST['bsc_forma'],
        			'bsc_confirmada' 	 => $_REQUEST['bsc_confirmada'],
        	];
        	 
        	$searchModel = new AgendaSearch();
        	$dataProvider = $searchModel->search($params);
        	return $this->renderAjax('gridView', [
        			'searchModel' => $searchModel,
        			'dataProvider' => $dataProvider,
        	]);
        }

        $model->bsc_data_inicio	 = date('d/m/Y');
        $model->bsc_data_final 	 = date('d/m/Y');
        
        $params = [
        		'filtros' => '1',
        		'bsc_data_inicio'	 => $model->bsc_data_inicio,
        		'bsc_data_final' 	 => $model->bsc_data_final,
        		'bsc_cliente' 		 => '',
        		'bsc_tipo'		 	 => '',
        		'bsc_forma' 		 => '',
        		'bsc_confirmada' 	 => '',
        ];
        	 
        $searchModel = new AgendaSearch();
        $dataProvider = $searchModel->search($params);
        
        return $this->render('index', [
        	'model'       => $model,	
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
        
        if (!isset(Yii::$app->user->identity)) {
        	return $this->redirect(Yii::$app->user->loginUrl);
        }
        
        if (isset($_REQUEST['alterar_data'])) {
	        $funcoes = new Funcoes();
	         
	        $model_agenda = new Agenda();
	        $model_agenda->bsc_medico = isset($_REQUEST['medico'])?$_REQUEST['medico']:Yii::$app->user->identity->medico_id;
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
	        $params = [
	        		'filtros' => '1',
	        		'bsc_medico' 	 => $model_agenda->bsc_medico,
	        ];
	        $dataProvider = $searchModel->search($params);
	        return $this->renderAjax('grid_agenda', [
	        		'model' 	  => $model,
	        		'searchModel' => $searchModel,
	        		'dataProvider' => $dataProvider,
	        ]);
        }
        
        if (isset($_REQUEST['alterar_medico'])) {
        	$funcoes = new Funcoes();
        
        	$model_agenda = new Agenda();
        	$model_agenda->bsc_medico = isset($_REQUEST['medico'])?$_REQUEST['medico']:Yii::$app->user->identity->medico_id;
        	$model_agenda->bsc_data_agenda = isset($_REQUEST['data'])?$_REQUEST['data']:date('d/m/Y');
        	
        	Yii::$app->session->set('user.medico_id',$model_agenda->bsc_medico);
        	 
        	$model_data = AgendaData::findOne(['medico'=>$model_agenda->bsc_medico]);
        	if (empty($model_data)) {
        		$model_data = new AgendaData();
        		$model_data->id = '';
        		$model_data->medico = $model_agenda->bsc_medico;
        	}
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
        	
        	$params = [
        			'filtros' => '1',
        			'bsc_medico' 	 => $model_agenda->bsc_medico,
        	];
        	$searchModel = new HorarioSearch();
        	$dataProvider = $searchModel->search($params);
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
	         
	        $model_agenda->confirmada = 2;
	         
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
        	$params = [
        			'filtros' => '1',
        			'bsc_medico' 	 => $_REQUEST['bsc_medico'],
        	];
        	
        	$searchModel = new HorarioSearch();
        	$dataProvider = $searchModel->search($params);
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
        	}
        	
        
        	$model = new Agenda();
        	
        	$params = [
        			'filtros' => '1',
        			'bsc_medico' 	 => $_REQUEST['bsc_medico'],
        	];
        	
        	$searchModel = new HorarioSearch();
        	$dataProvider = $searchModel->search($params);
        	return $this->renderAjax('grid_agenda', [
        			'model' 	  => $model,
        			'searchModel' => $searchModel,
        			'dataProvider' => $dataProvider,
        	]);
        	exit();
        }
        
        
        if (isset($_REQUEST['salvar'])) {
        	if ($_REQUEST['salvar'] == 2) {
        		$funcoes = new Funcoes();
        		$codigo_cliente = Clientes::find()->count()+1;
        		
        		$model_cliente = new Clientes();
        		$model_cliente->codigo    = ''; 
        		$model_cliente->nome      = $_REQUEST['nome'];
        		$model_cliente->fone      = $funcoes->retiraMascaras($_REQUEST['fone']);
        		$model_cliente->celular   = $funcoes->retiraMascaras($_REQUEST['celular']);
        		$model_cliente->formapgto = $_REQUEST['formapgto'];
        		$model_cliente->convenio  = $_REQUEST['convenio'];
        		$model_cliente->matricula = $_REQUEST['matricula'];
        		$model_cliente->dtavalid  = $funcoes->inverteData($_REQUEST['dtavalid']);
        		$model_cliente->vlrcons   = $_REQUEST['vlrcons'];
        		$model_cliente->tipo      = 1;
        		$model_cliente->data_cadastro     = date('Y-m-d');
        		
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
        		
        		$codigo_cliente = $model_cliente->codigo;
        		
        		$model_agenda = new Agenda();
        		$model_agenda->hora   = $_REQUEST['id'];
        		$model_agenda->medico = $_REQUEST['medico'];
        		
        		
        		$params = [
        				'filtros' => '1',
        				'bsc_data'	 => '',
        				'bsc_cliente' 	 => $codigo_cliente,
        		];
        		 
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
        	if (!empty($model_agenda)) {
        		echo '1';
        		exit();
        	}
        	
        	$model_cliente = Clientes::findOne(['codigo'=>$codigo_cliente]);
        	if (!empty($model_cliente)) {
        		$model_cliente->dtaproxima = $data_base;
        		if (!$flag = $model_cliente->save(false)) {
        			$erro = 1;
        		}
        	}
        	
        	$model_agenda = new Agenda();
        	$model_agenda->id        = '';
        	$model_agenda->medico    = $_REQUEST['medico'];
        	$model_agenda->codigo    = $_REQUEST['id_cliente'];
        	$model_agenda->tipo      = $_REQUEST['tipo'];
        	$model_agenda->fone      = $model_cliente->fone;
        	$model_agenda->data      = $data_base;
        	$model_agenda->hora      = $_REQUEST['id'];
        	$model_agenda->modopgto  = $model_cliente->formapgto;
        	$model_agenda->vlrpgto   = $model_cliente->vlrcons;
        	$model_agenda->confirmada = 1;
        	$model_agenda->id_usuario = Yii::$app->user->identity->usuarios_id;
        	
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
        	$model->bsc_data   = $model_agenda->data;
        	$model->bsc_medico = $model_agenda->medico;
        	$params = [
        			'filtros' => '1',
        			'bsc_medico' 	 => $_REQUEST['medico'],
        	];
        	$searchModel = new HorarioSearch();
        	$dataProvider = $searchModel->search($params);
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
        	$model_agenda->bsc_medico = isset($_REQUEST['medico'])?$_REQUEST['medico']:Yii::$app->user->identity->medico_id;
        	$model_agenda->bsc_data_agenda = isset($_REQUEST['data'])?$_REQUEST['data']:date('d/m/Y');
        	
            if (empty($_REQUEST)) {
	        	$model_data = AgendaData::findOne(['medico'=>$model_agenda->bsc_medico]);
	        	if (empty($model_data)) {
	        		$model_data = new AgendaData();
	        		$model_data->id = '';
	        	}
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
        	$params = [
        			'filtros' => '1',
        			'bsc_medico' 	 => $model_agenda->bsc_medico,
        	];
        	$searchModel = new HorarioSearch();
        	$dataProvider = $searchModel->search($params);
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
    	
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
    	
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
    	
    	$model_agenda->confirmada = 2;
    	
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
    
    public function actionExcluir_consulta() {
    	$funcoes = new Funcoes();
    	
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
    	 
    	$model_agenda = new Agenda();
    	$data = $funcoes->inverteData($_REQUEST['bsc_data']);
    	$model_agenda = Agenda::findOne(['hora'=>$_REQUEST['id'],'medico'=>$_REQUEST['bsc_medico'],'data'=>$data]);
    	if (empty($model_agenda)) {
    		echo '2';
    		exit();
    	}
    	 
    	$transaction = \Yii::$app->db->beginTransaction();
    	try {
    		if (!$flag = $model_agenda->delete(false)) {
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
    	
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
    	if (isset($_REQUEST['btn_encerrar'])) {
    		if ($_REQUEST['btn_encerrar'] == 'encerrar') {
    			return $this->redirect('../index');
    		}
    	}
    	 
        $model = $this->findModel($id);
        return $this->render('update', [
                'model' => $model,
        ]);
        
    }

    /**
     * Deletes an existing Agenda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
    	
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
    public function actionApagar($id)
    {
    	
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
    	$this->findModel($id)->delete();
    
    	return $this->redirect(['index']);
    }
    
    
    public function actionEntra_cadastro()
    {
    	$model_agenda = new Agenda();
    	
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
    	$model_agenda->hora   = $_REQUEST['id'];
    	$model_agenda->medico = $_REQUEST['medico'];
    	
    	$params = [
    			'filtros' => '5',
    	];
    	 
    	$searchModel = new ClientesSearch();
    	$dataProvider = $searchModel->search($params);
    	 
//     	$searchModel = new ClientesSearch();
//     	$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
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
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
    	$model_agenda->hora   = $_REQUEST['id'];
    	$model_agenda->medico = $_REQUEST['medico'];
    	
    	$model_agenda->bsc_data	 = $funcoes->inverteData($_REQUEST['bsc_data']);
    	$model_agenda->bsc_cliente  = $_REQUEST['bsc_cliente'];
    	
    	$sql = 'SELECT * FROM CLIENTES WHERE NOME LIKE "'.$_REQUEST['bsc_cliente'].'%"';
    	$model_cliente = Clientes::findBySql($sql)->all();
    	
    	$params = [
    			'filtros' => '2',
    			'bsc_data'	 => $_REQUEST['bsc_data'],
    			'model_cliente' 	 => $model_cliente,
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
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
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
    	if (!isset(Yii::$app->user->identity)) {
    		return $this->redirect(Yii::$app->user->loginUrl);
    	}
    	 
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
    
    
    

    public function actionProvisorio() {
    	
        if (!isset(Yii::$app->user->identity)) {
        	return $this->redirect(Yii::$app->user->loginUrl);
        }
        
        //exit();
    	
    	$funcoes = new Funcoes();
    	$model_agenda = Agenda::findOne(['data'=>$funcoes->inverteData($_REQUEST['bsc_data']),'hora'=>$_REQUEST['id'],'medico'=>$_REQUEST['bsc_medico']]);
    	if (!empty($model_agenda)) {
    		$model_cliente = Clientes::findOne(['codigo'=>$model_agenda->codigo]);
    		if (!empty($model_cliente)) {
    			return $this->renderAjax('provisorio/create', [
    					'model' => $model_cliente,
    					'id' => $_REQUEST['id'],
    			]);
    		}
    	}
    }

    public function actionSalvar_provisorio() {
    	
    	$model = Clientes::findOne($_REQUEST['codigo_cliente']);
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
    		$model->data_cadastro = date('Y-m-d');
    		$model->tipo      = 0;
    		
    		$erro = 0;
    		$transaction = \Yii::$app->db->beginTransaction();
    		try {
    			if (!$flag = $model->save(false)) {
    				$erro = 1;
    			}
    			$transaction->commit();
    		} catch (Exception $e) {
    			$transaction->rollBack();
    			echo $e->getMessage();
    			exit;
    		}
    	} 
    	echo $erro;
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
