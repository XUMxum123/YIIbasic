<?php
use yii\helpers\Html;
use yii\helpers\URL;
use yii\widgets\LinkPager;
?>

<div>
  <h1>Channel</h1><br />
  <h1><?php echo Yii::$app->getSecurity()->generateRandomString();?></h1><br />
  <?php 
  // $data and $secretKey are obtained from the form
  // $encryptedData = Yii::$app->getSecurity()->encryptByPassword($data, $secretKey);
  // store $encryptedData to database
  
  // $secretKey is obtained from user input, $encryptedData is from the database
  // $data = Yii::$app->getSecurity()->decryptByPassword($encryptedData, $secretKey);
  ?>
  <?php 
    echo "relativeHomeUrl = " .Url::home() ."<br />";
    echo "absoluteHomeUrl = " .Url::home(true) ."<br />";
    echo "httpsAbsoluteHomeUrl = " .Url::home('https') ."<br />";
  ?>
    <?php 
    echo "relativeBaseUrl = " .Url::base() ."<br />";
    echo "absoluteBaseUrl = " .Url::base(true) ."<br />";
    echo "httpsAbsoluteBaseUrl = " .Url::base('https') ."<br />";
  ?>
  <?= Html::a('点我跳转', ['channel/channel/receive', 'id' => $arr['id'],'value' => $arr['value']], ['class' => 'ahtml']) ?>
</div>