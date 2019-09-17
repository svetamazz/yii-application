<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sound}}`.
 */
class m190917_152031_create_sound_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sound}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'author' => $this->string(80),
            'fileName' => $this->string(250)->notNull()->unique(),
            'description'=> $this->string(250)->notNull(),
            'categoryId' => $this->integer()->notNull()
        ]);

        // creates index for column `categoryId`
        $this->createIndex(
            'idx-sound-categoryId',
            'sound',
            'categoryId'
        );

         // add foreign key for table `category`
         $this->addForeignKey(
            'fk-sound-categoryId',
            'sound',
            'categoryId',
            'category',
            'id',
            'CASCADE'
        );

        /*
        // add unique index for name+author
        $this->createIndex(
            'idx-unique-sound-name-author',
            'sound',
            'name, author',
            1
        );
        */
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sound}}');
    }
}
