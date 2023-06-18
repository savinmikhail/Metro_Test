<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%stations_audio}}".
 *
 * @property int $id
 * @property int $station_id
 * @property string $direction
 * @property string $action
 * @property string|null $sound
 *
 * @property Stations $station
 */
class StationsAudio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%stations_audio}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'direction', 'action'], 'required'],
            [['station_id'], 'integer'],
            [['direction', 'action'], 'string'],
            [['sound'], 'string', 'max' => 500],
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
            'action' => 'Action',
            'sound' => 'Sound',
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
     * {@inheritdoc}
     * @return \app\models\queries\StationsAudioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\StationsAudioQuery(get_called_class());
    }
}
