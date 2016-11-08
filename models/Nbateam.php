<?php
namespace app\models;

use yii\db\ActiveRecord;

class Nbateam extends ActiveRecord
{
	protected $query;
		
	public function __construct()
	{
		$this->query = Nbateam::find();
	}
	
	/**
	 * tableName
	 * @return string [the real of tableName]
	 */
	public static function tableName()
	{
		$tableName = DB_NBATEAM_TAB;
		return $tableName;
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