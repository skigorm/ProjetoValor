<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objetivodireto_objetivoindireto".
 *
 * @property int $FKObjetivoDir
 * @property int $FKObjetivoInd
 *
 * @property Objetivo $fKObjetivoDir
 * @property Objetivo $fKObjetivoInd
 */
class ObjetivodiretoObjetivoindireto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'objetivodireto_objetivoindireto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FKObjetivoDir', 'FKObjetivoInd'], 'required'],
            [['FKObjetivoDir', 'FKObjetivoInd'], 'integer'],
            [['FKObjetivoDir', 'FKObjetivoInd'], 'unique', 'targetAttribute' => ['FKObjetivoDir', 'FKObjetivoInd']],
            [['FKObjetivoDir'], 'exist', 'skipOnError' => true, 'targetClass' => Objetivo::className(), 'targetAttribute' => ['FKObjetivoDir' => 'idobjetivo']],
            [['FKObjetivoInd'], 'exist', 'skipOnError' => true, 'targetClass' => Objetivo::className(), 'targetAttribute' => ['FKObjetivoInd' => 'idobjetivo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'FKObjetivoDir' => 'Fkobjetivo Dir',
            'FKObjetivoInd' => 'Fkobjetivo Ind',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFKObjetivoDir()
    {
        return $this->hasOne(Objetivo::className(), ['idobjetivo' => 'FKObjetivoDir']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFKObjetivoInd()
    {
        return $this->hasOne(Objetivo::className(), ['idobjetivo' => 'FKObjetivoInd']);
    }
}
