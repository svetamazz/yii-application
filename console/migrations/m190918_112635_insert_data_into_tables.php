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
        
        //usermusic table
        $this->insert('usermusic',array(
            'email'=>'admin@gmail.com',
            'username' =>'admin',
            'password' => 'admin1234',
            'isAdmin' => '1'
        ));
        $this->insert('usermusic',array(
            'email'=>'user@gmail.com',
            'username' =>'user',
            'password' => 'user1234',
            'isAdmin' => '0'
        ));

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
        $this->insert('category',array(
            'name'=>'джаз'
        ));
        $this->insert('category',array(
            'name'=>'реггі'
        ));
        
        //sound 
        $this->insert('sound',array(
            'name'=>'Por Una Cabeza',
            'author' =>'Carlos Gardel',
            'fileName' => 'Por Una Cabeza-Carlos Gardel-2019-09-22-23-16-58.mp3',
            'description' => 'perfect',
            'categoryId' => '3'
        ));
        $this->insert('sound',array(
            'name'=>'Dream A Little Dream Of Me',
            'author' =>'Ella Fitzgerald & Louis Armstrong',
            'fileName' => 'Dream A Little Dream Of Me-Ella Fitzgerald & Louis Armstrong-2019-09-22-23-40-37.mp3',
            'description' => 'aa',
            'categoryId' => '4'
        ));
        $this->insert('sound',array(
            'name'=>'Three Little Birds',
            'author' =>"Bob Marley",
            'fileName' => "	Three Little Birds-Bob Marley-2019-09-22-23-44-35.mp3",
            'description' => 'f',
            'categoryId' => '5'
        ));
        $this->insert('sound',array(
            'name'=>'In The End',
            'author' =>'Linkin Park',
            'fileName' => 'In The End-Linkin Park-2019-09-22-23-31-59.mp3',
            'description' => 'rock yeah',
            'categoryId' => '2'
        ));
        $this->insert('sound',array(
            'name'=>'In My Mind',
            'author' =>"Dynoro & Gigi DAgostino",
            'fileName' => "In My Mind-Dynoro & Gigi DAgostino-2019-09-22-23-24-33.mp3",
            'description' => 'dance',
            'categoryId' => '1'
        ));
        $this->insert('sound',array(
            'name'=>'Турецкий марш',
            'author' =>'Моцарт',
            'fileName' => 'Турецкий марш-Моцарт-2019-09-22-23-14-06.mp3',
            'description' => 'ввв',
            'categoryId' => '3'
        ));
        $this->insert('sound',array(
            'name'=>'Romeo Y Julieta',
            'author' =>'Henry Salomon',
            'fileName' => 'Romeo Y Julieta-Henry Salomon-2019-09-22-23-20-02.mp3',
            'description' => 'melodic',
            'categoryId' => '3'
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
            'name'=>'Soul Station',
            'author' =>'Hank Mobley',
            'fileName' => 'Soul Station-Hank Mobley-2019-09-22-23-42-24.mp3',
            'description' => 'funny',
            'categoryId' => '4'
        ));
        $this->insert('sound',array(
            'name'=>'Stressed Out',
            'author' =>'Twenty One Pilots',
            'fileName' => 'Stressed Out-Twenty One Pilots-2019-09-22-23-33-13.mp3',
            'description' => 'qq',
            'categoryId' => '2'
        ));
        $this->insert('sound',array(
            'name'=>'How Deep Is Your Love',
            'author' =>'Calvin Harris & Disciples',
            'fileName' => 'How Deep Is Your Love-Calvin Harris & Disciples-2019-09-22-23-29-34.mp3',
            'description' => 'cool',
            'categoryId' => '1'
        ));
        $this->insert('sound',array(
            'name'=>'Devil',
            'author' =>'Shinedown',
            'fileName' => 'Devil-Shinedown-2019-09-18-14-47-42.mp3',
            'description' => 'cool song',
            'categoryId' => '2'
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
        $this->insert('sound',array(
            'name'=>'К Элизе',
            'author' =>'Бетховен',
            'fileName' => 'К Элизе-Бетховен-2019-09-22-23-10-18.mp3',
            'description' => 'niiice',
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
