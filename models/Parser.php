<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rss".
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $date
 * @property string $author
 * @property string $description
 * @property string $imagine
 */
class Parser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url', 'date', 'author', 'imagine'], 'required'],
            [['date'], 'safe'],
            [['title', 'url', 'author', 'imagine'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'url' => 'Url',
            'date' => 'Date',
            'author' => 'Author',
            'imagine' => 'Imagine',
        ];
    }
}
