<?php

namespace app\models;
use yii\db\ActiveRecord;

class PaymentRecord extends ActiveRecord{
     public static function tableName()
    {
        return "paymenthistory";
    }
    
    public function setRecord($paymentForm)
    {
        $this->user_id = $paymentForm->user_id;
        $this->date_pay = date('Y-m-d H:i:s'); 
                //$paymentForm->date_pay;
        $this->sum_pay = $paymentForm->sum_pay;
    }
}
