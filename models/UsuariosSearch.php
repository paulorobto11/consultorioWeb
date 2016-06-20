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
            [['id', 'ativo', 'tipo_user', 'empresa_id', 'user_id'], 'integer'],
            [['nome', 'apelido', 'email_pessoal', 'data_cadastro', 'data_alteracao'], 'safe'],
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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'ativo' => $this->ativo,
            'data_cadastro' => $this->data_cadastro,
            'data_alteracao' => $this->data_alteracao,
            'tipo_user' => $this->tipo_user,
            'empresa_id' => $this->empresa_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'apelido', $this->apelido])
            ->andFilterWhere(['like', 'email_pessoal', $this->email_pessoal]);

        return $dataProvider;
    }
}
