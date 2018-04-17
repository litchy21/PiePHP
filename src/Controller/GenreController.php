<?php
namespace Controller;

use \Core\Controller;

class GenreController extends Controller
{
	public $table = 'genre';

	public function indexAction()
	{
		if (!isset($_SESSION['log']) || $_SESSION['log'] === false) {
			header('Location: /Webacademie/PiePHP/user/login');
		}
		$this->render('show');
	}
	public function showAction()
	{
		if (!isset($_SESSION['log']) || $_SESSION['log'] === false) {
			header('Location: /Webacademie/PiePHP/user/login');
		}
		$params = $this->request->getQueryParams();
		unset($params['PHPSESSID']);
		$genre = new \Model\GenreModel($params);
		$genres = $genre->find(['ORDER BY' => 'nom ASC']);
		$this->render('show', $scope = array('genres' => $genres));
		if (isset($params['delete'])) {
			$genre->id = $params['delete'];
			$genre->delete();
			$genres = $genre->find('ORDER BY nom ASC');
			$this->render('show', $scope = array('genres' => $genres));
			exit();
		}
		if (isset($params['add'])) {
			$params['nom'] = $params['add'];
			unset($params['add']);
			$genre = new \Model\GenreModel($params);
			$genre->create();
			$genres = $genre->find('ORDER BY nom ASC');
			$this->render('show', $scope = array('genres' => $genres));
			exit();
		}
		if (isset($params['nom'])) {
			$genre->id = $params['id'];
			$genre->update();
			$genres = $genre->find('ORDER BY nom ASC');
			$this->render('show', $scope = array('genres' => $genres));
			exit();
		}

	}
}
