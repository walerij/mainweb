<?php

use yii\db\Migration;

/**
 * Handles adding userid to table `cache`.
 */
class m171211_202406_add_userid_column_to_cache_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('cache', 'user_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('cache', 'user_id');
    }
}
