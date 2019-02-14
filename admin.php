<?php

use \CicloVittal\Model\User;

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


 ?>