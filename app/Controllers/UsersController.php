<?php
namespace App\Controllers;

use Pragma\Controller\BaseController;
use App\Models\User;
use Pragma\Router\Router;

class UsersController extends BaseController{

	public function index(){
		$u = User::build($this->params['users']);
		$trouve =false;
		$users = User::All;
		var_dump($users);
		foreach($users as $id => $u2){
			if($u2->username == $u->username){
				$trouve = true;

			}
			
		}
		if(!$trouve){

			Router::redirect(Router::url_for('users-create'));
		}else{

			Router::redirect(Router::url_for('users-connect'));
		}
	}

		public function index2($id){
		//$this->view->assign('metiers',Metier::all());
		$u=User::find($id);

		if(!empty($u)){
			$this->view->assign('users',$u); //tableau clé(colonne) valeur(valeur)
			$this->view->render('pages/index.tpl.php');
		}else{
			Router::redirect(Router::url_for('pages-index'));
		}
		
	}

	public function create(){
		//var_dump($this->params);
		$u = User::build($this->params['users']);
		$u->save();
		Router::redirect(Router::url_for('pages-index'));
	}	

	public function connect(){
		$idtmp=0;
		$users = User::All;
		foreach($users as $id => $u2){
			if($u2->username == $u->username){
				$idtmp = $u2->id;

			}
			
		}
		Router::redirect(Router::url_for('user-index',$idtmp));
		//Not supported yet
	}
}