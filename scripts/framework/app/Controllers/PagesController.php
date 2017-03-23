<?php
namespace App\Controllers;

use Pragma\Controller\BaseController;
use Pragma\Router\Router;

class PagesController extends BaseController{
	public function index(){
		$this->view->render('pages/index.tpl.php');
	}
}