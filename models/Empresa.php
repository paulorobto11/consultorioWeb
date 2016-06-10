<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $id
 * @property string $identificacao
 * @property string $nome_fantasia
 * @property string $razao_social
 * @property integer $tipo_inscricao
 * @property string $cpfcnpj
 * @property string $inscricao_estadual
 * @property string $inscricao_municipal
 * @property integer $pais_id
 * @property integer $estado_federacao_id
 * @property integer $cidade_id
 * @property string $logradouro
 * @property string $numero
 * @property string $cep
 * @property string $bairro
 * @property string $telefone1
 * @property string $telefone2
 * @property string $email
 * @property string $site
 * @property string $logo
 * @property integer $responsavel_id
 *
 * @property EstadoFederacao[] $estadoFederacaos
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identificacao', 'nome_fantasia', 'razao_social', 'tipo_inscricao', 'cpfcnpj', 'pais_id', 'estado_federacao_id', 'cidade_id', 'logradouro', 'numero', 'cep', 'bairro'], 'required'],
            [['tipo_inscricao', 'pais_id', 'estado_federacao_id', 'cidade_id', 'responsavel_id'], 'integer'],
            [['identificacao'], 'string', 'max' => 6],
            [['nome_fantasia', 'razao_social', 'email', 'site', 'logo'], 'string', 'max' => 45],
            [['cpfcnpj'], 'string', 'max' => 18],
            [['inscricao_estadual'], 'string', 'max' => 20],
            [['inscricao_municipal', 'telefone1', 'telefone2'], 'string', 'max' => 15],
            [['logradouro'], 'string', 'max' => 100],
            [['numero'], 'string', 'max' => 5],
            [['cep'], 'string', 'max' => 9],
            [['bairro'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identificacao' => 'Identificacao',
            'nome_fantasia' => 'Nome Fantasia',
            'razao_social' => 'Razao Social',
            'tipo_inscricao' => 'Tipo Inscricao',
            'cpfcnpj' => 'Cpfcnpj',
            'inscricao_estadual' => 'Inscricao Estadual',
            'inscricao_municipal' => 'Inscricao Municipal',
            'pais_id' => 'Pais ID',
            'estado_federacao_id' => 'Estado Federacao ID',
            'cidade_id' => 'Cidade ID',
            'logradouro' => 'Logradouro',
            'numero' => 'Numero',
            'cep' => 'Cep',
            'bairro' => 'Bairro',
            'telefone1' => 'Telefone1',
            'telefone2' => 'Telefone2',
            'email' => 'Email',
            'site' => 'Site',
            'logo' => 'Logo',
            'responsavel_id' => 'Responsavel ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoFederacaos()
    {
        return $this->hasMany(EstadoFederacao::className(), ['empresa_id' => 'id']);
    }
}
