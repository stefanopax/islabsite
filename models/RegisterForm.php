<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;
use app\models\Student;
use app\models\Usertemp;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class RegisterForm extends Model
{
    public $username;
    public $password;
    public $name;
    public $surname;
	public $register_id;

   public function rules()
    {
        return [
            // username and password are both required
            [['username','register_id'], 'required'],  // verificare i vincoli di unique cioè password e username non già usati
			['name', 'required' , 'message' => ' Insert a name '],
			['surname', 'required' , 'message' => ' Insert a surname '],

            // rememberMe must be a boolean value
            //['rememberMe', 'boolean'],
			[['name','surname'], 'filter', 'filter' => 'trim'],
			['register_id', 'match', 'pattern' => '/^\d{6}$/', 'message' => 'Field must contain exactly 6 digits.'],
        ];
    }

    /**
     * function register
     * @return 1 for correct login
	 */
    public function register($username)
    {
		$user = new User();
		$student = new Student();
		$user->setUsername($username);
		$user->generateAuthKey();
		$user->setName($this->name);
		$user->setSurname($this->surname);
			if($user->save()){
				$student->setId($user->getId());
				$student->setRegister($this->register_id);
				if($student->save())
				{  
					$temp = new Usertemp();
					$temp->deleteByUsername($username);
					return 1; 
				}
				else{
					$user->delete();			// inserimento in student non riuscito (MESSAGGIO DI ERRORE)
					return 0;
				}
			}
			else return 0;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
