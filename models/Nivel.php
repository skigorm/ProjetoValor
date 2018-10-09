<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nivel".
 *
 * @property int $idnivel
 * @property string $nivel
 */
class Nivel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nivel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idnivel', 'nivel'], 'required'],
            [['idnivel'], 'integer'],
            [['nivel'], 'string', 'max' => 45],
            [['idnivel'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idnivel' => 'Idnivel',
            'nivel' => 'Nivel',
        ];
    }
}
