<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form about `app\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estado_id', 'cidade_id', 'centro_custo_id', 'setor_id', 'cargo_id', 'ativo', 'empresa_id', 'user_id'], 'integer'],
            [['nome', 'apelido', 'data_nascimento', 'cpf', 'rg', 'email_pessoal', 'logradouro', 'numero', 'bairro', 'cep', 'fone1', 'fone2', 'foto', 'cnh_numero', 'cnh_data_expedicao', 'cnh_categoria', 'cnh_data_vencimento', 'data_admissao', 'data_demissao', 'email_empresa', 'ramal', 'dados_complementares', 'descricao_ocorrencias', 'fator_calculo_comissao', 'forma_credito', 'assinatura', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['valor_hora', 'percentual_comissao', 'saldo_viagens'], 'number'],
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
        $query = Usuarios::find();

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
        
        if ($params['empresa_id']) {
        	$this->empresa_id = $params['empresa_id']; 
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'data_nascimento' => $this->data_nascimento,
            'estado_id' => $this->estado_id,
            'cidade_id' => $this->cidade_id,
            'cnh_data_expedicao' => $this->cnh_data_expedicao,
            'cnh_data_vencimento' => $this->cnh_data_vencimento,
            'data_admissao' => $this->data_admissao,
            'data_demissao' => $this->data_demissao,
            'centro_custo_id' => $this->centro_custo_id,
            'setor_id' => $this->setor_id,
            'cargo_id' => $this->cargo_id,
            'valor_hora' => $this->valor_hora,
            'percentual_comissao' => $this->percentual_comissao,
            'saldo_viagens' => $this->saldo_viagens,
            'ativo' => $this->ativo,
            'data_cadastro' => $this->data_cadastro,
            'data_alteracao' => $this->data_alteracao,
            'empresa_id' => $this->empresa_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'apelido', $this->apelido])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'email_pessoal', $this->email_pessoal])
            ->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'fone1', $this->fone1])
            ->andFilterWhere(['like', 'fone2', $this->fone2])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'cnh_numero', $this->cnh_numero])
            ->andFilterWhere(['like', 'cnh_categoria', $this->cnh_categoria])
            ->andFilterWhere(['like', 'email_empresa', $this->email_empresa])
            ->andFilterWhere(['like', 'ramal', $this->ramal])
            ->andFilterWhere(['like', 'dados_complementares', $this->dados_complementares])
            ->andFilterWhere(['like', 'descricao_ocorrencias', $this->descricao_ocorrencias])
            ->andFilterWhere(['like', 'fator_calculo_comissao', $this->fator_calculo_comissao])
            ->andFilterWhere(['like', 'forma_credito', $this->forma_credito])
            ->andFilterWhere(['like', 'assinatura', $this->assinatura]);

        return $dataProvider;
    }
}
