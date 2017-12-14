<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;

$this->title = 'Добавление платежа';
$this->params['breadcrumbs'][] = $this->title;
?>

       <?php $form = ActiveForm::begin() ?>      
       <?= $form->field($payment, 'sum_pay')->label('Сумма платежа')
               /*->widget(MaskedInput::className(),['mask'=>'99999.99'])*/ ?>
       <button class="btn btn-success" type="submit">
           <i class="glyphicon glyphicon-ok"></i>
           Сохранить платеж
       </button>
       <?= $form->field($payment, 'user_id')->hiddenInput()->label('') ?>
       <?= $form->field($payment, 'date_pay')->label('')->hiddenInput() ?>
       <? ActiveForm::end() ?>



