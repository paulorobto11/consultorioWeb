<?php

namespace app\controllers;

use Yii;
use app\models\Convenio;
use app\models\ConvenioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Funcoes;

/**
 * ConvenioController implements the CRUD actions for Convenio model.
 */
class ConvenioController extends Controller
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
     * Lists all Convenio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConvenioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Convenio model.
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
     * Creates a new Convenio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Convenio();

        if ($model->load(Yii::$app->request->post())) {
        	$funcoes = new Funcoes();
        	$model->nome = strtoupper($model->nome);
        	$model->cnpj = $funcoes->retiraMascaras($model->cnpj);
        	$model->dtnascto = $funcoes->inverteData($model->dtnascto);
        	$model->cep = $funcoes->retiraMascaras($model->cep);
        	$model->fone = $funcoes->retiraMascaras($model->fone);
        	$transaction = \Yii::$app->db->beginTransaction();
        	try {
   				if (!$flag = $model->save(false)) {
   					$transaction->rollBack();
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
     * Updates an existing Convenio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
        	$funcoes = new Funcoes();
        	$model->nome = strtoupper($model->nome);
        	$model->cnpj = $funcoes->retiraMascaras($model->cnpj);
        	$model->dtnascto = $funcoes->inverteData($model->dtnascto);
        	$model->cep = $funcoes->retiraMascaras($model->cep);
        	$model->fone = $funcoes->retiraMascaras($model->fone);
        	$transaction = \Yii::$app->db->beginTransaction();
        	try {
        		if (!$flag = $model->save(false)) {
        			$transaction->rollBack();
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
        	$model->dtnascto = $funcoes->ajustaData($model->dtnascto);
        	
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Convenio model.
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
     * Finds the Convenio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Convenio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Convenio::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
