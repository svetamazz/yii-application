<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%userMusic}}`.
 */
class m190917_152006_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%userMusic}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(30)->notNull()->unique(),
            'login' => $this->string(30)->notNull()->unique(),
            'password' => $this->string(30)->notNull(),
            'role'=>$this->string(10)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%userMusic}}');
    }
}
