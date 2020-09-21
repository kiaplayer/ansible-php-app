<?php

use yii\db\Migration;

/**
 * Class m200921_205034_add_users
 */
class m200921_205034_add_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', []);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
