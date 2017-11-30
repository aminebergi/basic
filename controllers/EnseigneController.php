<?php

namespace app\controllers;

use Yii;
use app\models\Enseigne;
use app\models\Enseignesearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\User;
use yii\filters\VerbFilter;

/**
 * EnseigneController implements the CRUD actions for Enseigne model.
 */
class EnseigneController extends Controller
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
     * Lists all Enseigne models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Enseignesearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Enseigne model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),

        ]);
    }
   public function actionDesc()
    {
        $model =new Enseigne();
         return $this->render('desc', [
                'model' => $model,]);
    }

    /**
     * Creates a new Enseigne model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Enseigne();
        $user =  new User();

        if ($model->load(Yii::$app->request->post()) && $user->load(Yii::$app->request->post()) ) {
            
             $user->role_id=2;
             $user->username=$model->name;
             $user->setPassword($user->password);
             $user->generateAuthKey();
             $user->status=1;
             $user->enseigne_enseigne_id=$model->enseigne_id;
             
             if($model->validate())

            {
             $user->save(false);
             $model->save();

             }
             else
             {
 return $this->render('create', [
                'model' => $model,
                'user' => $user
            ]);
             }
             
            return $this->redirect(['view', 'id' => $model->enseigne_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'user' => $user
            ]);
        }
    }

    /**
     * Updates an existing Enseigne model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->enseigne_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Enseigne model.
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
     * Finds the Enseigne model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Enseigne the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Enseigne::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
