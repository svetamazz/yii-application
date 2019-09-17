<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sound".
 *
 * @property int $id
 * @property string $name
 * @property string $author
 * @property string $fileName
 * @property string $description
 * @property int $categoryId
 *
 * @property Complaint[] $complaints
 * @property Category $category
 */
class Sound extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sound';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'fileName', 'description'], 'required'],
            [['categoryId'], 'integer'],
            [['name', 'author'], 'string', 'max' => 80],
            [['fileName'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 250],
            [['fileName'], 'unique'],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['categoryId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'author' => 'Author',
            'fileName' => 'File Name',
            'description' => 'Description',
            'categoryId' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComplaints()
    {
        return $this->hasMany(Complaint::className(), ['soundId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'categoryId']);
    }
}
