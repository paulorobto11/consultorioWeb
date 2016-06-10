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
}
