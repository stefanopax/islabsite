<?php

namespace app\models;
use Yii;
use linslin\yii2\curl;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $username
 * @property string password
 * @property string $authkey
 * @property string $name
 * @property string $surname
 * @property boolean $is_disabled
*/
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			[['username'], 'required'],
            [['authkey', 'name', 'surname'], 'required'],
            [['is_disabled'], 'boolean'],
            [['username', 'password', 'name', 'surname'], 'string', 'max' => 350],
            [['authkey'], 'string', 'max' => 350],
            [['username'], 'unique'],
		 ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'name' => 'Name',
            'surname' => 'Surname',
            'is_disabled' => 'Is Disabled',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);		// 'is_disabled' => 0
    }

	public function setPassword($password)
    {
        $this->password = Yii::$app->getSecurity()->generatePasswordHash($password);
    }
	public function setUsername($username)
    {
        $this->username = $username;
    }
    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
       throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
		return static::findOne(['username' => $username]); 					// 'is_disabled' => false
    }

    /**
     * {@inheritdoc}
     */

	public function getUsername()
    {
        return $this->username;
    }
	
	public function getSurname()
    {
        return $this->surname;
    }
	public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }
	
	public function getDisabled()
	{
		return $this->is_disabled;
	}
    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authkey;
    }

	public function generateAuthKey()
    {
        $this->authkey = Yii::$app->security->generateRandomString();
    }
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authkey === $authKey;
    }
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function setSurname($surname)
	{
		$this->surname = $surname;
	}
	
	public function setDisabled($param)
	{
		$this->is_disabled = $param;
	}
	
	public function softDelete($id)
	{
		//$id1 = (new \yii\db\Query())->select(['id'])->from('user')->where(['username' => 'silvana.castano@unimi.it']);
		$this->is_disabled = true;
		$this->save();
	}
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
	
	/**
     * roleBasedHomePage
     *
     * @return string 
     */

	public function roleBasedHomePage() {
		 
		$role = Yii::$app->authManager->getRolesByUser(\Yii::$app->user->identity->id); //however you define your role, have the value output to this variable
		if(isset($role['admin'])){
			return '/admin'; 
		}
		else{
			if(isset($role['staff'])){
				return '/staffhome'; 
			}
			else{
				if(isset($role['teacher'])){
					return '/teacher'; 
				}
				else{
					if(isset($role['student'])){
					return 'site/studenthome'; 
					}
				}
			}
		}
	}
	
}
