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
            ['contact','match', 'pattern' => '/\S+\@\S+\.[a-z]+/i', 'message' => 'Введите корректный Email'],
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
