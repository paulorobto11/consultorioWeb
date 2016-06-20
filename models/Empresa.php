<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property integer $id
 * @property string $razao_social
 * @property string $cnpj
 * @property string $inscricao_estadual
 * @property string $inscricao_municipal
 * @property integer $estado
 * @property integer $cidade
 * @property string $logradouro
 * @property string $numero
 * @property string $cep
 * @property string $bairro
 * @property string $telefone1
 * @property string $telefone2
 * @property string $email
 * @property string $site
 * @property string $logo
 * @property string $responsavel_id
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
            [['razao_social', 'cnpj', 'logradouro', 'numero', 'cep', 'bairro'], 'required'],
            [['estado', 'cidade'], 'integer'],
            [['razao_social', 'logradouro'], 'string', 'max' => 100],
            [['cnpj'], 'string', 'max' => 18],
            [['inscricao_estadual'], 'string', 'max' => 20],
            [['inscricao_municipal', 'telefone1', 'telefone2'], 'string', 'max' => 15],
            [['numero'], 'string', 'max' => 5],
            [['cep'], 'string', 'max' => 9],
            [['bairro'], 'string', 'max' => 30],
            [['email', 'site', 'logo', 'responsavel_id'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'razao_social' => 'Razao Social',
            'cnpj' => 'Cnpj',
            'inscricao_estadual' => 'Inscricao Estadual',
            'inscricao_municipal' => 'Inscricao Municipal',
            'estado' => 'Estado',
            'cidade' => 'Cidade',
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
}
