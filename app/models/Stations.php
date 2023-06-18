<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%stations}}".
 *
 * @property int $id
 * @property string|null $external_id
 * @property string|null $number
 * @property int $line_id
 * @property string $name
 * @property int|null $cross_line_id
 * @property string|null $cross_type
 * @property int|null $crossPlatform
 * @property string|null $crossPlatformColor
 * @property string|null $scheme
 * @property int|null $sort
 * @property int $active
 *
 * @property Lines $line
 * @property Stations[] $stationTos
 * @property Stations[] $stations
 * @property StationsAudio[] $stationsAudios
 * @property StationsExits[] $stationsExits
 * @property StationsFeatures[] $stationsFeatures
 * @property StationsTransfers[] $stationsTransfers
 * @property StationsTransfers[] $stationsTransfers0
 * @property StationsTranslation[] $stationsTranslations
 */
class Stations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%stations}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['line_id', 'name'], 'required'],
            [['line_id', 'cross_line_id', 'crossPlatform', 'sort', 'active'], 'integer'],
            [['cross_type'], 'string'],
            [['external_id', 'number', 'name'], 'string', 'max' => 128],
            [['crossPlatformColor'], 'string', 'max' => 7],
            [['scheme'], 'string', 'max' => 500],
            [['line_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lines::class, 'targetAttribute' => ['line_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'external_id' => 'External ID',
            'number' => 'Number',
            'line_id' => 'Line ID',
            'name' => 'Name',
            'cross_line_id' => 'Cross Line ID',
            'cross_type' => 'Cross Type',
            'crossPlatform' => 'Cross Platform',
            'crossPlatformColor' => 'Cross Platform Color',
            'scheme' => 'Scheme',
            'sort' => 'Sort',
            'active' => 'Active',
        ];
    }
