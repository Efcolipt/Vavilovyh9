<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 * @property int|null $apartment
 * @property string|null $contact
 * @property string|null $date
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['apartment'], 'integer'],
            [['name', 'text', 'contact', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'text' => 'Сообщение',
            'apartment' => 'Квартира',
            'contact' => 'Контакты',
            'date' => 'Дата',
        ];
    }
}
