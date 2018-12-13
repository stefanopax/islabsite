<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Thesis;

/**
 * SearchThesisStaff represents the model behind the search form of `app\models\Thesis`.
 */
class SearchThesisStaff extends Thesis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'duration', 'n_person', 'created_at', 'staff'], 'integer'],
            [['title', 'company', 'description', 'requirements', 'course', 'ref_person'], 'safe'],
            [['is_visible','trien'], 'boolean'],
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
        $config = require __DIR__ . '/../config/web.php';
        $query = Thesis::find()->where(['staff' => Yii::$app->user->identity->id]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $config['params']['page_size'],
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'duration' => $this->duration,
            'n_person' => $this->n_person,
            'is_visible' => $this->is_visible,
            'created_at' => $this->created_at,
            'staff' => $this->staff,
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title])
            ->andFilterWhere(['ilike', 'company', $this->company])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'requirements', $this->requirements])
            ->andFilterWhere(['ilike', 'course', $this->course])
            ->andFilterWhere(['ilike', 'ref_person', $this->ref_person]);

        return $dataProvider;
    }
}
