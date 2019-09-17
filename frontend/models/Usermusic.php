<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usermusic".
 *
 * @property int $id
 * @property string $email
 * @property string $login
 * @property string $password
 * @property string $role
 *
 * @property Complaint[] $complaints
 */
class Usermusic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usermusic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'login', 'password', 'role'], 'required'],
            [['email', 'login'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 100],
            [['role'], 'string', 'max' => 10],
            [['email'], 'unique'],
            [['login'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComplaints()
    {
        return $this->hasMany(Complaint::className(), ['userMusicId' => 'id']);
    }
}
