<?php

namespace app\controllers;

use app\models\Stations;
use Yii;
use yii\base\InvalidConfigException;
use yii\rest\ActiveController;

class StationsController extends ActiveController
{
    public $enableCsrfValidation = false;

    public $modelClass = Stations::class;

    public function actionAddStation()
    {
        $station = new Stations();
        return $station->saveWithRelation(Yii::$app->getRequest()->getBodyParams());
    }

    public function actionDeleteStation($id)
    {
        $station = Stations::findOne($id);
        if($station !== null) {
            $station->delete();
            return ['status' => 'successfully deleted'];
        }
        else
        {
            return ['status' => 'error occurred. cant delete station'];
        }
    }

    public function actionUpdateStation($id)
    {
        // Load the record from the database
        $station = Stations::findOne($id);
        if ($station === null) {
            return 'Station not found.';
        }
        return $station->updateWithRelation(Yii::$app->getRequest()->getBodyParams());
    }
}