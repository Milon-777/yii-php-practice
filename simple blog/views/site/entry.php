<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Ім\'я') ?>

    <?= $form->field($model, 'email')->label('Пошта') ?>

    <div class="form-group">
        <?= Html::submitButton('Відправити', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

