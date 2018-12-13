<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%usertemp}}".
 *
 * @property string $username
 * @property int $timestamp
 */
class Usertemp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%usertemp}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['timestamp'], 'default', 'value' => null],
            [['timestamp'], 'integer'],
            [['username'], 'string', 'max' => 60],
            //[['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'timestamp' => 'Timestamp',
        ];
    }
	public function setUsername($username)
	{
		$this->username=$username;
		$this->timestamp = Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s'));
	}

	 public static function findByUsername($username)
    {
		//$current = current time();
		$config = require __DIR__ . '/../config/web.php';
		$current = Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s'));
		$current = $current - $config['params']['time_validity']; 
		return Usertemp::find()->where(['username'=>$username])
               ->andWhere(['>', 'timestamp', $current])->all();
		//return static::findOne(['username' => $username]); 					
    }
	
	public function deleteByUsername($username)
	{
		Yii::$app->db->createCommand()
			->delete('usertemp', ['username' => $username])->execute();
   	}
	
}
