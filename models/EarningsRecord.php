<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "earnings".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $coinhive_hash
 * @property integer $support_hash
 * @property integer $refferal_hash
 * @property integer $total_hash
 * @property integer $delta_hash
 * @property integer $spend_hash
 * @property integer $mining_date
 */
class EarningsRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'earnings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'coinhive_hash', 'support_hash', 'refferal_hash', 'total_hash', 'delta_hash', 'spend_hash'], 'integer'],
            [['user_id', 'coinhive_hash', 'support_hash', 'refferal_hash', 'total_hash', 'delta_hash', 'spend_hash','mining_date'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'coinhive_hash' => 'Coinhive Hash',
            'support_hash' => 'Support Hash',
            'refferal_hash' => 'Refferal Hash',
            'total_hash' => 'Total Hash',
            'delta_hash' => 'Delta Hash',
            'spend_hash' => 'Spend Hash',
            'mining_date' => 'Mining Date',
        ];
    }
    
     public function getUser()
    {
        return $this->hasOne(UserRecord::className(),['id'=>'user_id']);
    }
    
    /* добавление счета
     */
     public function addEarning($UserForm) {
        
         
        $this->user_id = $UserForm->id;
        $this->coinhive_hash=0;
        $this->support_hash=0;
        $this->total_hash=0;
        $this->refferal_hash=0;
        $this->delta_hash=0;
        $this->spend_hash=0;
        $this->mining_date= date('Y-m-d H:i:s');
                
     }   
     
       /* изменение счета
     */
     public function updateEarning($earning) {
                 
        $this->user_id = $earning->user_id;
        $this->coinhive_hash=$earning->coinhive_hash;
        $this->support_hash=$earning->support_hash;
        $this->total_hash=$earning->total_hash;
        $this->refferal_hash=$earning->refferal_hash;
        $this->delta_hash=$earning->delta_hash;
        $this->spend_hash=$earning->spend_hash;
        $this->mining_date= date('Y-m-d H:i:s');
                
     }   
    
}
