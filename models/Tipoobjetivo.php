<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoobjetivo".
 *
 * @property int $idtipo
 * @property string $tipoObjetivo
 *
 * @property Objetivo[] $objetivos
 */
class Tipoobjetivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipoobjetivo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtipo', 'tipoObjetivo'], 'required'],
            [['idtipo'], 'integer'],
            [['tipoObjetivo'], 'string', 'max' => 20],
            [['idtipo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtipo' => 'Idtipo',
            'tipoObjetivo' => 'Tipo Objetivo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjetivos()
    {
        return $this->hasMany(Objetivo::className(), ['FKTipoObjetivo' => 'idtipo']);
    }
}
