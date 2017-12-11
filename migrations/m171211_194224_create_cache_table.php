<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cache`.
 */
class m171211_194224_create_cache_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cache', [
            'id' => $this->primaryKey(),

            'cache_paysystem'=>$this->string(), //тип кощелька - платежная система
            'cache_number' =>$this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cache');
    }
}
