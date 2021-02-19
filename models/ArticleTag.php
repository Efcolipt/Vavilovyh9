<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_tag".
 *
 * @property integer $id
 * @property integer $article_id
 * @property integer $tag_id
 *
 * @property Tag $tag
 * @property Article $article
 */
class ArticleTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'tag_id'], 'integer'],
            [['tag_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['tag_id' => 'id']],
            [['article_id'], 'exist', 'skipOnError' => true, 'targetClass' => Article::className(), 'targetAttribute' => ['article_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'ID привязанного поста',
            'tag_id' => 'ID привязанного тега',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }

    public function getArticles()
    {
      return $this->hasMany(Article::className(), ['category_id' => 'id'])->where(['status' => 1]);
    }


    public function getArticlesCount()
    {
      return (int)$this->getArticles()->count();
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
