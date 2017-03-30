<?php
namespace App\Controllers;

use Pragma\Controller\BaseController;
use Pragma\Router\Router;
use App\Models\Metier;


class BddController extends BaseController{

	public function index(){
		//$this->view->assign('metiers',Metier::all());
		$this->view->assign('metiers',Metier::all());
		$this->view->render('pages/liste.tpl.php');
	}

}