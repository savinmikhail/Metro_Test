<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%stations_exits}}".
 *
 * @property int $id
 * @property int $station_id
 * @property string $direction
 * @property string $doors
 *
 * @property Stations $station
 */
class StationsExits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%stations_exits}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'direction', 'doors'], 'required'],
            [['station_id'], 'integer'],
            [['direction', 'doors'], 'string'],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stations::class, 'targetAttribute' => ['station_id' => 'id']],
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
            'direction' => 'Direction',
            'doors' => 'Doors',
        ];
    }

    public function fields()
    {
        return ['doors'];
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
     * @return \app\models\queries\StationsExitsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\StationsExitsQuery(get_called_class());
    }
}
