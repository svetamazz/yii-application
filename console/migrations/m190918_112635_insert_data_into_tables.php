<?php

use yii\db\Migration;

/**
 * Class m190918_112635_insert_data_into_tables
 */
class m190918_112635_insert_data_into_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('alter table category AUTO_INCREMENT=0');
        /*
        //usermusic table
        $this->insert('user',array(
            'email'=>'admin@gmail.com',
            'login' =>'admin',
            'password' => md5('admin'),
            'role' => 'admin'
        ));
        $this->insert('user',array(
            'email'=>'user@gmail.com',
            'login' =>'user',
            'password' => md5('user'),
            'role' => 'user'
        ));
*/
        //category table
        $this->insert('category',array(
            'name'=>'поп'
        ));
        $this->insert('category',array(
            'name'=>'рок'
        ));
        $this->insert('category',array(
            'name'=>'класика'
        ));   
        
        //sound table
        
        $this->insert('sound',array(
            'name'=>'Devil',
            'author' =>'Shinedown',
            'fileName' => 'Devil-Shinedown-2019-09-18-14-47-42.mp3',
            'description' => 'cool song',
            'categoryId' => '2'
        ));
        
        $this->insert('sound',array(
            'name'=>'I Am An Outsider',
            'author' =>'Three Days Grace',
            'fileName' => 'I Am An Outsider-Three Days Grace-2019-09-18-14-50-16.mp3',
            'description' => 'rock yeah',
            'categoryId' => '2'
        ));
        $this->insert('sound',array(
            'name'=>'Good Day',
            'author' =>'Broiler',
            'fileName' => 'Good Day-Broiler-2019-09-18-14-52-28.mp3',
            'description' => 'funny',
            'categoryId' => '1'
        ));
        $this->insert('sound',array(
            'name'=>'Венгерский танец No. 1',
            'author' =>'Иоганнес Брамс',
            'fileName' => 'Венгерский танец No. 1-Иоганнес Брамс-2019-09-18-14-55-27.mp3',
            'description' => 'dance',
            'categoryId' => '3'
        ));
        $this->insert('sound',array(
            'name'=>'Фуга Bwv 565',
            'author' =>'Бах',
            'fileName' => 'Фуга Bwv 565-Бах-2019-09-18-14-57-34.mp3',
            'description' => 'wow',
            'categoryId' => '3'
        ));
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('sound');
        $this->delete('complaint');
        $this->delete('category');
        $this->delete('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190918_112635_insert_data_into_tables cannot be reverted.\n";

        return false;
    }
    */
}
