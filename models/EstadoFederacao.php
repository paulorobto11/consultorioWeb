<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado_federacao".
 *
 * @property integer $id
 * @property string $unidade_federacao
 * @property string $nome_estado
 * @property integer $cod_ibge
 * @property string $aliquota_icms
 * @property string $aliquota_icms_antecipacao
 * @property string $percentual_despesas_acessorias
 * @property integer $regime_substituicao_tributaria
 * @property string $mensagem_substituicao
 * @property integer $empresa_id
 *
 * @property Cidade[] $cidades
 * @property Colaborador[] $colaboradors
 * @property Empresa[] $empresas
 * @property Empresa $empresa
 * @property EstadoFederacaoClassFiscal[] $estadoFederacaoClassFiscals
 * @property Transportadora[] $transportadoras
 */
class EstadoFederacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_federacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unidade_federacao', 'nome_estado', 'cod_ibge', 'aliquota_icms', 'aliquota_icms_antecipacao', 'percentual_despesas_acessorias', 'regime_substituicao_tributaria', 'empresa_id'], 'required'],
            [['cod_ibge', 'regime_substituicao_tributaria', 'empresa_id'], 'integer'],
            [['aliquota_icms', 'aliquota_icms_antecipacao', 'percentual_despesas_acessorias'], 'number'],
            [['unidade_federacao'], 'string', 'max' => 2],
            [['nome_estado'], 'string', 'max' => 45],
            [['mensagem_substituicao'], 'string', 'max' => 250],
            [['unidade_federacao'], 'unique'],
            [['empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['empresa_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unidade_federacao' => 'UF',
            'nome_estado' => 'Estado',
            'cod_ibge' => 'Cód. IBGE',
            'aliquota_icms' => 'Alíquota Icms',
            'aliquota_icms_antecipacao' => 'Alíquota Icms Antecipação',
            'percentual_despesas_acessorias' => 'Percentual Despesas Acessorias',
            'regime_substituicao_tributaria' => 'Regime Substituição Tributaria',
            'mensagem_substituicao' => 'Mensagem Substituição',
            'empresa_id' => 'Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCidades()
    {
        return $this->hasMany(Cidade::className(), ['estado_federacao_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColaboradors()
    {
        return $this->hasMany(Colaborador::className(), ['estado_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresas()
    {
        return $this->hasMany(Empresa::className(), ['estado_federacao_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id' => 'empresa_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoFederacaoClassFiscals()
    {
        return $this->hasMany(EstadoFederacaoClassFiscal::className(), ['estado_federacao_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransportadoras()
    {
        return $this->hasMany(Transportadora::className(), ['estado_federacao_id' => 'id']);
    }

    public function formataValor($valor) {
    	$valor = str_replace('.','',$valor);
    	$valor = str_replace(',','.',$valor);
    	return $valor;
    }
    
    public 	function mostraValor($valor) {
    	$valor = str_replace(',','.',$valor);
    	$valor=number_format($valor,2,',','.');
    	return $valor;
    }
    
    public 	function mostraValor2($valor) {
    	$valor = str_replace(',','.',$valor);
    	$valor=number_format($valor,4,',','.');
    	return $valor;
    }
    
}