//
    public function fields()
    {
        return [
            'id',
            'external_id',
            'line_id',
            'name',
            'stationsAudios',
            'stationsExits',
            'stationsFeatures',
            'stationsTranslations',
            'stationsTransfers'
        ];
    }

    public function attachTranslations(array $translations)
    {
        foreach ($translations as $key => $translation) {
            $stationsTranslation = new StationsTranslation();
            $stationsTranslation->station_id = $this->id;
            $stationsTranslation->language_id = (int)$translation['language_id'];
            $stationsTranslation->value = $translation['value'];

            if ($stationsTranslation->validate()) {
                $stationsTranslation->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $stationsTranslation->getErrors()];
            }
        }
    }

      public function updateTranslations(array $translations)
    {
        foreach ($translations as $key => $translation) {
            $stationTranslation = StationsTranslation::findOne(['station_id' => $this->id, 'language_id' => $translation['language_id']]);
            if ($stationTranslation === null) {
                $stationTranslation = new StationsTranslation();
                $stationTranslation->station_id = $this->id;
                $stationTranslation->language_id = $translation['language_id'];
            }
            $stationTranslation->value = $translation['value'];

            if ($stationTranslation->validate()) {
                $stationTranslation->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $stationTranslation->getErrors()];
            }
        }
    }

    public function attachTransfers(array $transfers)
    {
        foreach ($transfers as $key => $transfer) {
            $stationsTransfer = new StationsTransfers();
            $stationsTransfer->station_id = $this->id;
            $stationsTransfer->station_to_id = (int)$transfer['station_to_id'];
            $stationsTransfer->type = $transfer['type'];
            $stationsTransfer->name = $transfer['name'];
            $stationsTransfer->code = $transfer['code'];
            $stationsTransfer->icon = $transfer['icon'];

            if ($stationsTransfer->validate()) {
                $stationsTransfer->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $stationsTransfer->getErrors()];
            }
        }
    }
 public function updateTransfers(array $transfers)
    {
        foreach ($transfers as $key => $transfer) {
            $stationTransfer = StationsTransfers::findOne(['station_id' => $this->id, 'station_to_id' => $transfer['station_to_id']]);
            if ($stationTransfer === null) {
                $stationTransfer = new StationsTransfers();
                $stationTransfer->station_id = $this->id;
                $stationTransfer->station_to_id = $transfer['station_to_id'];
            }
            $stationTransfer->type = $transfer['type'];
            $stationTransfer->name = $transfer['name'];
            $stationTransfer->code = $transfer['code'];
            $stationTransfer->icon = $transfer['icon'];

            if ($stationTransfer->validate()) {
                $stationTransfer->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $stationTransfer->getErrors()];
            }
        }
    }
    public function attachAudios(array $audios)
    {
        foreach ($audios as $key => $audio) {
            $stationsAudio = new StationsAudio();
            $stationsAudio->station_id = $this->id;
            $stationsAudio->direction = $audio['direction'];
            $stationsAudio->action = $audio['action'];
            $stationsAudio->sound = $audio['sound'];

            if ($stationsAudio->validate()) {
                $stationsAudio->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $stationsAudio->getErrors()];
            }
        }
    }
        public function updateAudios(array $audios)
    {
        foreach ($audios as $key => $audio) {
            $stationsAudio = StationsAudio::findOne(['station_id' => $this->id, 'direction' => $audio['direction']]);
            if ($stationsAudio === null) {
                $stationsAudio = new StationsAudio();
                $stationsAudio->station_id = $this->id;
                $stationsAudio->direction = $audio['direction'];
            }
            $stationsAudio->action = $audio['action'];
            $stationsAudio->sound = $audio['sound'];

            if ($stationsAudio->validate()) {
                $stationsAudio->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $stationsAudio->getErrors()];
            }
        }
    }

        public function attachFeatures(array $features)
    {
        foreach ($features as $key => $feature) {
            $stationsFeature = new StationsFeatures();
            $stationsFeature->station_id = $this->id;
            $stationsFeature->feature_id = $feature['feature_id'];

            if ($stationsFeature->validate()) {
                $stationsFeature->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $stationsFeature->getErrors()];
            }
        }
    }

          public function updateFeatures(array $features)
    {
        foreach ($features as $key => $feature) {
            $stationsFeature = StationsFeatures::findOne(['station_id' => $this->id, 'feature_id' => $feature['feature_id']]);
            if ($stationsFeature === null) {
                $stationsFeature = new StationsFeatures();
                $stationsFeature->station_id = $this->id;
                $stationsFeature->feature_id = $feature['feature_id'];
            }

            if ($stationsFeature->validate()) {
                $stationsFeature->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $stationsFeature->getErrors()];
            }
        }
    }

        public function attachExits(array $exits)
    {
        foreach ($exits as $key => $exit) {
            $stationsExit = new StationsExits();
            $stationsExit->station_id = $this->id;
            $stationsExit->direction = $exit['direction'];
            $stationsExit->doors = $exit['doors'];

            if ($stationsExit->validate()) {
                $stationsExit->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return ['stationsExit' => [$key => $stationsExit->getErrors()]];
            }
        }
    }
    public function updateExits(array $exits)
    {
        foreach ($exits as $key => $exit) {
            $stationsExit = StationsExits::findOne(['station_id' => $this->id, 'direction' => $exit['direction']]);
            if ($stationsExit === null) {
                $stationsExit = new StationsExits();
                $stationsExit->station_id = $this->id;
                $stationsExit->direction = $exit['direction'];
            }
            $stationsExit->doors = $exit['doors'];

            if ($stationsExit->validate()) {
                $stationsExit->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return ['stationsExit' => [$key => $stationsExit->getErrors()]];
            }
        }
    }



    /**
     * Gets query for [[Line]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\LinesQuery
     */
    public function getLine()
    {
        return $this->hasOne(Lines::class, ['id' => 'line_id']);
    }

    /**
     * Gets query for [[StationTos]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsQuery
     */
    public function getStationTos()
    {
        return $this->hasMany(Stations::class, ['id' => 'station_to_id'])->viaTable('{{%stations_transfers}}', ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Stations]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsQuery
     */
    public function getStations()
    {
        return $this->hasMany(Stations::class, ['id' => 'station_id'])->viaTable('{{%stations_transfers}}', ['station_to_id' => 'id']);
    }

    /**
     * Gets query for [[StationsAudios]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsAudioQuery
     */
    public function getStationsAudios()
    {
        return $this->hasMany(StationsAudio::class, ['station_id' => 'id']);
    }

    /**
     * Gets query for [[StationsExits]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsExitsQuery
     */
    public function getStationsExits()
    {
        return $this->hasMany(StationsExits::class, ['station_id' => 'id']);
    }

    /**
     * Gets query for [[StationsFeatures]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsFeaturesQuery
     */
    public function getStationsFeatures()
    {
        return $this->hasMany(StationsFeatures::class, ['station_id' => 'id']);
    }

    /**
     * Gets query for [[StationsTransfers]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsTransfersQuery
     */
    public function getStationsTransfers()
    {
        return $this->hasMany(StationsTransfers::class, ['station_id' => 'id']);
    }

    /**
     * Gets query for [[StationsTransfers0]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsTransfersQuery
     */
    public function getStationsTransfers0()
    {
        return $this->hasMany(StationsTransfers::class, ['station_to_id' => 'id']);
    }

    /**
     * Gets query for [[StationsTranslations]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsTranslationQuery
     */
    public function getStationsTranslations()
    {
        return $this->hasMany(StationsTranslation::class, ['station_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\queries\StationsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\StationsQuery(get_called_class());
    }
}
