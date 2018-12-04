<?php

namespace app\controllers;

use Yii;
use app\models\Objetivodi;
use app\models\ObjetivodiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObjetivodiController implements the CRUD actions for Objetivodi model.
 */
class ObjetivodiController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Objetivodi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ObjetivodiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionOrganograma()
    {
        $searchModel = new ObjetivodiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('organograma', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Objetivodi model.
     * @param integer $FKObjetivoDir
     * @param integer $FKObjetivoInd
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($FKObjetivoDir, $FKObjetivoInd)
    {
        return $this->render('view', [
            'model' => $this->findModel($FKObjetivoDir, $FKObjetivoInd),
        ]);
    }

    /**
     * Creates a new Objetivodi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Objetivodi();

        if ($model->load(Yii::$app->request->post())) {
          $post = (Yii::$app->request->post()['Objetivodi']);
          $dir = $post['FKObjetivoDir'];
          $ind = $post['FKObjetivoInd'];

          // var_dump($dir);
          // var_dump($ind);die;

          foreach ($ind as $value) {
            $modelDir = new Objetivodi();
            $modelDir->FKObjetivoDir = $dir;
            $modelDir->FKObjetivoInd = $value;
            $modelDir->save(false);
          }

          return $this->redirect(['index', 'FKObjetivoDir' => $model->FKObjetivoDir, 'FKObjetivoInd' => $model->FKObjetivoInd]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Objetivodi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $FKObjetivoDir
     * @param integer $FKObjetivoInd
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($FKObjetivoDir, $FKObjetivoInd)
    {
        $model = $this->findModel($FKObjetivoDir, $FKObjetivoInd);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'FKObjetivoDir' => $model->FKObjetivoDir, 'FKObjetivoInd' => $model->FKObjetivoInd]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Objetivodi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $FKObjetivoDir
     * @param integer $FKObjetivoInd
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($FKObjetivoDir, $FKObjetivoInd)
    {
        $this->findModel($FKObjetivoDir, $FKObjetivoInd)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Objetivodi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $FKObjetivoDir
     * @param integer $FKObjetivoInd
     * @return Objetivodi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($FKObjetivoDir, $FKObjetivoInd)
    {
        if (($model = Objetivodi::findOne(['FKObjetivoDir' => $FKObjetivoDir, 'FKObjetivoInd' => $FKObjetivoInd])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
