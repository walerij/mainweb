<?php

 namespace app\models;
 
 use yii\base\Model;
 
 class PaymentForm extends Model{
     public $user_id;
     public $date_pay;
     public $sum_pay;
     
     public function rules()
     {
         return[
             [['user_id','date_pay','sum_pay'],'required', 'message'=>'Значение поля не должно быть пустым']
         ];
     }
 }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

