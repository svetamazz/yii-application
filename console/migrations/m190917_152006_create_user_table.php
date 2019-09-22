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
        $this->createTable('{{%usermusic}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(30)->notNull()->unique(),
            'username' => $this->string(30)->notNull()->unique(),
            'password' => $this->string(100)->notNull(),
            'isAdmin'=>$this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%usermusic}}');
    }
}
