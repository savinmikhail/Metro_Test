<?php

namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\StationsTranslation]].
 *
 * @see \app\models\StationsTranslation
 */
class StationsTranslationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\StationsTranslation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\StationsTranslation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
