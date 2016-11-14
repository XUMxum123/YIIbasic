<?php
use yii\helpers\Html;
use yii\helpers\URL;
use yii\jui\DatePicker;
?>

<div>
  <h1>Widget</h1><br />
  <?php 
  echo DatePicker::widget([
  		'language' => 'zh-CN',
  		'name' => 'country',
  		'clientOptions' => [
  				'dateFormat' => 'yy-mm-dd',
  		],
  ]);
  ?>
</div>