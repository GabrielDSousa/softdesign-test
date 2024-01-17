<?php

namespace backend\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $author
 * @property int $pages
 * @property int $created_at
 * @property int $updated_at
 */
class Book extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'pages'], 'required'],
            [['pages'], 'integer'],
            [['title', 'author'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 244],
            [['created_at', 'updated_at'], 'string']
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
            'description' => 'Description',
            'author' => 'Author',
            'pages' => 'Pages',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
