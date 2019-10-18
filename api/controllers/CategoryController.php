<?php

namespace app\controllers;

use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = 'app\models\Categorias';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'data',
        'linksEnvelope' => 'links',
        'metaEnvelope' => 'meta'
    ];
}
