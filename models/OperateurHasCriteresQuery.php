<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[OperateurHasCriteres]].
 *
 * @see OperateurHasCriteres
 */
class OperateurHasCriteresQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OperateurHasCriteres[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }
    public function alloperateurcritere($x)
    {
        return parent::all()->andwhere('criteres_criteres_id'==$x);
    }
   
    /**
     * @inheritdoc
     * @return OperateurHasCriteres|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

}
