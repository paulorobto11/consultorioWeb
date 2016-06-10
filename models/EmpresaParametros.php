<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa_parametros".
 *
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $nfse_cancelar
 * @property integer $qtde_dias_cancelar
 * @property integer $nfse_substituir
 * @property integer $qtde_dias_subst
 * @property integer $fisica
 * @property integer $fisica_alterar
 * @property integer $fisica_obras_dm
 * @property integer $fisica_obras_dm_alterar
 * @property integer $fisica_obras_fm
 * @property integer $fisica_obras_fm_alterar
 * @property integer $juridica
 * @property integer $juridica_alterar
 * @property integer $juridica_dm
 * @property integer $juridica_dm_alterar
 * @property integer $juridica_fm
 * @property integer $juridica_fm_alterar
 * @property integer $juridica_obras_dm
 * @property integer $juridica_obras_dm_alterar
 * @property integer $juridica_obras_fm
 * @property integer $juridica_obras_fm_alterar
 */
class EmpresaParametros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa_parametros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empresa_id'], 'required'],
            [['empresa_id', 'nfse_cancelar', 'qtde_dias_cancelar', 'nfse_substituir', 'qtde_dias_subst', 'fisica', 'fisica_alterar', 'fisica_obras_dm', 'fisica_obras_dm_alterar', 'fisica_obras_fm', 'fisica_obras_fm_alterar', 'juridica', 'juridica_alterar', 'juridica_dm', 'juridica_dm_alterar', 'juridica_fm', 'juridica_fm_alterar', 'juridica_obras_dm', 'juridica_obras_dm_alterar', 'juridica_obras_fm', 'juridica_obras_fm_alterar'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'empresa_id' => 'Empresa ID',
            'nfse_cancelar' => 'Nfse Cancelar',
            'qtde_dias_cancelar' => 'Qtde Dias Cancelar',
            'nfse_substituir' => 'Nfse Substituir',
            'qtde_dias_subst' => 'Qtde Dias Subst',
            'fisica' => 'Fisica',
            'fisica_alterar' => 'Fisica Alterar',
            'fisica_obras_dm' => 'Fisica Obras Dm',
            'fisica_obras_dm_alterar' => 'Fisica Obras Dm Alterar',
            'fisica_obras_fm' => 'Fisica Obras Fm',
            'fisica_obras_fm_alterar' => 'Fisica Obras Fm Alterar',
            'juridica' => 'Juridica',
            'juridica_alterar' => 'Juridica Alterar',
            'juridica_dm' => 'Juridica Dm',
            'juridica_dm_alterar' => 'Juridica Dm Alterar',
            'juridica_fm' => 'Juridica Fm',
            'juridica_fm_alterar' => 'Juridica Fm Alterar',
            'juridica_obras_dm' => 'Juridica Obras Dm',
            'juridica_obras_dm_alterar' => 'Juridica Obras Dm Alterar',
            'juridica_obras_fm' => 'Juridica Obras Fm',
            'juridica_obras_fm_alterar' => 'Juridica Obras Fm Alterar',
        ];
    }
}
