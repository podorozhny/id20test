<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $published_at
 * @property integer $subject_id
 * @property string $title
 * @property string $content
 *
 * @property NewsSubject $subject
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['published_at'], 'safe'],
            [['subject_id'], 'integer'],
            [['title', 'content'], 'required'],
            [['title'], 'string', 'max' => 100],
            [['content'], 'string', 'max' => 4096]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'published_at' => 'Published at',
            'subject_id' => 'Subject',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(NewsSubject::className(), ['id' => 'subject_id']);
    }

    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
