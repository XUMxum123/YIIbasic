<?php
  use yii\helpers\Html;
  use yii\helpers\Url;
  use app\assets\FrontendAppAsset;
  FrontendAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>TPV后台管理系统</title>
    <?php $this->head() ?>
    <!-- 已经注释了(颜色没有变浅),在解析html时,注释的,可以通过firebug查看
    <?=Html::jsFile('@web/frontend/js/jquery-1.11.3.js')?>
    <?=Html::jsFile('@web/frontend/js/frontend.js')?>
    <?=Html::cssFile('@web/frontend/css/xgxt_login.css')?>
    -->
    <script type="text/javascript">
        var $newIndex = "<?=Url::to(['/news/index']) ?>";
    </script>
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