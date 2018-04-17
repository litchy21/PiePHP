<?php
namespace Controller;

use \Core\Controller;

class UserController extends Controller
{
	public function indexAction()
	{
		$this->render('show');
	}
	public function registerAction()
	{
		$error = '';
		$success = '';
		$this->render('register', $scope = array('error' => $error, 'success' => $success));
		$params = $this->request->getQueryParams();
		unset($params['PHPSESSID']);

		if (isset($params['name']) && isset($params['surname']) && isset($params['birth']) && isset($params['city']) && isset($params['email']) && isset($params['password'])) {
			if (!empty($params['name']) && !empty($params['surname']) && !empty($params['birth']) && !empty($params['city']) && !empty($params['email'] && !empty($params['password']))) {
				if (filter_var($params['email'], FILTER_VALIDATE_EMAIL)) {
					$params['password'] = hash('sha256', $params['password']);
					$user = new \Model\UserModel($params);
					if ($user->isEmailFree()) {
						$user->id = $user->create();
						$_SESSION['log'] = true;
						$infos = $user->read();
						foreach ($infos as $key => $value) {
							$_SESSION[$key] = $value;
						}
						header('Location: /Webacademie/PiePHP/user/show');
					} else {
						$error = "<p class='error'>Adresse email déjà utilisée !</p>";
					}
				} else {
					$error = "<p class='error'>Adresse email incorrecte !</p>";
				}
			} else {
				$error = "<p class='error'>Veuillez remplir tous les champs !</p>";
			}
		}
		$this->render('register', $scope = array('error' => $error));
		exit();
	}
	public function loginAction()
	{
		$this->render('login');
		$params = $this->request->getQueryParams();
		unset($params['PHPSESSID']);

		if (isset($params['email']) && isset($params['password'])) {
			if (!empty($params['email'] && !empty($params['password']))) {
				if (filter_var($params['email'], FILTER_VALIDATE_EMAIL)) {
					$params['password'] = hash('sha256', $params['password']);
					$user = new \Model\UserModel($params);
					if ($user->checkUser()) {
						$_SESSION['log'] = true;
						$user->getUserInfos($params['email']);
						header('Location: /Webacademie/PiePHP/user/show');
					} else {
						$error = "<p class='error'>Adresse email ou mot de passe incorrect !</p>";
						$this->render('login', $scope = array('error' => $error));
						exit();
					}
				} else {
					$error = "<p class='error'>Adresse email incorrecte !</p>";
					$this->render('login', $scope = array('error' => $error));
					exit();
				}
			} else {
				$error = "<p class='error'>Veuillez remplir tous les champs !</p>";
				$this->render('login', $scope = array('error' => $error));
				exit();
			}	
		}
	}

	public function showAction(){
		if (!isset($_SESSION['log']) || $_SESSION['log'] === false) {
			header('Location: /Webacademie/PiePHP/user/login');
		} else {
			$this->render('show');
		}
		$params = $this->request->getQueryParams();
		unset($params['PHPSESSID']);

		if (isset($params['old_pass']) && isset($params['password'])) {
			if (!empty(($params['old_pass']) && !empty($params['password']))) {
				if (hash('sha256', $params['old_pass']) === $_SESSION['password']) {
					unset($params['old_pass']);
					$params['password'] = hash('sha256', $params['password']);
					$user = new \Model\UserModel($params);
					$user->id = $_SESSION['id'];
					$user->update();
					$user->getUserInfos($_SESSION['email']);
					$success = "<p class='success'>Mot de passe modifié !</p>";
					$this->render('show', $scope = array('success' => $success));
				} else {
					$error = "<p class='error'>Vous n'avez pas entrer le bon mot de passe !</p>";
					$this->render('show', $scope = array('error' => $error));
					exit();
				}
			} else {
				$error = "<p class='error'>Veuillez remplir tous les champs !</p>";
				$this->render('show', $scope = array('error' => $error));
				exit();
			}
		}
		if (isset($params['email'])) {
			if (!empty($params['email'])) {
				if (filter_var($params['email'], FILTER_VALIDATE_EMAIL)) {
					$user = new \Model\UserModel($params);
					if ($user->isEmailFree()) {
						$user->id = $_SESSION['id'];
						$user->update();
						$user->getUserInfos($params['email']);
						$success = "<p class='success'>Email modifiée !</p>";
						$this->render('show', $scope = array('success' => $success));
						exit();
					} else {
						$error = "<p class='error'>Adresse email déjà utilisée !</p>";
					}
				} else {
					$error = "<p class='error'>Veuillez entrer un email valide !</p>";
				}
			} else {
				$error = "<p class='error'>Veuillez remplir le champ du nouvel email !</p>";
			}
			$this->render('show', $scope = array('error' => $error));
			exit();
		}
		if (isset($params['delete'])) {
			$user = new \Model\UserModel($params);
			$user->id = $_SESSION['id'];
			$user->delete();
			$_SESSION['log'] = false;
			header('Location: /Webacademie/PiePHP/user/login');
		}
	}

	public function logoutAction(){
		$_SESSION['log'] = false;
		header('Location: /Webacademie/PiePHP/user/login');
	}
}