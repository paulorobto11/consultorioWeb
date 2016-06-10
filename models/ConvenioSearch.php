<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Convenio;

/**
 * ConvenioSearch represents the model behind the search form about `app\models\Convenio`.
 */
class ConvenioSearch extends Convenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dddfone', 'fone'], 'integer'],
            [['nome', 'dtnascto', 'cnpj', 'rua', 'nroend', 'bairro', 'cidade', 'uf', 'cep', 'email'], 'safe'],
            [['vlrcons'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Convenio::find();

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
            'id' => $this->id,
            'dtnascto' => $this->dtnascto,
            'dddfone' => $this->dddfone,
            'fone' => $this->fone,
            'vlrcons' => $this->vlrcons,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cnpj', $this->cnpj])
            ->andFilterWhere(['like', 'rua', $this->rua])
            ->andFilterWhere(['like', 'nroend', $this->nroend])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'uf', $this->uf])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
