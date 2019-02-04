<?php 

use \CicloVittal\Model\User;

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


 ?>