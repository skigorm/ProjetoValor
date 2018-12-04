<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "impacto".
 *
 * @property int $idimpacto
 * @property string $impacto
 */
class Impacto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'impacto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idimpacto', 'impacto'], 'required'],
            [['idimpacto'], 'integer'],
            [['impacto'], 'string', 'max' => 20],
            [['idimpacto'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idimpacto' => 'Idimpacto',
            'impacto' => 'Impacto',
        ];
    }
}
