<?php

namespace app\models;

use Yii;
use yii\base\Model;
use linslin\yii2\curl;

//use yii\validators\EmailValidator;
// use User

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $register = 0;
	private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
			['username', 'required', 'message' => 'Insert a username '],
            ['password', 'required', 'message'=> 'Insert a password '],
			['username', 'filter', 'filter'=>'strtolower'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
			[['username'], 'filter', 'filter' => 'trim'],
			['username', 'email'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
		$config = require __DIR__ . '/../config/web.php';
        if (!$this->hasErrors()) {
            $user = $this->getUser();
			
            if ($user) {
                // se lo user esiste nel db
				if(!$user->getDisabled()){
					// utente abilitato
					if($this->validateUsernameRadius()){						// utente unimi ?
						if($this->validatePasswordRadius()|| $config['params']['bypass']){					//  || $config['params']['bypass']
							return 1;
						}
						else{
							 $this->addError($attribute, 'User Not Allowed');
						}
					}
					else{
						if($user->validatePassword($this->password)){			// utente non nel radius ma nel db
							return 1;
						}
						else{
						// utente ha sbagliato la password
						 $this->addError($attribute, 'User Not Allowed');		// ritorna al login==> utente trovato ma la password è errata	
						}
					}
				}
				else{
					//utente non abilitato
					 $this->addError($attribute, 'User Disabled, call Admin ');
					}
			}	
			else{
				// utente non trovato nel db
				if($this->validatePasswordRadius()|| $config['params']['bypass']){						// solo username   || $config['params']['bypass']
					// c'è nel radius
					$this->register = $config['params']['authradius'];								
					return 1;
				}
				else{
					$this->addError($attribute, 'User not found ');
				}
			}
		}
	}


    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
		$config = require __DIR__ . '/../config/web.php';
		
        if ($this->validate()) {
			if($this->register == 100){
				$this->register = 0;
				return $config['params']['authradius'];
            }
			if(Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0)){
					return 1;		                										// return true ==> vai alla landing page ( da loggato)
			}
		}
		else{
			return 0;
		}
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
	
	public function validateUsernameRadius(){
		
		$config = require __DIR__ . '/../config/web.php';
        $radius_host = $config['params']['radius_host'];
        $radius_suffix = $config['params']['radius_suffix'];				// forse serve solo student suffix

        return $this->usernameEndsWith($radius_suffix); 
	}
	
	public function validatePasswordRadius()
    {
        $config = require __DIR__ . '/../config/web.php';
        $radius_host = $config['params']['radius_host'];
        $radius_suffix = $config['params']['radius_suffix'];				// forse serve solo student suffix

		if ($this->usernameEndsWith($radius_suffix)) {
			$curl = new curl\Curl();
				return $curl->setPostParams([
					'username' => $this->username,
					'password' => $this->password
				])
					->post($radius_host);
		}
	}
	
    public function usernameEndsWith($needle)
    {
        $length = strlen($needle);

        return $length === 0 ||
            (substr($this->username, -$length) === $needle);
    }
}
