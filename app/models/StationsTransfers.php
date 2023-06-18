<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%stations_transfers}}".
 *
 * @property int $id
 * @property int $station_id
 * @property int|null $station_to_id
 * @property string $type
 * @property string|null $name
 * @property string|null $code
 * @property string|null $icon
 *
 * @property Stations $station
 * @property Stations $stationTo
 */
class StationsTransfers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%stations_transfers}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'type'], 'required'],
            [['station_id', 'station_to_id'], 'integer'],
            [['type'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 50],
            [['icon'], 'string', 'max' => 500],
            [['station_id', 'station_to_id'], 'unique', 'targetAttribute' => ['station_id', 'station_to_id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stations::class, 'targetAttribute' => ['station_id' => 'id']],
            [['station_to_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stations::class, 'targetAttribute' => ['station_to_id' => 'id']],
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
            'station_to_id' => 'Station To ID',
            'type' => 'Type',
            'name' => 'Name',
            'code' => 'Code',
            'icon' => 'Icon',
        ];
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
     * Gets query for [[StationTo]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsQuery
     */
    public function getStationTo()
    {
        return $this->hasOne(Stations::class, ['id' => 'station_to_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\queries\StationsTransfersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\StationsTransfersQuery(get_called_class());
    }
}
