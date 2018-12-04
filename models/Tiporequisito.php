<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiporequisito".
 *
 * @property int $idtipoRequisito
 * @property string $tipoRequisito
 *
 * @property Requisito[] $requisitos
 */
class Tiporequisito extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tiporequisito';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtipoRequisito', 'tipoRequisito'], 'required'],
            [['idtipoRequisito'], 'integer'],
            [['tipoRequisito'], 'string', 'max' => 45],
            [['idtipoRequisito'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtipoRequisito' => 'Idtipo Requisito',
            'tipoRequisito' => 'Tipo Requisito',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequisitos()
    {
        return $this->hasMany(Requisito::className(), ['FKtipoRequisito' => 'idtipoRequisito']);
    }
}
