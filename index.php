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
		$fotos2 = Galeria::listFotos2();
		$fotos3 = Galeria::listFotos3();
	    
		$page = new CicloVittal\Page();

		$page->setTpl("index", array(

			"articles"=>$articles,
			"fotos"=>$fotos,
			"fotos2"=>$fotos2,
			"fotos3"=>$fotos3

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

//ROTA DELETE BLOG
$app->get('/admin/blog/:idpost/delete', function($idpost){

	User::verifyLogin();

	$blog = new Blog();

	$blog->get((int)$idpost);

	$blog->delete();

	header("Location: /admin/blog");
	exit;
});

//ROTA TELA DE CREATE BLOG
$app->get('/admin/blog/create', function(){

	User::verifyLogin();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("blog-create");	
});

//ROTA TELA DE UPDATE BLOG
$app->get('/admin/blog/:idpost', function($idpost){

	User::verifyLogin();

	$blog = new Blog();

	$blog->get((int)$idpost);

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("blog-update", array(
		"blog"=>$blog->getValues()
	));	
});

//ROTA SAVE CREATE BLOG
$app->post('/admin/blog/create', function(){

	User::verifyLogin();

	$blog = new Blog();

 	$blog->setData($_POST);

	$blog->save();

	header("Location: /admin/blog");
 	exit;
});

//ROTA SAVE UPDATE BLOG
$app->post('/admin/blog/:idpost', function($idpost){

	User::verifyLogin();

	$blog = new Blog();

	$blog->get((int)$idpost);

	$blog->setData($_POST);

	$blog->update($idpost);

	header("Location: /admin/blog");
	exit;
});


//ROTA DA TELA GALERIA
$app->get('/admin/galeria', function() {

	User::verifyLogin();

	$fotos = Galeria::listFotosGaleria();
	    
	$page = new CicloVittal\PageAdmin();

	$page->setTpl("galeria", array(

		"fotos"=>$fotos
	));
});

//ROTA DELETE GALERIA
$app->get('/admin/galeria/:id/delete', function($id){

	User::verifyLogin();

	$foto = new Galeria();

	$foto->get((int)$id);

	$foto->delete();

	header("Location: /admin/galeria");
	exit;
});

//ROTA TELA DE CREATE GALERIA
$app->get('/admin/galeria/create', function(){

	User::verifyLogin();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("galeria-create");	
});

//ROTA TELA DE UPDATE GALERIA
$app->get('/admin/galeria/:id', function($id){

	User::verifyLogin();

	$foto = new Galeria();

	$foto->get((int)$id);

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("galeria-update", array(
		"foto"=>$foto->getValues()
	));	
});

//ROTA SAVE CREATE GALERIA
$app->post('/admin/galeria/create', function(){

	User::verifyLogin();

	$foto = new Galeria();

 	$foto->setData($_POST);

	$foto->save();

	header("Location: /admin/galeria");
 	exit;
});

//ROTA SAVE UPDATE GALERIA
$app->post('/admin/galeria/:id', function($id){

	User::verifyLogin();

	$foto = new Galeria();

	$foto->get((int)$id);

	$foto->setData($_POST);

	$foto->update($id);

	header("Location: /admin/galeria");
	exit;
});

//ROTA FORGOT SENHA DIGITAR EMAIL
$app->get('/admin/forgot', function(){

	$page = new CicloVittal\PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot");
});

//ROTA FORGOT EMAIL ENVIADO
$app->post('/admin/forgot', function(){

	$user = User::getForgot($_POST["email"]);

	header("Location: /admin/forgot/sent");
	exit;
});

//ROTA TELA EMAIL ENVIADO
$app->get("/admin/forgot/sent", function(){

	$page = new CicloVittal\PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-sent");
});

//ROTA TELA DIGITAR NOVA SENHA
$app->get("/admin/forgot/reset", function(){

	$user = User::validForgotDecrypt($_GET['code']);

	$page = new CicloVittal\PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset", array(
		"name"=>$user["desperson"],
		"code"=>$_GET["code"]
	));
});

//ROTA SALVAR NOVA SENHA
$app->post("/admin/forgot/reset", function(){

	$forgot = User::validForgotDecrypt($_POST['code']);

	User::setForgotUsed($forgot['idrecovery']);

	$user = new User();

	$user->get((int)$forgot["iduser"]);

	$password = password_hash($_POST["password"], PASSWORD_DEFAULT, [
		"cost"=>12
	]);

	$user->setPassword($password);

	$page = new CicloVittal\PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset-success");
});

$app->run();

 ?>