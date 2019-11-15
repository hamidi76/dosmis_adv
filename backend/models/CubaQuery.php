<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Cuba]].
 *
 * @see Cuba
 */
class CubaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cuba[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cuba|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
