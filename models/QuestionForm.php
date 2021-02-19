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
            [['text','apartment','name'], 'required'],
            [['apartment'], 'integer', 'message' => 'Укажите квартиру'],
            [['name'],  'string', 'length' => [2,50]],
            ['contact','match', 'pattern' => '/^\+7[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}$/', 'message' => 'Введите корректный номер (+70000000000)'],
            [['text'], 'string', 'length' => [10,255]]
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
