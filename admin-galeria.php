<?php 

use \CicloVittal\Model\User;
use \CicloVittal\Model\Galeria;

//ROTA DA TELA GALERIA
$app->get('/admin/galeria', function() {

	User::verifyLogin();

	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	/*$fotos = Galeria::listFotosGaleria();*/

	$pagination = Galeria::getPage($page);

	$pages = [];

	for ($x = 0; $x < $pagination['pages']; $x++)
	{
		array_push($pages, [
			'href'=>'/admin/galeria?'.http_build_query([
				'page'=>$x+1,
			]),
			'text'=>$x+1
		]);
	}
	    
	$page = new CicloVittal\PageAdmin();

	$page->setTpl("galeria", array(

		"fotos"=>$pagination['data'],
		"pages"=>$pages
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

/*//ROTA TELA DE CREATE GALERIA
$app->get('/admin/galeria/create', function(){

	User::verifyLogin();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("galeria-create");	
});*/

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

 ?>