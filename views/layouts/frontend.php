<?php
  use yii\helpers\Html;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>TPV后台管理系统</title>
    <?=Html::jsFile('@web/frontend/js/jquery-1.11.3.js')?>
    <?=Html::jsFile('@web/frontend/js/frontend.js')?>
    <?=Html::cssFile('@web/frontend/css/xgxt_login.css')?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="wrap">
  <div class="container">
     <?= $content ?>
  </div>
</div>

<div id="footer">
  <div class="container">
	 <center>
	     冠捷科技TPV
	 </center>
  </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>