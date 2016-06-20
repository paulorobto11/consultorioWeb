<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Horario;

/**
 * HorarioSearch represents the model behind the search form about `app\models\Horario`.
 */
class HorarioSearch extends Horario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'medico'], 'integer'],
            [['hora'], 'safe'],
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
        $query = Horario::find();
        
        if (isset($params['filtros'])) {
        	if ($params['filtros'] == 1) {
        		$query->where = '1=1 ';
        		
        		if (isset($params['bsc_medico'])) {
        			if ($params['bsc_medico']) {
        				$query->where .= ' and medico = '.$params['bsc_medico'];
        			}
        		}
        	}
        		
//         	echo "<pre>";
//         	print_r ($query);
//         	exit();
       	}
        		

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        		     'pagination' => [
        				         'pageSize' => 30,],
        			 'sort' => ['defaultOrder' => ['hora' => SORT_ASC]],
        		
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
            'hora' => $this->hora,
            'medico' => $this->medico,
        ]);

        return $dataProvider;
    }
}
