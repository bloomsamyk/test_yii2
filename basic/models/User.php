<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $login
 * @property string $email
 * @property string $password
 * @property string $salt
 * @property string $phone
 * @property string $adress
 *
 * @property Article[] $articles
 */
class User extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'login', 'email', 'password', 'salt', 'phone', 'adress'], 'required'],
            [['name', 'login', 'email', 'password', 'salt', 'phone', 'adress'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'login' => Yii::t('app', 'Login'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'salt' => Yii::t('app', 'Salt'),
            'phone' => Yii::t('app', 'Phone'),
            'adress' => Yii::t('app', 'Adress'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['user_id' => 'id']);
    }
}