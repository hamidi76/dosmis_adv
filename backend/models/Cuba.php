<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cuba".
 *
 * @property int $idrec
 * @property string $nama
 * @property string $email
 * @property string $notel
 */
class Cuba extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuba';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idrec', 'nama', 'email', 'notel'], 'required'],
            [['idrec'], 'integer'],
            [['nama'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 150],
            [['notel'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idrec' => 'Idrec',
            'nama' => 'Nama',
            'email' => 'Email',
            'notel' => 'Notel',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CubaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CubaQuery(get_called_class());
    }
}
