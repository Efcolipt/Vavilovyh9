<?php

namespace app\models;

use Yii;
use yii\base\Model;

class QuestionForm extends Model
{
    public $question;
    public $name;
    public $contact;
    public $text;
    public $apartment;

    public function rules()
    {
        return [
            [['text','apartment','name'], 'required','message' => 'Заполните все поля'],
            [['apartment'], 'integer', 'message' => 'Укажите квартиру'],
            [['name'],'string',   'min' => 2, 'max' => 50, 'tooLong' => 'Имя слишком большое', 'tooShort' => 'Имя слишком маленькое'],
            ['contact','match', 'pattern' => '/^[+0-9]{1}[(0-9]{2}[0-9]{2}[)0-9]{2}[0-9]{4,7}$/', 'message' => 'Введите корректный номер (+70000000000)'],
            [['text'],'string',  'min' => 10, 'max' => 254, 'tooLong' => 'Текст слишком большой', 'tooShort' => 'Текст слишком маленький']
        ];
    }

    public function saveQuestion()
    {
        $question = new Question;
        $question->text = $this->text;
        $question->name = $this->name;
        $question->contact = $this->contact;
        $question->apartment = $this->apartment;
        $question->date = date('d.m.Y');
        return $question->save();

    }


}
