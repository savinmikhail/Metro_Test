<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%lines}}".
 *
 * @property int $id
 * @property string $number
 * @property string $name
 * @property string $color
 * @property string|null $style
 * @property int|null $circular
 * @property string|null $external_id
 * @property int|null $sort
 *
 * @property LinesTranslation[] $linesTranslations
 * @property Stations[] $stations
 */
class Lines extends \yii\db\ActiveRecord
{

    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%lines}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'name', 'color'], 'required'],
            [['style'], 'string'],
            [['circular', 'sort'], 'integer'],
            [['number'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 255],
            [['color'], 'string', 'max' => 7],
            [['external_id'], 'string', 'max' => 128],
            [['number', 'name'], 'unique', 'targetAttribute' => ['number', 'name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'name' => 'Name',
            'color' => 'Color',
            'style' => 'Style',
            'circular' => 'Circular',
            'external_id' => 'External ID',
            'sort' => 'Sort',
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios(); // TODO: Change the autogenerated stub
        $scenarios['create'] = ['number', 'name', 'color', 'circular', 'external_id', 'sort'];
        return $scenarios;
    }

    public function fields()
    {
        return ['id', 'number', 'name', 'color', 'style', 'circular', 'external_id', 'sort', 'linesTranslations'];
    }

    public function extraFields()
    {
        return ['stations'];
    }

    public function attachTranslations(array $translations)
    {
        foreach ($translations as $key => $translation) {
            $lineTranslation = new LinesTranslation();
            $lineTranslation->line_id = $this->id;
            $lineTranslation->language_id = (int)$translation['language_id'];
            $lineTranslation->value = $translation['value'];

            if ($lineTranslation->validate()) {
                $lineTranslation->save();
            } else {
                // Handle the validation errors, such as returning them as a response or displaying them to the user
                return [$key => $lineTranslation->getErrors()];
            }
        }
    }


    /**
     * Gets query for [[LinesTranslations]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\LinesTranslationQuery
     */
    public function getLinesTranslations()
    {
        return $this->hasMany(LinesTranslation::class, ['line_id' => 'id']);
    }

    /**
     * Gets query for [[Stations]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\StationsQuery
     */
    public function getStations()
    {
        return $this->hasMany(Stations::class, ['line_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\queries\LinesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\LinesQuery(get_called_class());
    }
}
