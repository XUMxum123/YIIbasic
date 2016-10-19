<?php
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'accept-charset' => 'utf-8']]) ?>
<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
<button>Submit</button>
<?php ActiveForm::end() ?>