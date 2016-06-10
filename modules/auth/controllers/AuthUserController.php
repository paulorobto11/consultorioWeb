<?php

namespace app\modules\auth\controllers;

use Yii;
use app\modules\auth\models\AuthUser;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Security;

/**
 * @resolveName: Módulo de administração de usuários
 * @id: authusercontroller
 */
class AuthUserController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @nome: Listagem de auth
     * @id: actionindex
     * @descr: Descrição de usuário ativos no sistema
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AuthUser::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuthUser model.
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
     * Creates a new AuthUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AuthUser();

        $request = Yii::$app->request;
        if($request->isPost)
        {
            $model->load($request->post());
            if($model->validate())
            {
                $model->hash=Yii::$app->getSecurity()->generatePasswordHash(Yii::$app->params['hash']);
                $model->generateAuthKey();

                if($model->save())
                {
                    return $this->redirect(['view', 'id' => $model->id]);
                }else{
                    return $this->redirect(['index']);
                }
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);

    }

    /**
     * Updates an existing AuthUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->password='';
        $request = Yii::$app->request;
        if($request->isPost) {
            $model->load($request->post());
            if($model->save())
            {
                return $this->redirect(['view', 'id' => $model->id]);
            }

        }
            return $this->render('update', [
                'model' => $model,
            ]);

    }

    /**
     * Deletes an existing AuthUser model.
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
     * Finds the AuthUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AuthUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AuthUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
