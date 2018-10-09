<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objetivodireto_objetivoindireto".
 *
 * @property int $FKObjetivoDir
 * @property int $FKObjetivoInd
 */
class Objetivodi extends \yii\db\ActiveRecord
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
            [['FKObjetivoDir', 'FKObjetivoInd'], 'required', 'message' => 'Este campo é obrigatório'],
            [['FKObjetivoDir', 'FKObjetivoInd'], 'integer'],
            [['FKObjetivoDir', 'FKObjetivoInd'], 'unique', 'targetAttribute' => ['FKObjetivoDir', 'FKObjetivoInd']],

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
}
