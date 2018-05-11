<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>

<div>

    <p>Test form.</p>

    <?php $form = ActiveForm::begin([
            'id' => 'signup-form',
            'fieldConfig' => [
                'template' => '{input}',
                'options' => ['tag' => false], // remove wrapper tag
            ],
    ]); ?>


    <?= $form->field($signup_model, 'email'); ?>

    <?= $form->field($signup_model, 'password') ?>

    <div class="field-signupform-email">
        <div class="help-block"></div>
    </div>

    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>

    <?php ActiveForm::end(); ?>

</div>