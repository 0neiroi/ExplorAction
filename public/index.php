<?php
require_once '../vendor/autoload.php';// Autoload our dependencies with Composer
require_once '../config/config.php';// config APP

use Pragma\View\View;
use Pragma\Router\Router;

// *** Enable view - uncomment following lines ***

 $view = View::getInstance();
 $view->set_tpl_path(APP_PATH . '/Views/');
 $view->setLayout('layouts/default.tpl.php');
/*
 $viewA = View::getInstance();
 $viewA->set_tpl_path(APP_PATH . '/Views/');
 $viewA->setLayout('pages/accueil.tpl.php');

 $viewR = View::getInstance();
 $viewR->set_tpl_path(APP_PATH . '/Views/');
 $viewR->setLayout('pages/recherche.tpl.php');

 $viewT = View::getInstance();
 $viewT->set_tpl_path(APP_PATH . '/Views/');
 $viewT->setLayout('pages/tool.tpl.php');

 $viewP = View::getInstance();
 $viewP->set_tpl_path(APP_PATH . '/Views/');
 $viewP->setLayout('pages/profil.tpl.php');
*/
$app = Router::getInstance();

//define your routes here

$app->group('/', function() use ($app){
	$app->get('', function(){//HOME PAGE
		(new App\Controllers\PagesController())->index();
	})->alias('pages-index');
	$app->get(':id',function($id){
		(new App\Controllers\PagesController())->index2($id);
	})->alias('page-index');
});


$app->group('/metiers',function() use ($app){
	$app->get('/',function(){
		(new App\Controllers\MetiersController())->index();
	})->alias('metiers-index');
	$app->get('/new',function(){
		(new App\Controllers\MetiersController())->newMetier();
	})->alias('metiers-new');
	$app->post('',function(){
		(new App\Controllers\MetiersController())->create();
	})->alias('metiers-create');
	$app->get('/:id/edit',function($id){
		(new App\Controllers\MetiersController())->edit($id);
	})->alias('metiers-edit');
	$app->put('/:id',function($id){
		(new App\Controllers\MetiersController())->update($id);
	})->alias('metiers-update');
	$app->get('/autocomplete', function(){
		(new App\Controllers\MetiersController())->autocomplete();
	});

});

$app->group('/users',function() use ($app){
	$app->get('',function(){
		(new App\Controllers\UsersController())->index();
	})->alias('users-index');
	$app->get('/new',function(){
		(new App\Controllers\UsersController())->connect();
	})->alias('users-connect');
	$app->post('',function(){
		(new App\Controllers\UsersController())->create();
	})->alias('users-create');
	$app->get('/:id',function($id){
		(new App\Controllers\UsersController())->index2($id);
	})->alias('user-index');

});



try{
	$app->run();
	// *** Enable view - uncomment the following line ***

	$view->compute();
}
catch(Pragma\Router\RouterException $e){
	var_dump($e);
}
