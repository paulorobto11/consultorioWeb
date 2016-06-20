<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $codigo
 * @property string $nome
 * @property string $dtnascto
 * @property string $idade
 * @property string $natural
 * @property integer $sexo
 * @property string $conjuge
 * @property string $profissao
 * @property string $sangue
 * @property string $mae
 * @property string $pai
 * @property integer $estcivil
 * @property string $cpf
 * @property string $rg
 * @property string $orgao
 * @property string $emissao
 * @property string $ufemis
 * @property string $rua
 * @property string $nroend
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $cep
 * @property integer $dddfone
 * @property integer $fone
 * @property integer $dddcel
 * @property integer $celular
 * @property string $email
 * @property string $formapgto
 * @property string $vlrcons
 * @property integer $convenio
 * @property string $matricula
 * @property string $dtavalid
 * @property integer $tipo
 * @property string $dtacons
 * @property string $dataultima
 * @property string $dtaproxima
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	
	public $file;
	public $bsc_data_inicio;
	public $bsc_data_final;
	public $bsc_tipo;
	public $bsc_cliente;
	public $bsc_forma;
	
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'nome'], 'required'],
            [['codigo', 'sexo', 'estcivil',  'convenio', 'tipo'], 'integer'],
            [['dtnascto', 'emissao', 'dtavalid', 'dddfone', 'fone', 'dddcel', 'celular','dtacons', 'dataultima', 'dtaproxima','cpf','cep'], 'safe'],
            [['vlrcons'], 'number'],
            [['nome', 'mae', 'pai', 'rua', 'email'], 'string', 'max' => 50],
            [['idade', 'sangue', 'ufemis', 'uf'], 'string', 'max' => 2],
            [['natural', 'profissao', 'formapgto', 'matricula'], 'string', 'max' => 20],
            [['conjuge'], 'string', 'max' => 40],
            [['rg'], 'string', 'max' => 25],
            [['orgao'], 'string', 'max' => 4],
            [['nroend'], 'string', 'max' => 8],
            [['bairro', 'cidade'], 'string', 'max' => 35],
        	[['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'nome' => 'Nome',
            'dtnascto' => 'Dtnascto',
            'idade' => 'Idade',
            'natural' => 'Natural',
            'sexo' => 'Sexo',
            'conjuge' => 'Conjuge',
            'profissao' => 'Profissao',
            'sangue' => 'Sangue',
            'mae' => 'Mae',
            'pai' => 'Pai',
            'estcivil' => 'Estcivil',
            'cpf' => 'Cpf',
            'rg' => 'Rg',
            'orgao' => 'Orgao',
            'emissao' => 'Emissao',
            'ufemis' => 'Ufemis',
            'rua' => 'Rua',
            'nroend' => 'Nroend',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'uf' => 'Uf',
            'cep' => 'Cep',
            'dddfone' => 'Dddfone',
            'fone' => 'Fone',
            'dddcel' => 'Dddcel',
            'celular' => 'Celular',
            'email' => 'Email',
            'formapgto' => 'Formapgto',
            'vlrcons' => 'Vlrcons',
            'convenio' => 'Convenio',
            'matricula' => 'Matricula',
            'dtavalid' => 'Dtavalid',
            'tipo' => 'Tipo',
            'dtacons' => 'Dtacons',
            'dataultima' => 'Dataultima',
            'dtaproxima' => 'Dtaproxima',
        ];
    }
}
