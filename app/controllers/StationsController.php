<?php

namespace app\controllers;

use app\models\Stations;
use app\models\StationsAudio;
use app\models\StationsExits;
use app\models\StationsFeatures;
use app\models\StationsTransfers;
use app\models\StationsTranslation;
use Yii;
use yii\base\InvalidConfigException;
use yii\web\Request;

class StationsController extends \yii\rest\ActiveController
{
    public $enableCsrfValidation = false;

    public $modelClass = Stations::class;

    public function actionAddStation()
    {
        $stationData = Yii::$app->getRequest()->getBodyParams();

        $station = new Stations();

        // Extract the dependencies

        $stationsTranslations = $stationData['stationTranslations'];
        $stationsTransfers = $stationData['stationsTransfers'];
        $stationsAudios = $stationData['stationsAudios'];
        $stationsFeatures = $stationData['stationsFeatures'];
        $stationsExits = $stationData['stationsExits'];

        $transaction = Yii::$app->db->beginTransaction();

        try {
            if ($station->load($stationData, '') && $station->validate()) {
                $station->save();
            } else {
                return $station->getErrors();
            }
            // Insert dependencies into the matching tables, if corresponding fields are provided
            if (isset($stationData['stationTranslations'])) {
            $errors['translations'] = $station->attachTranslations($stationsTranslations);
            }
            if (isset($stationData['stationsAudios'])) {
                $errors['audios'] = $station->attachAudios($stationsAudios);
            }
            if (isset($stationData['stationsTransfers'])) {
                $errors['transfers'] = $station->attachTransfers($stationsTransfers);
            }
            if (isset($stationData['stationsFeatures'])) {
                $errors['features'] = $station->attachFeatures($stationsFeatures);
            }
            if (isset($stationData['stationsExits'])) {
                $errors['exits'] = $station->attachExits($stationsExits);
            }

//            if(empty($errors))
            $transaction->commit();
            return $station;
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        }
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
        // Create an instance of the Yii Request class
        $request = Yii::$app->getRequest();
        try {
            $stationData = Yii::$app->getRequest()->getBodyParams();
        } catch (InvalidConfigException $e) {
            Yii::error($e->getMessage());
            return false;
        }
        $transaction = Yii::$app->db->beginTransaction();

        try {
            // Load the record from the database
            $station = Stations::findOne($id);

            if ($station === null) {
                return ['error' => 'Station not found.'];
            }

            // Save the updated station record
            if ($station->load($stationData, '') && $station->validate()) {
                $station->setIsNewRecord(false);
                $station->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return $station->getErrors();
            }

// Update the related records in associated tables

// Update stationsTranslations
            $translations = $stationData['stationTranslations'];
            if (isset($translations)) {
                $errors['translations'] = $station->updateTranslations($translations);
            }
// Update stationsTransfers
            $transfers = $stationData['stationsTransfers'];
            if (isset($transfers)) {
                $errors['transfers'] = $station->updateTransfers($transfers);
            }
// Update stationsAudios
            $audios = $stationData['stationsAudios'];
            if (isset($audios)) {
                $errors['audios'] = $station->updateAudios($audios);
            }
// Update stationsFeatures
            $features = $stationData['stationsFeatures'];
            if (isset($features)) {
                $errors['features'] = $station->updateFeatures($features);
            }
// Update stationsExits
            $exits = $stationData['stationsExits'];
            if (isset($exits)) {
                $errors['exits'] = $station->updateExits($exits);
            }
            // Commit the transaction if all updates are successful
            $transaction->commit();
            return true;
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        }
    }
}