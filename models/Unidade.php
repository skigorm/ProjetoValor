<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidade".
 *
 * @property int $idunidade
 * @property string $sigla
 * @property string $nomeUnidade
 * @property int $FKNivel
 * @property int $FKUnidade
 * @property int $status
 *
 * @property Objetivo[] $objetivos
 * @property Nivel $fKNivel
 * @property Unidade $fKUnidade
 * @property Unidade[] $unidades
 */
class Unidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FKNivel', 'status'], 'required'],
            [['FKNivel', 'FKUnidade', 'status'], 'integer'],
            [['sigla'], 'string', 'max' => 20],
            [['nomeUnidade'], 'string', 'max' => 225],
            [['FKNivel'], 'exist', 'skipOnError' => true, 'targetClass' => Nivel::className(), 'targetAttribute' => ['FKNivel' => 'idnivel']],
            [['FKUnidade'], 'exist', 'skipOnError' => true, 'targetClass' => Unidade::className(), 'targetAttribute' => ['FKUnidade' => 'idunidade']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idunidade' => 'Idunidade',
            'sigla' => 'Sigla',
            'nomeUnidade' => 'Nome Unidade',
            'FKNivel' => 'Fknivel',
            'FKUnidade' => 'Fkunidade',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjetivos()
    {
        return $this->hasMany(Objetivo::className(), ['FKUnidade' => 'idunidade']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNivel()
    {
        return $this->hasOne(Nivel::className(), ['idnivel' => 'FKNivel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFKUnidade()
    {
        return $this->hasOne(Unidade::className(), ['idunidade' => 'FKUnidade']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidades()
    {
        return $this->hasMany(Unidade::className(), ['FKUnidade' => 'idunidade']);
    }
}
