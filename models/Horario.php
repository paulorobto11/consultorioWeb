<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property integer $id
 * @property string $hora
 * @property integer $medico
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $data_base;
	
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * @inheritdoc
     */
    
    public $hora01;
    public $hora02;
    public $hora03;
    public $hora04;
    public $hora05;
    public $hora06;
    public $hora07;
    public $hora08;
    public $hora09;
    public $hora10;

    public $hora11;
    public $hora12;
    public $hora13;
    public $hora14;
    public $hora15;
    public $hora16;
    public $hora17;
    public $hora18;
    public $hora19;
    public $hora20;
    
    public $hora21;
    public $hora22;
    public $hora23;
    public $hora24;
    public $hora25;
    public $hora26;
    public $hora27;
    public $hora28;
    public $hora29;
    public $hora30;
    
    public function rules()
    {
        return [
            [['hora', 'medico'], 'required'],
            [['hora'], 'safe'],
            [['medico'], 'integer'],
        	[['data_base'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hora' => 'Hora',
            'medico' => 'Medico',
        ];
    }
    
    
    public function salvar_horario($hora) {
    	$funcoes = new Funcoes();
    	$transaction = \Yii::$app->db->beginTransaction();
    	try {  
	    	if (!empty($hora)) {
	    		$model = new Horario();
	    		$model->id     = '';
	    		$model->hora   = $hora;
	    		$model->medico = Yii::$app->user->identity->medico_id;
	    		if (!$flag = $model->save(false)) {
	    			$transaction->rollBack();
	    		}
	    		$transaction->commit();
	    	}
	    } catch (Exception $e) {
	   		$transaction->rollBack();
	   		echo $e->getMessage();
	   		exit;
	   	}
	   	
	   	return true;
    }
}
