<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="panel panel-success">
    <div class="panel panel-heading">
        <h3>
            <i class="glyphicon glyphicon-user">
            </i> &nbsp;
            Регистрация</h3>
    </div>
    <div class="panel-body">

        <?php $form = ActiveForm::begin(['id' => 'user-join-form']); ?>

        <?= $form->field($userJoinForm, 'username')->label('Эл почта'); ?>
        <?= $form->field($userJoinForm, 'password')->passwordInput()->label('Пароль'); ?>
        <?= $form->field($userJoinForm, 'confirmpassword')->passwordInput()->label('Подтверждение пароля'); ?>
        <?= Html::submitButton('Зарегистрировать', ['class' => 'btn btn-success']) ?>


      <?php ActiveForm::end(); ?>
    </div>

</div>