<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Nbateam</h1>
<div id="content">
<table id="main">
   <tr>
     <td>表格主键</td>
     <td>球队名字</td>
     <td>胜利场数</td>
   </tr>
  <?php foreach ($data as $dat): ?>
   <tr>
     <td><?= Html::encode("{$dat[DB_NBATEAM_ID]}")?></td>
     <td><?= Html::encode("{$dat[DB_NBATEAM_NAME]}")?></td>
     <td><?= Html::encode("{$dat[DB_NBATEAM_WIN]}")?></td>
   </tr>
  <?php endforeach; ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>