<?php
namespace app\models\channel; /* important */

use yii\db\ActiveRecord;

class Channel extends ActiveRecord
{
	protected $query;
	//protected $queryOne;
		
	public function __construct()
	{
		$this->query = Channel::find();
		//$this->queryOne = Channel::findOne();
	}
		
	/**
	 * tableName
	 * @return string [the real of tableName]
	 */
	public static function tableName()
	{
		$tableName = DB_CHANNEL_TAB;
		return $tableName;
	}
	
	public function _save_record(array $data=null)
	{
/* 	   $affectRow = 0;
	   if($data == null){
	   	 return $affectRow;
	   }else{
	   	 
	   } */
	   
/* 	   $where = [DB_CHANNEL_ID => $channelId];
	   $record = Channel::findOne($where);
	   if($record != null){ // save
	   	 $dat = '123';
	   }else{ // update
	   	 $dat = '456';
	   }
	   return $dat; */
	}
	
	/**
	 * _get_row_count
	 * @return int $count
	 * */
	public function _get_row_count()
	{
		$count = $this->query->count();
		return $count;
	}
	
	//public function 
	
	/**
	 * _get_team_info_by_pagination
	 * @param int $offset
	 * @param int $limit
     * @return array $data
	 * */
	public function _get_team_info_by_pagination($offset,$limit)
	{   
		$orderBy = [/*DB_NBATEAM_ID => SORT_DESC, */ DB_NBATEAM_WIN => SORT_ASC];
		$where = [
				   'and',
				   ['>',DB_NBATEAM_WIN,5],
				   ['<=',DB_NBATEAM_LOSE,75],
				   ['!=',DB_NBATEAM_ID,'0']
		         ];
		$data = $this->query->orderBy($orderBy)->where($where)->offset($offset)->limit($limit)->all();
		return $data;
	}
	
}