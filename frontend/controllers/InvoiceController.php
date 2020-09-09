<?php

namespace frontend\controllers;

use Yii;
use app\models\Invoice;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class InvoiceController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$model = new Invoice();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return;
        }
		
        return $this->render('index', [
            'model' => $model,
        ]);
		
    }


    public function actionCreate()
    {
        $model = new Invoice();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

    }
	
}
