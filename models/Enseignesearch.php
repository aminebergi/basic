<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Enseigne;

/**
 * Enseignesearch represents the model behind the search form about `app\models\Enseigne`.
 */
class Enseignesearch extends Enseigne
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enseigne_id', 'language_id', 'slide_id', 'register_required_phone', 'Type_commerce_ID'], 'integer'],
            [['name', 'contact_email', 'average_purchase_value', 'description', 'facebook', 'twitter', 'google_plus', 'trip_advisor', 'instagram', 'youtube', 'website', 'logo', 'register_required_name', 'register_required_email', 'default_optin', 'pts_register', 'passage_or_amount', 'clean_points', 'clean_points_param', 'register_to_use_points', 'delay_before_checkin', 'ipad_pin', 'ipad_pin_reward', 'Typeco_ID'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Enseigne::find();
/*$query->joinwith(['Slide']);
$query->joinwith(['Language']);
$query->joinwith(['Typecommerce']);*/
        // add conditions that should always apply here


        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'enseigne_id' => $this->enseigne_id,
            'language_id' => $this->language_id,
            'slide_id' => $this->slide_id,
            'register_required_phone' => $this->register_required_phone,
            'Type_commerce_ID' => $this->Type_commerce_ID,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'contact_email', $this->contact_email])
            ->andFilterWhere(['like', 'average_purchase_value', $this->average_purchase_value])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'google_plus', $this->google_plus])
            ->andFilterWhere(['like', 'trip_advisor', $this->trip_advisor])
            ->andFilterWhere(['like', 'instagram', $this->instagram])
            ->andFilterWhere(['like', 'youtube', $this->youtube])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'register_required_name', $this->register_required_name])
            ->andFilterWhere(['like', 'register_required_email', $this->register_required_email])
            ->andFilterWhere(['like', 'default_optin', $this->default_optin])
            ->andFilterWhere(['like', 'pts_register', $this->pts_register])
            ->andFilterWhere(['like', 'passage_or_amount', $this->passage_or_amount])
            ->andFilterWhere(['like', 'clean_points', $this->clean_points])
            ->andFilterWhere(['like', 'clean_points_param', $this->clean_points_param])
            ->andFilterWhere(['like', 'register_to_use_points', $this->register_to_use_points])
            ->andFilterWhere(['like', 'delay_before_checkin', $this->delay_before_checkin])
            ->andFilterWhere(['like', 'ipad_pin', $this->ipad_pin])
            ->andFilterWhere(['like', 'ipad_pin_reward', $this->ipad_pin_reward])
            ->andFilterWhere(['like', 'Typeco_ID', $this->Typeco_ID]);

        return $dataProvider;
    }
}
