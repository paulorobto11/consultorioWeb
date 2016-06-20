<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $id
 * @property integer $medico
 * @property integer $codigo
 * @property integer $tipo
 * @property string $ddd
 * @property integer $fone
 * @property string $data
 * @property integer $hora
 * @property string $inicio
 * @property string $final
 * @property integer $confirmada
 * @property integer $modopgto
 * @property string $vlrpgto
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	
	public $bsc_cliente;
	public $bsc_data;
	public $bsc_data_agenda;
	public $bsc_medico;
	public $nome_cliente;
	public $bsc_data_inicio;
	public $bsc_data_final;
	public $bsc_tipo;
	public $bsc_forma;
	public $bsc_confirmada;
	
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['medico', 'codigo', 'tipo'], 'required'],
            [['medico', 'codigo', 'tipo', 'fone', 'hora', 'confirmada', ], 'integer'],
            [['data', 'inicio', 'final'], 'safe'],
            [['vlrpgto'], 'number'],
            [['ddd','modopgto'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'medico' => 'Medico',
            'codigo' => 'Codigo',
            'tipo' => 'Tipo',
            'ddd' => 'Ddd',
            'fone' => 'Fone',
            'data' => 'Data',
            'hora' => 'Hora',
            'inicio' => 'Inicio',
            'final' => 'Final',
            'confirmada' => 'Confirmada',
            'modopgto' => 'Modopgto',
            'vlrpgto' => 'Vlrpgto',
        ];
    }
    
}
