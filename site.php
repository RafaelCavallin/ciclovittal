<?php

use \CicloVittal\Page;
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
		"blog"=>$blog->getValues()

	]);
});



 ?>