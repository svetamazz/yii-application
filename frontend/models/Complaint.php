<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "complaint".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $soundId
 * @property int $userMusicId
 *
 * @property Sound $sound
 * @property Usermusic $userMusic
 */
class Complaint extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'complaint';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['text'], 'string'],
            [['soundId', 'userMusicId'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['soundId'], 'exist', 'skipOnError' => true, 'targetClass' => Sound::className(), 'targetAttribute' => ['soundId' => 'id']],
            [['userMusicId'], 'exist', 'skipOnError' => true, 'targetClass' => Usermusic::className(), 'targetAttribute' => ['userMusicId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'soundId' => 'Sound ID',
            'userMusicId' => 'User Music ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSound()
    {
        return $this->hasOne(Sound::className(), ['id' => 'soundId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserMusic()
    {
        return $this->hasOne(Usermusic::className(), ['id' => 'userMusicId']);
    }
}
