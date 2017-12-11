<?php

use yii\db\Migration;

/**
 * Handles the creation of table `paymenthistory`.
 */
class m171211_063132_create_paymenthistory_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('paymenthistory', [
            'id' => $this->primaryKey(),
             'user_id'=>$this->integer(),
             'date_pay'=>$this->dateTime(),
             'sum_pay'=>$this->float()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('paymenthistory');
    }
}
