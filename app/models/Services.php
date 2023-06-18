<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%services}}".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $icon
 *
 * @property StationsFeatures[] $stationsFeatures
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%services}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['code'], 'string', 'max' => 50],
            [['name', 'icon'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'icon' => 'Icon',
        ];
    }

    /**
     * Gets query for [[StationsFeatures]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsFeaturesQuery
     */
    public function getStationsFeatures()
    {
        return $this->hasMany(StationsFeatures::class, ['feature_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\queries\ServicesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\ServicesQuery(get_called_class());
    }
}
