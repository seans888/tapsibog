<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property integer $post_description
 * @property integer $author_id
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'post_title', 'post_description', 'author_id'], 'required'],
            [['post_id', 'post_description', 'author_id'], 'integer'],
            [['post_title'], 'string', 'max' => 111],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'post_description' => 'Post Description',
            'author_id' => 'Author ID',
        ];
    }
}
