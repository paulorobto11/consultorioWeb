<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $id
 * @property string $nome
 * @property string $apelido
 * @property string $email_pessoal
 * @property integer $ativo
 * @property string $data_cadastro
 * @property string $data_alteracao
 * @property integer $tipo_user
 * @property integer $empresa_id
 * @property integer $user_id
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'tipo_user', 'empresa_id', 'user_id'], 'required'],
            [['ativo', 'tipo_user', 'empresa_id', 'user_id'], 'integer'],
            [['data_cadastro', 'data_alteracao'], 'safe'],
            [['nome', 'email_pessoal'], 'string', 'max' => 45],
            [['apelido'], 'string', 'max' => 25],
            [['user_id'], 'unique'],
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
            'apelido' => 'Apelido',
            'email_pessoal' => 'Email Pessoal',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Data Cadastro',
            'data_alteracao' => 'Data Alteracao',
            'tipo_user' => 'Tipo User',
            'empresa_id' => 'Empresa ID',
            'user_id' => 'User ID',
        ];
    }
}
