<?php
namespace app\controllers\frontend; /* important */

use Yii;
use yii\web\Controller;

class LoginController extends Controller
{
	//public $layout = false; //不使用布局  //二种方式的调用
	public $layout = "frontend"; //设置使用的布局文件
	//public
    
    public function actionLogin()
    { 
       //$this->layout = false; //不使用布局  //二种方式的调用
       //$this->layout = "frontend"; //设置使用的布局文件
   	   return $this->render('login');
    }
	
}
