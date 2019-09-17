<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%complaint}}`.
 */
class m190917_152052_create_complaint_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%complaint}}', [
            'id' => $this->primaryKey(),
            'title' =>  $this->string(100)->notNull(),
            'text' => $this->text(),
            'soundId' => $this->integer(),
            'userMusicId' => $this->integer()
        ]);

         // creates index for column `categoryId`
         $this->createIndex(
            'idx-complaint-soundId',
            'complaint',
            'soundId'
        );

         // add foreign key for table `sound`
         $this->addForeignKey(
            'fk-complaint-soundId',
            'complaint',
            'soundId',
            'sound',
            'id',
            'CASCADE'
        );

          // creates index for column `userMusicId`
          $this->createIndex(
            'idx-complaint-userMusicId',
            'complaint',
            'userMusicId'
        );

         // add foreign key for table `user`
         $this->addForeignKey(
            'fk-complaint-userMusicId',
            'complaint',
            'userMusicId',
            'usermusic',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%complaint}}');
    }
}
