<?php

use \CicloVittal\Page;
use \CicloVittal\Model\User;
use \CicloVittal\Model\Blog;
use \CicloVittal\Model\Galeria;

//ROTA DA INDEX DO SITE
$app->get('/', function() {

	$articles = Blog::listBlogSite();
	$fotos = Galeria::listFotos();
	$fotos2 = Galeria::listFotos2();
	$fotos3 = Galeria::listFotos3();
	
	$blog = new Blog();
    
	$page = new CicloVittal\Page();

	$page->setTpl("index", [

		"articles"=>$articles,
		"fotos"=>$fotos,
		"fotos2"=>$fotos2,
		"fotos3"=>$fotos3,
		"blog"=>$blog

	]);
});

$app->get('/blogSiteArtigos', function(){

	$articles = Blog::listBlog();

	$users = User::listAll();

	$articles = Blog::listBlog();

	$blog = new Blog();

	$page = new CicloVittal\Page([

		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("blogSiteArtigos", [

		"articles"=>$articles,
		"blog"=>$blog->getValues(),
		"users"=>$users
	]);
});

$app->get('/blogSite/:idpost', function($idpost){

	$articles = Blog::listBlog();

	$users = User::listAll();

	$blog = new Blog();

	$blog->get((int)$idpost);

	$page = new CicloVittal\Page([

		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("blogSite",[
		"blog"=>$blog->getValues(),
		"articles"=>$articles,
		"users"=>$users
	]);
});



 ?>