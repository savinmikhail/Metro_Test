<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%languages}}".
 *
 * @property int $id
 * @property int $active
 * @property string $name
 * @property string $code
 * @property int $sort
 *
 * @property LinesTranslation[] $linesTranslations
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%languages}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active', 'sort'], 'integer'],
            [['name', 'code', 'sort'], 'required'],
            [['name'], 'string', 'max' => 128],
            [['code'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Active',
            'name' => 'Name',
            'code' => 'Code',
            'sort' => 'Sort',
        ];
    }

    /**
     * Gets query for [[LinesTranslations]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\LinesTranslationQuery
     */
    public function getLinesTranslations()
    {
        return $this->hasMany(LinesTranslation::class, ['language_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\queries\LanguagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\LanguagesQuery(get_called_class());
    }
}
