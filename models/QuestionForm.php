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
            [['text','apartment','name'], 'required','message' => 'Заполните поле'],
            [['apartment'], 'integer', 'message' => 'Укажите квартиру'],
            [['name'],  'string', 'length' => [2,50], 'message' => 'Введите корректное имя'],
            ['contact','match', 'pattern' => '/^[+0-9]{1}[(0-9]{2}[0-9]{2}[)0-9]{2}[0-9]{4,7}$/', 'message' => 'Введите корректный номер (+70000000000)'],
            [['text'], 'string', 'length' => [10,255], 'message' => 'Текст должен быть не меньше 10 и не больше 255 символов  ']
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
        $this->sendEmailQuestion();
        return $question->save();

    }
    public function sendEmailQuestion()
    {
      Yii::$app->mailer->compose()
          ->setFrom(['mailer@d-idei.ru' => 'Письмо с сайта'])
          ->setTo('efcolipt@yandex.ru')
          ->setSubject('Тема сообщения')
          ->setTextBody('Текст сообщения')
          ->send();
    }


}
