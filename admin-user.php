<?php 

use \CicloVittal\PageAdmin;
use \CicloVittal\Model\User;

//ROTA TELA ALTERAR SENHA USERS
$app->get('/admin/users/:iduser/password', function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$page = new PageAdmin();

	$page->setTpl("users-password", [
		"user"=>$user->getValues(),
		"msgError"=>User::getError(),
		"msgSuccess"=>User::getSuccess()
	]);
});

//ROTA SALVAR ALTERAR SENHA USERS
$app->post('/admin/users/:iduser/password', function($iduser){

	User::verifyLogin();

	if (!isset($_POST['despassword']) || $_POST['despassword'] === '') {

		User::setError("Preencha a nova senha.");
		header("Location: /admin/users/$iduser/password");
		exit;
	}

	if (!isset($_POST['despassword-confirm']) || $_POST['despassword-confirm'] === '') {

		User::setError("Preencha a confirmação da nova senha.");
		header("Location: /admin/users/$iduser/password");
		exit;
	}

	if ($_POST['despassword'] !== $_POST['despassword-confirm']) {

		User::setError("Senhas digitadas estão diferentes. Digite novamente as senhas.");
		header("Location: /admin/users/$iduser/password");
		exit;
	}

	$user = new User();

	$user->get((int)$iduser);

	$user->setPassword(User::getPasswordHash($_POST['despassword']));

	User::setSuccess("Senha alterada com sucesso.");
	header("Location: /admin/users/$iduser/password");
	exit;

});

//ROTA TELA DE USUÁRIOS
$app->get('/admin/users', function(){

	User::verifyLogin();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = User::getPageSearch($search, $page, 10);

	}else {

		$pagination = User::getPage($page, 10);
	}

	//($page, quantidade de usuários por página)
	/*$pagination = User::getPage($page, 10);*/

	$pages = [];

	for ($x = 0; $x < $pagination['pages']; $x++)
	{
		array_push($pages, [
			'href'=>'/admin/users?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$x+1
		]);
	}

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("users", array(

		"users"=>$pagination['data'],
		"search"=>$search,
		"pages"=>$pages
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