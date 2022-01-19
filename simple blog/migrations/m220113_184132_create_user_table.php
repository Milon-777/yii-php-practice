<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m220113_184132_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string()->defaultValue(null),
            'password' => $this->string(),
            'isAdmin' => $this->string()->defaultValue(0),
            'photo' => $this->string()->defaultValue(null),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
