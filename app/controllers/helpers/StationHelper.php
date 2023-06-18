<?php

namespace app\controllers\helpers;

class StationHelper
{
    // Helper function to handle validation errors
    private function handleValidationErrors($model, $key)
    {
        if ($model->hasErrors()) {
            return [$key => $model->getErrors()];
        }
        return null;
    }

// Extracted validation and saving logic for related models
    private function saveRelatedModel($model, $data, $relatedModel, $relatedKey)
    {
        foreach ($data as $key => $itemData) {
            $relatedItem = $relatedModel::findOne($itemData[$relatedKey]);
            if ($relatedItem === null) {
                $relatedItem = new $relatedModel();
            }
            $relatedItem->attributes = $itemData;
            $relatedItem->station_id = $model->id;
            if (!$relatedItem->validate() || !$relatedItem->save()) {
                return $this->handleValidationErrors($relatedItem, $key);
            }
        }
        return null;
    }
}