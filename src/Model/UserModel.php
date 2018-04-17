<?php
namespace Model;

use \Core\Entity;
use \Core\ORM;

class UserModel extends Entity
{
	public $table = 'fiche_personne';

	public function isEmailFree()
	{
		$find = $this->orm->find_orm($this->table, $params = array('WHERE' => "email = '" . $this->email . "'"));
		if (empty($find)) {
			return true;
		} else {
			return false;
		}
	}

	public function checkUser()
	{
		$find = $this->orm->find_orm($this->table, $params = array('WHERE' => "email = '" . $this->email . "' AND password = '" . $this->password . "'"));
		if (!empty($find)) {
			return true;
		} else {
			return false;
		}
	}

	public function getUserInfos($email)
	{
		$infos = $this->orm->find_orm($this->table, $params = array('WHERE' => "email = '" . $email . "'"));
		foreach ($infos as $info) {
			foreach ($info as $key => $value) {
				$_SESSION[$key] = $value;
			}
		}
	}
}