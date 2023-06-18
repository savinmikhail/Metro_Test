<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%stations_features}}".
 *
 * @property int $id
 * @property int|null $station_id
 * @property int $feature_id
 *
 * @property Services $feature
 * @property Stations $station
 */
class StationsFeatures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%stations_features}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'feature_id'], 'integer'],
            [['feature_id'], 'required'],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stations::class, 'targetAttribute' => ['station_id' => 'id']],
            [['feature_id'], 'exist', 'skipOnError' => true, 'targetClass' => Services::class, 'targetAttribute' => ['feature_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'station_id' => 'Station ID',
            'feature_id' => 'Feature ID',
        ];
    }

    /**
     * Gets query for [[Feature]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\ServicesQuery
     */
    public function getFeature()
    {
        return $this->hasOne(Services::class, ['id' => 'feature_id']);
    }

    /**
     * Gets query for [[Station]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsQuery
     */
    public function getStation()
    {
        return $this->hasOne(Stations::class, ['id' => 'station_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\queries\StationsFeaturesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\StationsFeaturesQuery(get_called_class());
    }
}
