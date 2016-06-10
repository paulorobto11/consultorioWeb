<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "convenio".
 *
 * @property integer $id
 * @property string $nome
 * @property string $dtnascto
 * @property string $cnpj
 * @property string $rua
 * @property string $nroend
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $cep
 * @property integer $dddfone
 * @property integer $fone
 * @property string $email
 * @property string $vlrcons
 */
class Convenio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'convenio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['dtnascto'], 'safe'],
            [['dddfone', 'fone'], 'integer'],
            [['vlrcons'], 'number'],
            [['nome', 'rua', 'email'], 'string', 'max' => 50],
            [['cnpj'], 'string', 'max' => 14],
            [['nroend'], 'string', 'max' => 8],
            [['bairro', 'cidade'], 'string', 'max' => 35],
            [['uf'], 'string', 'max' => 2],
            [['cep'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'dtnascto' => 'Dtnascto',
            'cnpj' => 'Cnpj',
            'rua' => 'Rua',
            'nroend' => 'Nroend',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'uf' => 'Uf',
            'cep' => 'Cep',
            'dddfone' => 'Dddfone',
            'fone' => 'Fone',
            'email' => 'Email',
            'vlrcons' => 'Vlrcons',
        ];
    }
}
