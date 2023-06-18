<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%stations_translation}}".
 *
 * @property int $id
 * @property int $station_id
 * @property int $language_id
 * @property string $value
 *
 * @property Stations $station
 */
class StationsTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%stations_translation}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'language_id', 'value'], 'required'],
            [['station_id', 'language_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
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
            'language_id' => 'Language ID',
            'value' => 'Value',
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
     * @return \app\models\queries\StationsTranslationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\StationsTranslationQuery(get_called_class());
    }
}
