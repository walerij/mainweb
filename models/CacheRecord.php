<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cache".
 *
 * @property integer $id
 * @property string $cache_paysystem
 * @property string $cache_number
 * @property integer $user_id
 */
class CacheRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cache';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['cache_paysystem', 'cache_number'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cache_paysystem' => 'Cache Paysystem',
            'cache_number' => 'Cache Number',
            'user_id' => 'User ID',
        ];
    }

    public function addCache($UserForm, $record_id) {
        $this->user_id = $record_id;
        $this->cache_paysystem = $UserForm->cache_paysystem;
        $this->cache_number = $UserForm->cache_number;

    }
}
