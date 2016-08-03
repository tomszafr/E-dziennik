<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
/* 		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		); */
		$username=$this->username;
		// $username=Pracownicy::model()->find('username=:username', array(':username'=>$username));
		$user=Users::model()->find('username=?', array($username));
		if ($user->level == 'r') {
			$child=Uczniowie::model()->find(array(
					'join'=>'LEFT JOIN `rodzice` ON t.id_u = rodzice.id_u',
					'condition'=>'id_r=:id_r',
					'params'=>array(':id_r'=>$user->id_r),
			));
		} else {
			$subj=Nauczyciele::model()->find(array(
					'join'=>'LEFT JOIN `users` ON t.id_n = users.id_n',
					'condition'=>'t.id_n=:id_n',
					'params'=>array(':id_n'=>$user->id_n),
			));
		}
		
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(password_verify($this->password, $user->password)) {
			$this->errorCode=self::ERROR_NONE;
			if ($user->level == 'r') {
				$this->setState('dziecko', $child->imie." ".$child->nazwisko);
				$this->setState('id_u', $child->id_u);
			} else {
				$this->setState('subj', $subj->przedmiot);
			}
			$this->setState('level', $user->level);
		} else {
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		return !$this->errorCode;
	}
}