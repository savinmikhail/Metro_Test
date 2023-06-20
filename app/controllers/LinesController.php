<?php

namespace app\controllers;

use app\models\Lines;
use app\models\LinesTranslation;
use Yii;
use yii\base\InvalidConfigException;
use yii\db\Exception;
use yii\web\Response;
use function PHPUnit\Framework\throwException;

class LinesController extends \yii\rest\ActiveController
{
    public $enableCsrfValidation = false;

    public $modelClass = Lines::class;

    /**
     * @throws Exception
     * @throws InvalidConfigException
     */
    public function actionAddLine()
    {
        $line = new Lines();
        return $line->saveWithRelation(Yii::$app->getRequest()->getBodyParams());
    }
}

