<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empresa;

/**
 * EmpresaSearch represents the model behind the search form about `app\models\Empresa`.
 */
class EmpresaSearch extends Empresa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estado', 'cidade'], 'integer'],
            [['razao_social', 'cnpj', 'inscricao_estadual', 'inscricao_municipal', 'logradouro', 'numero', 'cep', 'bairro', 'telefone1', 'telefone2', 'email', 'site', 'logo', 'responsavel_id'], 'safe'],
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
        $query = Empresa::find();

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
            'estado' => $this->estado,
            'cidade' => $this->cidade,
        ]);

        $query->andFilterWhere(['like', 'razao_social', $this->razao_social])
            ->andFilterWhere(['like', 'cnpj', $this->cnpj])
            ->andFilterWhere(['like', 'inscricao_estadual', $this->inscricao_estadual])
            ->andFilterWhere(['like', 'inscricao_municipal', $this->inscricao_municipal])
            ->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'telefone1', $this->telefone1])
            ->andFilterWhere(['like', 'telefone2', $this->telefone2])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'site', $this->site])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'responsavel_id', $this->responsavel_id]);

        return $dataProvider;
    }
}
