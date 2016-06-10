<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Agenda;

/**
 * AgendaSearch represents the model behind the search form about `app\models\Agenda`.
 */
class AgendaSearch extends Agenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'medico', 'codigo', 'tipo', 'fone', 'hora', 'confirmada', 'modopgto'], 'integer'],
            [['ddd', 'data', 'inicio', 'final'], 'safe'],
            [['vlrpgto'], 'number'],
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
        $query = Agenda::find();

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
            'medico' => $this->medico,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'fone' => $this->fone,
            'data' => $this->data,
            'hora' => $this->hora,
            'inicio' => $this->inicio,
            'final' => $this->final,
            'confirmada' => $this->confirmada,
            'modopgto' => $this->modopgto,
            'vlrpgto' => $this->vlrpgto,
        ]);

        $query->andFilterWhere(['like', 'ddd', $this->ddd]);

        return $dataProvider;
    }
}
