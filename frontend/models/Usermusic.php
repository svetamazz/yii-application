<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usermusic".
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property int $isAdmin
 *
 * @property Complaint[] $complaints
 */
class Usermusic extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            [['email', 'username', 'password', 'isAdmin'], 'required'],
            [['isAdmin'], 'integer'],
            [['email', 'username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 100],
            [['email'], 'unique'],
            [['username'], 'unique'],
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
            'username' => 'Username',
            'password' => 'Password',
            'isAdmin' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComplaints()
    {
        return $this->hasMany(Complaint::className(), ['userMusicId' => 'id']);
    }

    public static function findIdentity($id){
		return static::findOne($id);
	}
 
	public static function findIdentityByAccessToken($token, $type = null){
		throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
	}
 
	public function getId(){
		return $this->id;
	}
 
	public function getAuthKey(){
		throw new NotSupportedException();
	}
 
	public function validateAuthKey($authKey){
		throw new NotSupportedException();
	}
	public static function findByUsername($username){
		return self::findOne(['username'=>$username]);
	}
 
	public function validatePassword($password){
		return $this->password === $password;
	}
}
