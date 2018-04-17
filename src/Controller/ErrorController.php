<?php
namespace Controller;

use \Core\Controller;

class ErrorController extends Controller
{

	public function ErrorAction()
	{
		$this->render('404');
	}
}