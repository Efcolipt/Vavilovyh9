<?php

namespace app\models;

use Yii;
use yii\base\Model;

class WaterForm extends Model
{
    public $water;
    public $surname;
    public $email;
    public $apartment;
    public $coldwater;
    public $hotwater;
    public $date;

    public function rules()
    {
        return [
            [['surname','apartment','email','coldwater','hotwater'], 'required','message' => 'Заполните все поля'],
            [['apartment'], 'integer', 'message' => 'Укажите квартиру'],
            [['coldwater'], 'integer', 'message' => 'Укажите холодную воду'],
            [['hotwater'], 'integer', 'message' => 'Укажите горячую воду'],
            [['surname'],  'string', 'min' => 2, 'max' => 50, 'tooLong' => 'Фамилия слишком большая', 'tooShort' => 'Фамилия слишком маленькая'],
            [['email'],  'email'],
        ];
    }

    public function saveWater()
    {
        $water = new Water;
        $water->surname = $this->surname;
        $water->email = $this->email;
        $water->coldwater = $this->coldwater;
        $water->hotwater = $this->hotwater;
        $water->apartment = $this->apartment;
        $water->date = date('d.m.Y');
        return $water->save();

    }



}
