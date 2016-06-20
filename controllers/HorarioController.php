<?php

namespace app\controllers;

use Yii;
use app\models\Horario;
use app\models\HorarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HorarioController implements the CRUD actions for Horario model.
 */
class HorarioController extends Controller
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
     * Lists all Horario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HorarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Horario model.
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
     * Creates a new Horario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Horario();

        if ($model->load(Yii::$app->request->post())) {
        		if (!empty($_REQUEST['Horario']['hora01'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora01']);
        		}
        		if (!empty($_REQUEST['Horario']['hora02'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora02']);
        		}
        		if (!empty($_REQUEST['Horario']['hora03'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora03']);
        		}
        		if (!empty($_REQUEST['Horario']['hora04'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora04']);
        		}
        		if (!empty($_REQUEST['Horario']['hora05'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora05']);
        		}
        		if (!empty($_REQUEST['Horario']['hora06'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora06']);
        		}
        		if (!empty($_REQUEST['Horario']['hora07'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora07']);
        		}
        		if (!empty($_REQUEST['Horario']['hora08'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora08']);
        		}
        		if (!empty($_REQUEST['Horario']['hora09'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora09']);
        		}
        		if (!empty($_REQUEST['Horario']['hora10'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora10']);
        		}
        		
        		if (!empty($_REQUEST['Horario']['hora11'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora11']);
        		}
        		if (!empty($_REQUEST['Horario']['hora12'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora12']);
        		}
        		if (!empty($_REQUEST['Horario']['hora13'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora13']);
        		}
        		if (!empty($_REQUEST['Horario']['hora14'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora14']);
        		}
        		if (!empty($_REQUEST['Horario']['hora15'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora15']);
        		}
        		if (!empty($_REQUEST['Horario']['hora16'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora16']);
        		}
        		if (!empty($_REQUEST['Horario']['hora17'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora17']);
        		}
        		if (!empty($_REQUEST['Horario']['hora18'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora18']);
        		}
        		if (!empty($_REQUEST['Horario']['hora19'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora19']);
        		}
        		if (!empty($_REQUEST['Horario']['hora20'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora20']);
        		}
        		
        		if (!empty($_REQUEST['Horario']['hora21'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora21']);
        		}
        		if (!empty($_REQUEST['Horario']['hora22'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora22']);
        		}
        		if (!empty($_REQUEST['Horario']['hora23'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora23']);
        		}
        		if (!empty($_REQUEST['Horario']['hora24'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora24']);
        		}
        		if (!empty($_REQUEST['Horario']['hora25'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora25']);
        		}
        		if (!empty($_REQUEST['Horario']['hora26'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora26']);
        		}
        		if (!empty($_REQUEST['Horario']['hora27'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora27']);
        		}
        		if (!empty($_REQUEST['Horario']['hora28'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora28']);
        		}
        		if (!empty($_REQUEST['Horario']['hora29'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora29']);
        		}
        		if (!empty($_REQUEST['Horario']['hora30'])) {
        			$model->salvar_horario($_REQUEST['Horario']['hora30']);
        		}
//         	} catch (Exception $e) {
//         		$transaction->rollBack();
//         		echo $e->getMessage();
//         		exit;
//         	}
        	
            return $this->redirect(['../web/site/index']);
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Horario model.
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
     * Deletes an existing Horario model.
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
     * Finds the Horario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Horario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Horario::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
