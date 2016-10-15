<?php
 namespace app\controllers;
 
 use yii\web\Controller;
 use yii\data\Pagination;
 
 use app\models\Nbateam;
 
 class NbateamController extends Controller
 {
 	public function actionIndex()
 	{
 		$query = Nbateam::find();
 		$pagination = new Pagination([
 			'defaultPageSize' => 5,
 			'totalCount' => $query->count(),
 		]);
 		$data = $query->orderBy('Id')
 		              ->offset($pagination->offset)
 		              ->limit($pagination->limit)
 		              ->all();
 		//var_dump($data);
 		return $this->render('index', [
 				'data' => $data,
 				'pagination' => $pagination,
 		]);
 	}
 	
 	public function actionQuery()
 	{
 		$tableName = "nbateam";
 		$query = new \yii\db\Query();
 		//$data = $query->from($tableName)->limit(5)->all();
 		//var_dump($data);
 		$condition = "火箭";
 		$data = $query->from($tableName)->where(['Name' => $condition])->all();
 		//var_dump(count($data));
 		$command = $query->from($tableName)->where(['Name' => $condition])->createCommand();
 		echo $command->sql;
 	}
 }