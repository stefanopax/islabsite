<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Request;

/**
 * SearchRequest represents the model behind the search form of `app\models\Request`.
 */
class SearchRequest extends Request
{
    public $name;
    public $surname;
    public $thesis;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thesis', 'student', 'created_at'], 'integer'],
            [['title','student','thesis','name','surname','thesis'], 'safe'],
            [['confirmed_at'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
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
		$query = Request::find()->joinWith('thesis')->where(['thesis.staff'=> Yii::$app->user->identity->id]);

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
            'thesis' => $this->thesis,
            'student' => $this->student,
            'created_at' => $this->created_at,
            'confirmed_at' => $this->confirmed_at,
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title]);

        return $dataProvider;
    }
}
