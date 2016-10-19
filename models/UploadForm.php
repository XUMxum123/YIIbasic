<?php 
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
class UploadForm extends Model
{
	/**
	 * @var UploadedFile[]
	 */
	public $imageFiles;
	public function rules()
	{
		return [
				[['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
		];
	}
	public function upload($subfileName=null)
	{
		if ($this->validate()) {
			foreach ($this->imageFiles as $file) {
				if($subfileName == null){ //iconv('utf-8','gb2312',$file->baseName) [fixed random code]
					$file->saveAs('../uploads/' . iconv('utf-8','gb2312',$file->baseName) . '.' . $file->extension);
				}else{
					//if (is_dir('../uploads')){
						//if(!file_exists($subfileName)) {mkdir($subfileName);}
					    $file->saveAs('../uploads/' . $subfileName .'/'. iconv('utf-8','gb2312',$file->baseName) . '.' . $file->extension);								
					//}else{
						//return false;
					//}					
				}			
			}
			return true;
		} else {
			return false;
		}
	}
}
?>