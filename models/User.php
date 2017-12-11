<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'auth_key', 'access_token'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }
    
    
    /*
        подключение таблиц
     *      */
     public function getEarnings()
    {
        return $this->hasOne(EarningsRecord::className(),['user_id'=>'id']);
    }

    public function getCache()
    {
        return $this->hasOne(CacheRecord::className(),['user_id'=>'id']);
    }
    
    public function getPayment()
    {
        return $this->hasMany(PaymentRecord::className(),['user_id'=>'id']);
    }
    
    
    public static function findUserByEmail($email)
    {
        return  static::findOne(['username'=>$email]);
    }
    public function setUserJoinForm($userJoinForm)
    {
      
        $this->username=$userJoinForm->username;
        $this->password=md5($userJoinForm->password);
        

    }
    
}
