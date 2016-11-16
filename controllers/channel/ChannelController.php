<?php
namespace app\controllers\channel; /* important */

use Yii;
use yii\web\Controller;
use yii\swiftmailer\Message;
use app\models\channel\Channel;

class ChannelController extends Controller
{
   // 下面是redis的学习
   public function actionRedis()
   {
   	/*  目前是本地主机当作redis数据库存储,localhost(127.0.0.1)
   	 * 1. 打开一个cmd窗口,使用cd命令切换目录到安装redis目录,如E:/redis,运行 redis-server.exe redis.conf 
   	 * 2. 这时候另启一个cmd窗口,原来的不要关闭,不然就无法访问服务端了,再切换到redis目录下运行 redis-cli.exe -h 127.0.0.1 -p 6379 
   	 * */
   	 header("Content-type: text/html; charset=utf-8");
   	 Yii::$app->redis->set('user1','aaa');
   	 Yii::$app->redis->set('user2','bbb');
   	 Yii::$app->redis->set('user3','ccc');
   	 Yii::$app->redis->set('user4','ddd');
   	 $user1 = Yii::$app->redis->get('user1');//此时可以输出aaa
   	 var_dump($user1);
   }
	
   // 下面是发送(mail)邮件的学习
   public function actionMail()
   {
   	 $mail= Yii::$app->mailer->compose();   //定义一个发送对象
   	 //$mail->useFileTransport = false;
   	 $mail->setTo('xum1281517532@163.com'); //接收人邮箱
   	 $mail->setSubject("邮件测试"); //标题
   	 $mail->setTextBody('zheshisha '); //内容
   	 $html = '';
   	 $html.= '<table border="1">';
   	 $html.= '<tr><th>1</th><th>2</th><th>3</th><th>4</th></tr>';
   	 $html.= '<tr><td>asd</td><td>dssad</td><td>asddsa</td><td>asdasda</td></tr>';
   	 $html.='</table>';
   	 $mail->setHtmlBody($html);  //发送的html内容
   	 //根据返回值判断
   	 //var_dump($mail->send());
   	 if($mail->send())
   		echo "发送成功";
   	 else
   		echo "发送失败";
   	 //die();
   }
	
   // 下面是widget的学习
   public function actionWidget()
   {
   	 return $this->render('widget');
   }
	
   // 下面是yii助手类(helpers)的学习
   public function actionHelp()
   {
   	  $arr["id"] = "13579";
   	  $arr["value"] = "yii-basic";
   	  return $this->render('help',["arr" => $arr]);
   }
	
   public function actionReceive()
   {
   	  $request = Yii::$app->request;
   	  $get_arr = $request->get();
   	  
/*    	  $id = $request->get('id','default value');
   	  $value = $request->get('value','default value'); */
   	  
   	  return $this->render('receive',["get_arr" => $get_arr]);
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
