<?php
/**
 * Created by PhpStorm.
 * User: MagnoKSM
 * Date: 18/10/2019
 * Time: 12:26
 */

namespace app\controllers;

use yii\rest\ActiveController;

class BaseApiController extends ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'data',
        'linksEnvelope' => 'links',
        'metaEnvelope' => 'meta'
    ];

}