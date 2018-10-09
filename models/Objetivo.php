<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objetivo".
 *
 * @property int $idobjetivo
 * @property string $objetivo
 * @property int $FKTipoObjetivo
 * @property int $FKUnidade
 * @property int $FKImpacto
 *
 * @property Impacto $fKImpacto
 * @property Tipoobjetivo $fKTipoObjetivo
 * @property Unidade $fKUnidade
 * @property Requisito[] $requisitos
 */
class Objetivo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'objetivo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['objetivo', 'FKTipoObjetivo', 'FKUnidade'], 'required'],
            [['FKTipoObjetivo', 'FKUnidade', 'FKImpacto'], 'integer'],
            [['objetivo'], 'string', 'max' => 255],
            [['FKImpacto'], 'exist', 'skipOnError' => true, 'targetClass' => Impacto::className(), 'targetAttribute' => ['FKImpacto' => 'idimpacto']],
            [['FKTipoObjetivo'], 'exist', 'skipOnError' => true, 'targetClass' => Tipoobjetivo::className(), 'targetAttribute' => ['FKTipoObjetivo' => 'idtipo']],
            [['FKUnidade'], 'exist', 'skipOnError' => true, 'targetClass' => Unidade::className(), 'targetAttribute' => ['FKUnidade' => 'idunidade']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idobjetivo' => 'Idobjetivo',
            'objetivo' => 'Objetivo',
            'FKTipoObjetivo' => 'Fktipo Objetivo',
            'FKUnidade' => 'Fkunidade',
            'FKImpacto' => 'Fkimpacto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImpacto()
    {
        return $this->hasOne(Impacto::className(), ['idimpacto' => 'FKImpacto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoObjetivo()
    {
        return $this->hasOne(Tipoobjetivo::className(), ['idtipo' => 'FKTipoObjetivo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidade()
    {
        return $this->hasOne(Unidade::className(), ['idunidade' => 'FKUnidade']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequisitos()
    {
        return $this->hasMany(Requisito::className(), ['FKObjetivo' => 'idobjetivo']);
    }
}
