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
        $lineData = Yii::$app->getRequest()->getBodyParams();

        $line = new Lines();

        $translations = $lineData['translations'];

        $transaction = Yii::$app->db->beginTransaction();

        try {
        if ($line->load($lineData, '') && $line->validate()) {
            $line->save();
        } else {
            // Handle the validation errors, such as returning them as a response or displaying them to the user
            return $line->getErrors();
        }
// Extract the translations

            // Insert dependencies into the matching tables, if corresponding fields are provided
            if (isset($translations)) {
                $errors['translations'] = $line->attachTranslations($translations);
            }

            $transaction->commit();
            return true;
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        }
    }
}

