<?php
 use yii\helpers\Html;
?>
  <div><?php echo $commonId; ?></div>
<?php foreach ($data as $info): ?>
  <div><?= Html::encode("{$info[DB_NBATEAM_NAME]}")?>----
  <?= Html::encode("{$info[DB_NBATEAM_PARTITION]}")?></div>
<?php endforeach;?>