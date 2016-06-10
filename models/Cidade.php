<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cidade".
 *
 * @property integer $id
 * @property integer $estado_federacao_id
 * @property string $descricao
 * @property integer $cod_ibge
 *
 * @property EstadoFederacao $estadoFederacao
 * @property Colaborador[] $colaboradors
 * @property Empresa[] $empresas
 * @property Transportadora[] $transportadoras
 */
class Cidade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cidade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado_federacao_id', 'descricao', 'cod_ibge'], 'required'],
            [['estado_federacao_id', 'cod_ibge'], 'integer'],
            [['descricao'], 'string', 'max' => 60],
            [['estado_federacao_id'], 'exist', 'skipOnError' => true, 'targetClass' => EstadoFederacao::className(), 'targetAttribute' => ['estado_federacao_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado_federacao_id' => 'Estado',
            'descricao' => 'Descrição',
            'cod_ibge' => 'Cód. IBGE',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoFederacao()
    {
        return $this->hasOne(EstadoFederacao::className(), ['id' => 'estado_federacao_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColaboradors()
    {
        return $this->hasMany(Colaborador::className(), ['cidade_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresas()
    {
        return $this->hasMany(Empresa::className(), ['cidade_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransportadoras()
    {
        return $this->hasMany(Transportadora::className(), ['cidade_id' => 'id']);
    }
}
