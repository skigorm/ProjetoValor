<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Objetivo;

/**
 * ObjetivoSearch represents the model behind the search form of `app\models\Objetivo`.
 */
class ObjetivoSearch extends Objetivo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idobjetivo', 'FKTipoObjetivo', 'FKUnidade', 'FKImpacto'], 'integer'],
            [['objetivo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Objetivo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idobjetivo' => $this->idobjetivo,
            'FKTipoObjetivo' => $this->FKTipoObjetivo,
            'FKUnidade' => $this->FKUnidade,
            'FKImpacto' => $this->FKImpacto,
            'tipoObjetivo.tipoObjetivo' =>  $this->FKTipoObjetivo,
        ]);

        $query->andFilterWhere(['like', 'objetivo', $this->objetivo])
              ->andFilterWhere(['like', 'tipoObjetivo.tipoObjetivo', $this->FKTipoObjetivo]);

        return $dataProvider;
    }
}
