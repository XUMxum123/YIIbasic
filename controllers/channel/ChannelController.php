<?php
namespace app\controllers\channel; /* important */

use yii\web\Controller;
use app\models\channel\Channel;

class ChannelController extends Controller
{
   public function actionWidget()
   {
   	 return $this->render('widget');
   }
	
   // 下面是yii助手类(helpers)的学习
   public function actionHelp()
   {
   	  return $this->render('help');
   }
	
   // 下面的方法是数据库的 c u r d 学习
   public function actionIndex()
   {
   	  //不管是save、update、delete、insert, 成功返回1，时报返回0，
   	  $affectRow = 0;
   	  /*  save the data */
/*       $channel = new Channel(); // save
      $channel[DB_CHANNEL_ID] = uuid();
   	  $channel[DB_CHANNEL_NAME] = "厦门电视";
   	  $channel[DB_CHANNEL_CONTENT] = "这是一个非常好的电视节目,大家可以好好看看!";
   	  $channel[DB_CHANNEL_NUMBER] = uuid();
   	  $affectRow = $channel->save();
   	  if($affectRow){ 
   	    echo "success"; // 可重定向到另一个url
   	  }else{
   	    echo "fail";
   	  } */
   	  //$channel->save(); // 等同于 $customer->insert()
   	
   	  /* note: 都用save方法保存或者更新数据,根据当前实例化对象的不同来决定 */
   	
   	  /*  update the data */ 
/*    $channelId = "5bf956161672a13abc67ab211de4a1a1";
   	  $where = [DB_CHANNEL_ID => $channelId]; // update
   	  $channel = Channel::findOne($where);
   	  $channel[DB_CHANNEL_NAME] = "厦门卫视";
   	  $channel->save(); // 等同于 $channel->update();  */
   	
   	  /*  delete the data */
/*    $channelId = "5bf956161672a13abc67ab211de4a1a1";
   	  $where = [DB_CHANNEL_ID => $channelId];
   	  $channel = Channel::findOne($where);
   	  $channel->delete(); */
   	
/*    	  $channelId = "769f9fcde41ef3142f90ed7399ebcd3d";
      $channel = new Channel();
   	  $data = $channel->_save_or_update_record($channelId);
   	  var_dump($data); */
   	  
   	  
   	  return $this->render('index');
   }
}
