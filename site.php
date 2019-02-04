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
    
	$page = new CicloVittal\Page();

	$page->setTpl("index", array(

		"articles"=>$articles,
		"fotos"=>$fotos,
		"fotos2"=>$fotos2,
		"fotos3"=>$fotos3

	));
});



 ?>