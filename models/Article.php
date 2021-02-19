<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use app\models\ImageUpload;
use app\models\ArticleTag;
use yii\web\UploadedFile;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $content
 * @property string|null $date
 * @property string|null $image
 * @property int|null $viewed
 * @property int|null $user_id
 * @property int|null $status
 * @property int|null $category_id
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','status'], 'required'],
            [['title', 'description', 'content'], 'string'],
            [['title'], 'string' , 'max' => 255],
            [['date'], 'date', 'format' => 'php:d.m.Y'],
            [['date'], 'default', 'value' => date('d.m.Y')],
            [['image'], 'default', 'value' => '/uploads/no-image.png'],
            [['category_id'], 'number'],
            [['status'], 'boolean'],
            [['viewed'], 'default', 'value' => 0],

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
            'description' => 'Контент',
            'content' => 'Краткое описание',
            'date' => 'Дата выставления поста',
            'image' => 'Обложка поста',
            'viewed' => 'Просмотры',
            'user_id' => 'ID выставивший статью',
            'status' => 'Статус публикации',
            'category_id' => 'Привязан к категории',
        ];
    }

    public function saveArticle()
    {
      $this->user_id = Yii::$app->user->id;
      return  $this->save();
    }

    public function saveImage($filename)
    {
      $this->image = $filename;
      return $this->save(false);
    }

    public function deleteImage()
    {
      $imageUploadModel = new ImageUpload();
      $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function getImage()
    {
      return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }

    public function beforeDelete()
    {
      $this->deleteImage();
      $this->deleteImage();
      return parent::beforeDelete();
    }

    public  function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag_id'])
            ->viaTable('article_tag', ['article_id' => 'id']);
    }
    public function getSelectedTags()
    {
      $selectedTags = $this->getTags()->select('id')->asArray()->all();
      return  ArrayHelper::getColumn($selectedTags, 'id');
    }

    public function saveTags($tags)
    {
      if (is_array($tags)) {
        $this->clearCurrentTags();
        foreach ($tags as $tag_id) {
          $tag = Tag::findOne($tag_id);
          $this->link('tags',$tag);
        }
      }
    }
    public function clearCurrentTags()
    {
      ArticleTag::deleteAll(['article_id' => $this->id]);
    }

    public function getDate()
    {
      Yii::$app->formatter->locale = 'ru-RU';
      return Yii::$app->formatter->asDate($this->date,'long');
    }

    public static function getAll($pageSize = 4)
    {
      $query = Article::find()->where(['status' => 1]);
      $countQuery = clone $query;
      $pagination = new Pagination(['totalCount' => $countQuery->count(), "pageSize" => $pageSize]);
      $articles = $query->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();
      $data['articles'] = $articles;
      $data['pagination'] = $pagination;

      return $data;
    }

    public static function getPopulars(){
      return Article::find()->orderBy('viewed desc')->where(['status' => 1])->limit(4)->all();
    }


    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['article_id'=>'id']);
    }

    public function getArticleComments()
    {
        return $this->getComments()->where(['status'=>1])->all();
    }

    public function getArticleTags()
    {
        return $this->getTags()->all();
    }

    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id'=>'user_id']);
    }

    public function viewedCounter()
    {
        $this->viewed += 1;
        return $this->save(false);
    }


}
