<?php

use \CicloVittal\Model\User;

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


 ?>