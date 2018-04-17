<?php 
namespace Core;

use \Core\Request;
use \Core\Core;

class Controller
{
	protected static $_render;

	public function __construct(){
		$this->request = new Request();
	}

	protected function render($view, $scope = [])
	{
		extract($scope);
		$f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
		str_replace('Controller\\', '', basename(get_class($this))), $view]) . '.php';
		$f = str_replace('Controller', '', $f);

		if (file_exists($f)) {
			ob_start();
			include($f);
			$view = ob_get_clean();
			if (!isset($_SESSION['log']) || $_SESSION['log'] === false) {
				$button = "<a href='\Webacademie\PiePHP\user\login' class='btn btn-info btn-lg login'>
						<span class='glyphicon glyphicon-log-in'></span> Login</a>";
			} else {
				$button = "<a href='\Webacademie\PiePHP\user\logout' class='btn btn-info btn-lg logout'>
						<span class='glyphicon glyphicon-log-out'></span> Logout</a>";
			}
			
			ob_start();
			include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
			'index']) . '.php');
			self::$_render = ob_get_clean();
		}
	}

	public function __destruct()
	{
		echo self::$_render;
	}
}