<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clientes;

/**
 * ClientesSearch represents the model behind the search form about `app\models\Clientes`.
 */
class ClientesSearch extends Clientes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'sexo', 'estcivil', 'dddfone', 'fone', 'dddcel', 'celular', 'convenio', 'tipo'], 'integer'],
            [['nome', 'dtnascto', 'idade', 'natural', 'conjuge', 'profissao', 'sangue', 'mae', 'pai', 'cpf', 'rg', 'orgao', 'emissao', 'ufemis', 'rua', 'nroend', 'bairro', 'cidade', 'uf', 'cep', 'email', 'formapgto', 'matricula', 'dtavalid', 'dtacons', 'dataultima', 'dtaproxima'], 'safe'],
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
        $query = Clientes::find();
        
        if (isset($params['filtros'])) {
        	if ($params['filtros'] == 1) {
        		$query->where = '1=1 ';
        
        		if (isset($params['bsc_data'])) {
        			if ($params['bsc_data']) {
        				$query->where .= ' and dtnascto = '.$params['bsc_data'];
        			}
        			if ($params['bsc_cliente']) {
        				$query->where .= ' and codigo = '.$params['bsc_cliente'];
        			}
        		}
        	}
        	
        	if ($params['filtros'] == 2) {
        		
        		
        		$query->where = '1=1 ';
        	
        		if (isset($params['bsc_data'])) {
        			if ($params['bsc_data']) {
        				$query->where .= ' and dtnascto = '.$params['bsc_data'];
        			}
        		}
        		if (isset($params['model_cliente'])) {
        			if (!empty($params['model_cliente'])) {
        				$i = 0;
        				$codigo = '(';
        				foreach ($params['model_cliente'] as $clientes) {
        					$i++;
        					if ($i > 1) {
        						$codigo .= ',';
        					}
        					$codigo .= $clientes->codigo;
        				}
        				$codigo .= ')';
        				
        				$query->where .= ' and codigo in '.$codigo;
        			}
        		}
        	}
        	
       		if ($params['filtros'] == 3) {
       			$funcoes = new Funcoes();
       			$query->where = '1=1 ';
        		if (isset($params['bsc_data_inicio'])) {
        			if ($params['bsc_data_inicio']) {
        				$query->where .= ' and data_cadastro between "'.$funcoes->inverteData($params['bsc_data_inicio']).'" and "'.$funcoes->inverteData($params['bsc_data_final']).'"';
        			}
        		}
        		if (isset($params['bsc_cliente'])) {
        			if ($params['bsc_cliente']) {
        				$query->where .= ' and codigo = '.$params['bsc_cliente'];
        			}
        		}
        		if (isset($params['bsc_tipo'])) {
        			if ($params['bsc_tipo'] == '1') {
        				$query->where .= ' and tipo = 0';
        			}
        			if ($params['bsc_tipo'] == '2') {
        				$query->where .= ' and tipo = 1';
        			}
        		}
        		if (isset($params['bsc_forma'])) {
        			if ($params['bsc_forma']) {
        				$query->where .= ' and formapgto = '.$params['bsc_forma'];
        			}
        		}
       		}
       		
       		if ($params['filtros'] == 5) {
       			$query->where = '1=1 and data_cadastro = '.date('Y-m-d');
       		}
       		 
        		 
//         	echo "<pre>";
//         	print_r ($query);
//         	exit();
        }

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        	'pagination' => [
        			'pageSize' => 20,],
        	'sort' => ['defaultOrder' => ['nome' => SORT_ASC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'codigo' => $this->codigo,
            'dtnascto' => $this->dtnascto,
            'sexo' => $this->sexo,
            'estcivil' => $this->estcivil,
            'emissao' => $this->emissao,
            'dddfone' => $this->dddfone,
            'fone' => $this->fone,
            'dddcel' => $this->dddcel,
            'celular' => $this->celular,
            'vlrcons' => $this->vlrcons,
            'convenio' => $this->convenio,
            'dtavalid' => $this->dtavalid,
            'tipo' => $this->tipo,
            'dtacons' => $this->dtacons,
            'dataultima' => $this->dataultima,
            'dtaproxima' => $this->dtaproxima,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'idade', $this->idade])
            ->andFilterWhere(['like', 'natural', $this->natural])
            ->andFilterWhere(['like', 'conjuge', $this->conjuge])
            ->andFilterWhere(['like', 'profissao', $this->profissao])
            ->andFilterWhere(['like', 'sangue', $this->sangue])
            ->andFilterWhere(['like', 'mae', $this->mae])
            ->andFilterWhere(['like', 'pai', $this->pai])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'orgao', $this->orgao])
            ->andFilterWhere(['like', 'ufemis', $this->ufemis])
            ->andFilterWhere(['like', 'rua', $this->rua])
            ->andFilterWhere(['like', 'nroend', $this->nroend])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'uf', $this->uf])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'formapgto', $this->formapgto])
            ->andFilterWhere(['like', 'matricula', $this->matricula]);

        return $dataProvider;
    }
}
