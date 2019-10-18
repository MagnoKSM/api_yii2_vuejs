<?php

namespace app\controllers;

use yii\rest\ActiveController;

class NewsController extends ActiveController
{
    public $modelClass = 'app\models\News';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'data',
        'linksEnvelope' => 'links',
        'metaEnvelope' => 'meta'
    ];

    public function behaviors()
    {
        
    }
}
