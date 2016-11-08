<div>
<h1>Test</h1>
<?php echo Yii::$app->formatter->format(0.125, ['percent', 2])."<br />";?> 
<?php
  Yii::$app->formatter->locale = 'en-US';
  echo Yii::$app->formatter->format('2014-01-01', 'date')."<br />";
?> 
</div>