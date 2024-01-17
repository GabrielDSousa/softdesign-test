<?php

namespace backend\controllers;

use yii\rest\ActiveController;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\base\DynamicModel;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends ActiveController
{
    public $modelClass = 'backend\models\Book';

    public function behaviors()
    {
        return ArrayHelper::merge([
            [
                'class' => Cors::class,
            ],
        ], parent::behaviors());
    }

    public function actions()
    {
        $actions = parent::actions();

        $actions['index']['dataFilter'] = [
            'class' => \yii\data\ActiveDataFilter::class,
            'attributeMap' => [
                'id' => 'id',
                'title' => 'title',
                'description' => 'description',
                'author' => 'author',
                'pages' => 'pages',
                'created_at' => 'created_at',
                'updated_at' => 'updated_at',
            ],
            'searchModel' => (new DynamicModel(['title', 'description', 'author', 'pages']))->addRule(['title', 'description', 'author'], 'string')->addRule(['pages'], 'integer'),
        ];

        $actions['index']['pagination'] = [
            'pageSize' => 10,
        ];

        $actions['index']['sort'] = [
            'defaultOrder' => [
                'created_at' => SORT_DESC,
            ]
        ];

        return $actions;
    }
}
