<?php
 namespace app\controllers;
 
 use yii\web\Controller;
 use yii\data\Pagination;
 
 use app\models\Nbateam;
 
 class NbateamController extends Controller
 {
 	public $layout  = 'null';
 	public function actionIndex()
 	{
 		//$query = Nbateam::find();
 		$nbaTeam = new Nbateam();
 		$pagination = new Pagination([
 			'defaultPageSize' => 5,
 			'totalCount' => $nbaTeam->_get_row_count(),
 		]);
 		
 		$data = $nbaTeam->_get_team_info_by_pagination($pagination->offset,$pagination->limit);
/*  		$data = $query->orderBy('Id')
 		              ->offset($pagination->offset)
 		              ->limit($pagination->limit)
 		              ->all(); */
 		//var_dump($data);
 		return $this->render('index', [
 				'data' => $data,
 				'pagination' => $pagination,
 		]);
 	}
 	
 	public function actionTest()
 	{
 		return $this->render('test');
 	}
 	
 	public function actionPagination()
 	{
 		return $this->render('pagination');
 	}
 	
 	public function actionQuery()
 	{
 		//$tableName = "nbateam";
 		$query = new \yii\db\Query();
 		$data = $query->from(DB_NBATEAM_TAB)->limit(5)->all();
 		$commonId = uuid();
 		return $this->render('query', [
 				'data' => $data,
 				'commonId' => $commonId,
 		]);
 		
 		//var_dump($data);
 		//$condition = "火箭";
 		//$data = $query->from($tableName)->where(['Name' => $condition])->all();
 		//var_dump(count($data));
 		//$command = $query->from($tableName)->where(['Name' => $condition])->createCommand();
 		//echo $command->sql;
 	}
 }