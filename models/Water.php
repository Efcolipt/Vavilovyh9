<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "water".
 *
 * @property int $id
 * @property string|null $surname
 * @property string|null $email
 * @property int|null $apartment
 * @property int|null $hotwater
 * @property int|null $coldwater
 * @property string|null $date
 */
class Water extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'water';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['apartment', 'hotwater', 'coldwater'], 'integer'],
            [['surname', 'email', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Фамилия',
            'email' => 'Email',
            'apartment' => 'Квартира',
            'hotwater' => 'Горячая вода',
            'coldwater' => 'Холодная вода',
            'date' => 'Дата отправления',
        ];
    }
}
