<?php 

use \CicloVittal\Model\User;
use \CicloVittal\Model\Blog;

//ROTA TELA DE BLOG
$app->get('/admin/blog', function(){

	User::verifyLogin();

	$articles = Blog::listBlog();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("blog", [

		"articles"=>$articles
	]);	
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

	$blog = new Blog();

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("blog-create",[
		"blog"=>$blog->getValues()
	]);	
});

//ROTA SAVE CREATE BLOG
$app->post('/admin/blog/create', function(){

	User::verifyLogin();

	$blog = new Blog();

 	$blog->setData($_POST);

	$blog->save();

	if($_FILES["file"]["name"] !== "") $blog->setPhoto($_FILES["file"]);

	$blog->setPhoto($_FILES["file"]);

	header("Location: /admin/blog");
 	exit;
});

//ROTA TELA DE UPDATE BLOG
$app->get('/admin/blog/:idpost', function($idpost){

	User::verifyLogin();

	$blog = new Blog();

	$blog->get((int)$idpost);

	$page = new CicloVittal\PageAdmin();

	$page->setTpl("blog-update",[
		"blog"=>$blog->getValues()
	]);
});


//ROTA SAVE UPDATE BLOG
$app->post('/admin/blog/:idpost', function($idpost){

	User::verifyLogin();

	$blog = new Blog();

	$blog->get((int)$idpost);

	$blog->setData($_POST);

	$blog->save();

	if($_FILES["file"]["name"] !== "") $blog->setPhoto($_FILES["file"]);

	$blog->setPhoto($_FILES["file"]);

	header("Location: /admin/blog");
	exit;
});


 ?>