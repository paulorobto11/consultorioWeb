<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EstadoFederacao;

/**
 * EstadoFederacaoSearch represents the model behind the search form about `app\models\EstadoFederacao`.
 */
class EstadoFederacaoSearch extends EstadoFederacao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'regime_substituicao_tributaria', 'empresa_id'], 'integer'],
            [['unidade_federacao', 'nome_estado', 'mensagem_substituicao'], 'safe'],
            [['aliquota_icms', 'aliquota_icms_antecipacao', 'percentual_despesas_acessorias'], 'number'],
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
        $query = EstadoFederacao::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'aliquota_icms' => $this->aliquota_icms,
            'aliquota_icms_antecipacao' => $this->aliquota_icms_antecipacao,
            'percentual_despesas_acessorias' => $this->percentual_despesas_acessorias,
            'regime_substituicao_tributaria' => $this->regime_substituicao_tributaria,
            'empresa_id' => $this->empresa_id,
        ]);

        $query->andFilterWhere(['like', 'unidade_federacao', $this->unidade_federacao])
            ->andFilterWhere(['like', 'nome_estado', $this->nome_estado])
            ->andFilterWhere(['like', 'mensagem_substituicao', $this->mensagem_substituicao]);

        return $dataProvider;
    }
}
