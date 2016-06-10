<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tempcon".
 *
 * @property string $data
 * @property integer $medico
 * @property integer $codigo
 * @property string $tipo
 * @property integer $hora
 * @property integer $busca
 */
class Tempcon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tempcon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data', 'medico', 'codigo', 'tipo', 'hora'], 'required'],
            [['data'], 'safe'],
            [['medico', 'codigo', 'hora', 'busca'], 'integer'],
            [['tipo'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'data' => 'Data',
            'medico' => 'Medico',
            'codigo' => 'Codigo',
            'tipo' => 'Tipo',
            'hora' => 'Hora',
            'busca' => 'Busca',
        ];
    }
}
