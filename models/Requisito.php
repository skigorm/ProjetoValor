<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requisito".
 *
 * @property int $idrequisito
 * @property string $descRequisito
 * @property int $FKtipoRequisito
 * @property int $FKObjetivo
 *
 * @property Tiporequisito $fKtipoRequisito
 */
class Requisito extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'requisito';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descRequisito'], 'string'],
            [['FKtipoRequisito', 'FKObjetivo'], 'required'],
            [['FKtipoRequisito', 'FKObjetivo'], 'integer'],
            [['FKtipoRequisito'], 'exist', 'skipOnError' => true, 'targetClass' => Tiporequisito::className(), 'targetAttribute' => ['FKtipoRequisito' => 'idtipoRequisito']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idrequisito' => 'Idrequisito',
            'descRequisito' => 'Desc Requisito',
            'FKtipoRequisito' => 'Fktipo Requisito',
            'FKObjetivo' => 'Fkobjetivo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFKtipoRequisito()
    {
        return $this->hasOne(Tiporequisito::className(), ['idtipoRequisito' => 'FKtipoRequisito']);
    }
}
