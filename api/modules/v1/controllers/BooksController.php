<?php

namespace api\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;

class BooksController extends ActiveController
{
	public $modelClass = 'api\modules\v1\models\Books';
	
	public function actionList()
	{
		return $this->modelClass::find()->all();
	}
	
	public function actionUpdate()
	{
		$requestParams = Yii::$app->getRequest()->getBodyParams();
		if (empty($requestParams)) {
			$requestParams = Yii::$app->getRequest()->getQueryParams();
		}
		
		if ($requestParams['id']) {
			$model = $this->modelClass::findOne($requestParams['id']);
			
			if ($model->load($requestParams) && $model->save()) {
				return json_encode(['message' => 'succes']);
			}
		}
		
		return json_encode(['message' => 'error']);
	}
}
