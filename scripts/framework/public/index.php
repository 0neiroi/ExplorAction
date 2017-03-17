<?php
require_once '../vendor/autoload.php';// Autoload our dependencies with Composer
require_once '../config/config.php';// config APP

use Pragma\View\View;
use Pragma\Router\Router;

// *** Enable view - uncomment following lines ***

 $view = View::getInstance();
 $view->set_tpl_path(APP_PATH . '/Views/');
 $view->setLayout('layouts/default.tpl.php');

$app = Router::getInstance();

//define your routes here
$app->get('/', function(){//HOME PAGE
	//DO SOMETHING HERE
	echo "hello world !";
});

$app->group('/metiers',function() use ($app){
	$app->get('',function(){
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


});

try{
	$app->run();
	// *** Enable view - uncomment the following line ***

	$view->compute();
}
catch(Pragma\Router\RouterException $e){
	var_dump($e);
}
