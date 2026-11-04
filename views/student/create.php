
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Register New Student';
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($student, 'reg_no')->textInput() ?>

<?= $form->field($student, 'first_name')->textInput() ?>

<?= $form->field($student, 'last_name')->textInput() ?>

<?= $form->field($student, 'email')->textInput(['type' => 'email']) ?>

<?= $form->field($student, 'date_of_birth')->input('date') ?>

<div>
    <?= Html::submitButton('Save Student', [
        'class' => 'btn btn-success'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>
