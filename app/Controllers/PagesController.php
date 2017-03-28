<?php
namespace App\Controllers;

use Pragma\Controller\BaseController;
use Pragma\Router\Router;
use App\Models\Metier;


class PagesController extends BaseController{

	public function index(){
		//$this->view->assign('metiers',Metier::all());
		$m=Metier::find(1); // Variable à changer procéduralement.
		$this->view->assign('metier',$m);
		$this->view->render('pages/index.tpl.php');
	}

	public function index2($id){
		//$this->view->assign('metiers',Metier::all());
		$m=Metier::find($id);

		if(!empty($m)){
			$this->view->assign('metier',$m); //tableau clé(colonne) valeur(valeur)
			$this->view->render('pages/index.tpl.php');
		}else{
			Router::redirect(Router::url_for('pages-index'));
		}
		
	}

}