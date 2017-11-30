<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operateur_has_criteres".
 *
 * @property integer $Operateur_Operateur_id
 * @property integer $Criteres_Critere_id
 *
 * @property Criteres $criteresCritere
 * @property Operateur $operateurOperateur
 */
class OperateurHasCriteres extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operateur_has_criteres';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Operateur_Operateur_id', 'Criteres_Critere_id'], 'required'],
            [['Operateur_Operateur_id', 'Criteres_Critere_id'], 'integer'],
            [['Criteres_Critere_id'], 'exist', 'skipOnError' => true, 'targetClass' => Criteres::className(), 'targetAttribute' => ['Criteres_Critere_id' => 'Critere_id']],
            [['Operateur_Operateur_id'], 'exist', 'skipOnError' => true, 'targetClass' => Operateur::className(), 'targetAttribute' => ['Operateur_Operateur_id' => 'Operateur_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Operateur_Operateur_id' => 'Operateur  Operateur ID',
            'Criteres_Critere_id' => 'Criteres  Critere ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCriteresCritere()
    {
        return $this->hasOne(Criteres::className(), ['Critere_id' => 'Criteres_Critere_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperateurOperateur()
    {
        return $this->hasOne(Operateur::className(), ['Operateur_id' => 'Operateur_Operateur_id']);
    }
public  function delete_all_by_critere($id)
    {
        return $this-> deleteAll(['Criteres_Critere_id' => $id]);
    }
    /**
     * @inheritdoc
     * @return OperateurHasCriteresQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OperateurHasCriteresQuery(get_called_class());
    }
}
