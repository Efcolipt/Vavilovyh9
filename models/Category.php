<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $title
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
        ];
    }

    public function getArticles()
    {
      return $this->hasMany(Article::className(), ['category_id' => 'id'])->where(['status' => 1]);
    }


    public function getArticlesCount()
    {
      return (int)$this->getArticles()->count();
    }

    public static function getAll()
    {
      return Category::find()->all();
    }


    public static function getArticlesByCategory($id,$pageSize = 4)
    {
      $query = Article::find()->where(['category_id' => $id,'status' => 1]);
      $countQuery = clone $query;
      $pagination = new Pagination(['totalCount' => $countQuery->count(), "pageSize" => $pageSize]);
      $articles = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();
      $data['articles'] = $articles;
      $data['pagination'] = $pagination;

      return $data;
    }






}
