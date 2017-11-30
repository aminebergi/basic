<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "criteres".
 *
 * @property integer $Critere_id
 * @property string $Nom
 * @property string $Result
 * @property string $value
 * @property string $type
 *
 * @property CriteresHasFiltrer[] $criteresHasFiltrers
 * @property Filtrer[] $filtrerFiltrers
 * @property OperateurHasCriteres[] $operateurHasCriteres
 * @property Operateur[] $operateurOperateurs
 */
class Criteres extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'criteres';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'string'],
            [['Nom', 'value'], 'string', 'max' => 45],
            [['Result'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Critere_id' => 'Critere ID',
            'Nom' => 'Nom',
            'Result' => 'Result',
            'value' => 'Value',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCriteresHasFiltrers()
    {
        return $this->hasMany(CriteresHasFiltrer::className(), ['Criteres_Critere_id' => 'Critere_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiltrerFiltrers()
    {
        return $this->hasMany(Filtrer::className(), ['filtrer_id' => 'filtrer_filtrer_id'])->viaTable('criteres_has_filtrer', ['Criteres_Critere_id' => 'Critere_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperateurHasCriteres()
    {
        return $this->hasMany(OperateurHasCriteres::className(), ['Criteres_Critere_id' => 'Critere_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperateurOperateurs()
    {
        return $this->hasMany(Operateur::className(), ['Operateur_id' => 'Operateur_Operateur_id'])->viaTable('operateur_has_criteres', ['Criteres_Critere_id' => 'Critere_id']);
    }

    /**
     * @inheritdoc
     * @return CriteresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CriteresQuery(get_called_class());
    }
}
