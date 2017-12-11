<?php

use yii\db\Migration;

/**
 * Handles the creation of table `earnings`.
 */
class m171211_063149_create_earnings_table extends Migration
{
    /**
     * @inheritdoc
     * 
     * Coinhive SupportX
     */
    public function up()
    {
        $this->createTable('earnings', [
            'id' => $this->primaryKey(),
            'user_id' =>$this->integer(),
            'coinhive_hash' => $this->integer(),
            'support_hash' => $this->integer(),
            'refferal_hash' => $this->integer(),
            'total_hash' => $this->integer(),
            'delta_hash' => $this->integer(),
            'spend_hash' => $this->integer(),
            'mining_date' => $this->integer(),
  
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('earnings');
    }
}
