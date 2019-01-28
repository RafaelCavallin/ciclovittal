<?php

session_start();
require_once("vendor/autoload.php");
require_once("functions.php");

use \Slim\Slim;
/*use \CicloVittal\Page;
use \CicloVittal\PageAdmin;*/
use \CicloVittal\Model\User;
use \CicloVittal\Model\Blog;
use \CicloVittal\Model\Galeria;

$app = new Slim();

//ROTA DA INDEX DO SITE
$app->config('debug', true);

	$app->get('/', function() {

		$articles = Blog::listBlogSite();

		$fotos = Galeria::listFotos();
	    
		$page = new CicloVittal\Page();

		$page->setTpl("index", array(

			"articles"=>$articles,
			"fotos"=>$fotos

		));
});

//ROTA DA INDEX DO ADMIN
$app->get('/admin', function() {

	User::verifyLogin();

	$users = User::listAll();
	    
	$page = new CicloVittal\PageAdmin();

	$page->setTpl("index", array(

		"users"=>$users
	));
});

//ROTA ADMIN LOGIN
$app->get('/admin/login', function(){

	$page = new CicloVittal\PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login");

});

//ROTA PARA LOGIN
$app->post('/admin/login', function() {

	User::login(post('deslogin'), post('despassword'));

	header("Location: /admin");
	exit;

});

//ROTA PARA LOGOUT
$app->get('/admin/logout', function(){

	User::logout();

	header("Location: /admin/login");
	exit;
});

//ROTA TELA DE USUÁRIOS
$app->get('/admin/users', function(){

	User::verifyLogin();

	$users = User::listAll();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("users", array(

		"users"=>$users
	));	
});

//ROTA DELETE USER USER
$app->get('/admin/users/:iduser/delete', function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$user->delete();

	header("Location: /admin/users");
	exit;
});

//ROTA TELA DE CREATE USER
$app->get('/admin/users/create', function(){

	User::verifyLogin();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("users-create");	
});

//ROTA TELA DE UPDATE USER
$app->get('/admin/users/:iduser', function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("users-update", array(
		"user"=>$user->getValues()
	));	
});

//ROTA SAVE CREATE USER
$app->post('/admin/users/create', function(){

	User::verifyLogin();

	$user = new User();

 	$_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0;

 	$_POST['despassword'] = password_hash($_POST["despassword"], PASSWORD_DEFAULT, [

 		"cost"=>12

 	]);

 	$user->setData($_POST);

	$user->save();

	header("Location: /admin/users");
 	exit;
});

//ROTA SAVE UPDATE USER
$app->post('/admin/users/:iduser', function($iduser){

	User::verifyLogin();

	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;

	$user->get((int)$iduser);

	$user->setData($_POST);

	$user->update($iduser);

	header("Location: /admin/users");
	exit;
});

//ROTA TELA DE BLOG
$app->get('/admin/blog', function(){

	User::verifyLogin();

	$articles = Blog::listBlog();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("blog", array(

		"articles"=>$articles
	));	
});

//ROTA TELA DE CREATE BLOG
$app->get('/admin/blog/create', function(){

	User::verifyLogin();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("blog-create");	
});

//ROTA DA TELA GALERIA
$app->get('/admin/galeria', function() {

	User::verifyLogin();

	$users = User::listAll();
	    
	$page = new CicloVittal\PageAdmin();

	$page->setTpl("galeria", array(

		"users"=>$users
	));
});

$app->run();

 ?>