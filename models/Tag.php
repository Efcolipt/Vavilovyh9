<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string|null $title
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
            [['color'], 'string', 'max' => 255],
            [['title','color'], 'required']
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
            'color' => 'Цвет',
        ];
    }
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['id' => 'article_id'])
            ->viaTable('article_tag', ['tag_id' => 'id']);
    }


}
