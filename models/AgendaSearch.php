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
	        
        if (isset($params['filtros'])) {
        	
        	$funcoes = new Funcoes();
        	
        	
	        if ($params['filtros'] == 1) {
	        	$query->where = '1=1 and medico = '.Yii::$app->user->identity->medico_id;
		        if (isset($params['bsc_confirmada'])) {
		        	if ($params['bsc_confirmada'] == 1) {
		        		$query->where .= ' and confirmada = 0';
		        	}
		        	if ($params['bsc_confirmada'] == 2) {
		        		$query->where .= ' and confirmada = 2';
		        	}
		        }
		        if (isset($params['bsc_data_inicio'])) {
		        	if ($params['bsc_data_inicio']) {
		        		$query->where .= ' and data between "'.$funcoes->inverteData($params['bsc_data_inicio']).'" and "'.$funcoes->inverteData($params['bsc_data_final']).'"';
		        	}
		        }
		        if (isset($params['bsc_cliente'])) {
		        	if ($params['bsc_cliente']) {
		        		$query->where .= ' and codigo = '.$params['bsc_cliente'];
		        	}
		        }
		        if (isset($params['bsc_tipo'])) {
		        	if ($params['bsc_tipo']) {
		        		$query->where .= ' and tipo = '.$params['bsc_tipo'];
		        	}
		        }
		        if (isset($params['bsc_forma'])) {
		        	if ($params['bsc_forma']) {
		        		$query->where .= ' and modopgto = '.$params['bsc_forma'];
		        	}
		        }
	        }
	        
// 	                	echo "<pre>";
// 	                	print_r ($query);
// 	                	exit();
	        	    
        }
        
        $dataProvider = new ActiveDataProvider([
        		'query' => $query,
        		'pagination' => [
        				'pageSize' => 20,],
        		'sort' => ['defaultOrder' => ['data' => SORT_DESC]],
        		
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
