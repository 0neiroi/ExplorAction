<?php
namespace App\Controllers;

use Pragma\Controller\BaseController;
use App\Models\Metier;
use Pragma\Router\Router;

class MetiersController extends BaseController{
	public function index(){
		$this->view->assign('metiers',Metier::all());
		$this->view->assign('metier',Metier::build()); //tableau clé(colonne) valeur(valeur)
		$this->view->render('metiers/index.tpl.php');
	}
	public function newMetier(){
		$this->view->assign('metiers',Metier::all());
		$this->view->assign('metier',Metier::build()); //tableau clé(colonne) valeur(valeur)
		$this->view->render('metiers/index.tpl.php');	
	}
	public function create(){
		//var_dump($this->params);
		$m = Metier::build($this->params['metier']);
		$m->save();
		Router::redirect(Router::url_for('metiers-index'));
	}
	public function edit($id){
		$this->view->assign('metiers',Metier::all());
		$m=Metier::find($id);
		if(!empty($m)){
			$this->view->assign('metier',$m); //tableau clé(colonne) valeur(valeur)
			$this->view->render('metiers/index.tpl.php');		
		}else{
			Router::redirect(Router::url_for('metiers-index'));
		}
		
	}

	public function update($id){
		
		//var_dump($this->params);
		$m=Metier::find($id);
		if(!empty($m)){
			$m->merge($this->params['metier']);
			$m->save();	
		}else{//do something

		}
		Router::redirect(Router::url_for('metiers-index'));
	}

	public function autocomplete(){
		ob_clean();
		$results = [];
		$term = isset($this->params["term"]) ? $this->params["term"] : null;
		if( ! empty($term) ){
			$metiers = Metier::forge()
							 ->select(["id", "job_title"])
							 ->where("job_title", "LIKE", "%".$term."%")
							 ->get_arrays();
			
			if( ! empty($metiers) ){
				foreach($metiers as $m){
					$results[] = ["label" => $m["job_title"], "value" => $m["id"]];
				}
			}
		}

		echo json_encode($results);
		die();
	}



}