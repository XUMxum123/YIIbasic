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
     <td><?= Html::encode("{$dat->Id}")?></td>
     <td><?= Html::encode("{$dat->Name}")?></td>
     <td><?= Html::encode("{$dat->Win}")?></td>
   </tr>
  <?php endforeach; ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>