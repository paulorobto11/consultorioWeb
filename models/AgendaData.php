<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda_data".
 *
 * @property integer $id
 * @property string $data_base
 * @property integer $medico
 */
class AgendaData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_base'], 'safe'],
            [['medico'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_base' => 'Data Base',
            'medico' => 'Medico',
        ];
    }
    
    public function entra_data($medico) {
    	$model_data = AgendaData::findOne(['medico'=>$medico]);
    	$data_base = date('Y-m-d');
    	if (!empty($model_data)) {
    		$data_base = $model_data->data_base;
    	}
    	
    	return $data_base;
    	 
    }
}
