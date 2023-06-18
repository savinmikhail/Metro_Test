<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%lines_translation}}".
 *
 * @property int $id
 * @property int $line_id
 * @property int $language_id
 * @property string $value
 *
 * @property Languages $language
 * @property Lines $line
 */
class LinesTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%lines_translation}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['line_id', 'language_id', 'value'], 'required'],
            [['line_id', 'language_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::class, 'targetAttribute' => ['language_id' => 'id']],
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
            'line_id' => 'Line ID',
            'language_id' => 'Language ID',
            'value' => 'Value',
        ];
    }
//
//    public function fields()
//    {
//        return ['id'];
//    }

    /**
     * Gets query for [[Language]].
     *
     * @return \yii\db\ActiveQuery|\app\models\queries\LanguagesQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Languages::class, ['id' => 'language_id']);
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
     * {@inheritdoc}
     * @return \app\models\queries\LinesTranslationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\LinesTranslationQuery(get_called_class());
    }
}
