<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slide".
 *
 * @property integer $slide_id
 * @property string $filename
 *
 * @property Enseigne[] $enseignes
 */
class Slide extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slide';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slide_id'], 'required'],
            [['slide_id'], 'integer'],
            [['filename'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'slide_id' => 'Slide ID',
            'filename' => 'Filename',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnseignes()
    {
        return $this->hasMany(Enseigne::className(), ['slide_id' => 'slide_id']);
    }
}
