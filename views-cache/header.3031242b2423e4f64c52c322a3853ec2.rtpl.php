<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset=utf-8>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>CicloVittal - Enfermagem</title>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/res/site/css/carousel.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="/res/site/css/ciclovittal.css ">
	<link rel="stylesheet" href="/res/site/css/ciclovittal-mobile.css ">
	<link rel="icon" href="/res/site/images/3505ciclo-logo-grd-footer.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="/res/site/images/3505ciclo-logo-grd-footer.ico" type="image/x-icon" />

	<script src="lib/angularjs/angular.min.js"></script>
</head>
<body>

	<header>
			<!-- MENU PARA MOBILE -->
			<div id="menu-mobile-mask" class="d-block d-sm-none"></div>

			<div id="menu-mobile" class="d-block d-sm-none">
				
				<ul class="list-unstyled">
					<li><a href="index.php">Home</a></li>
					<li><a href="#cursos">Cursos</a></li>
					<li><a href="#sobre">Sobre Nós</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contato">Contato</a></li>
				</ul>

				<div class="bar-close">
					<button type="button" class="btn btn-close"><i class="fa fa-times"></i></button>
				</div>

			</div>
			<!-- FIM MENU MOBILE -->

			<div id="top" class="container text-center logo-desktop">
				<img id="logotipo" src="/res/site/images/ciclo-logo-grdOK.png" alt="Logotipo">
			</div>

			<div id="top" class="container text-center logo-mobile d-block d-sm-none">
				<img id="logotipo" src="/res/site/images/ciclo-logo-grd-MOBILE-OK.png" alt="Logotipo">
			</div>

				<div class="header-black">
					
					<div class="container text-center d-block d-sm-none">

						<input type="search" id="input-search-mobile" class="d-block d-sm-none" placeholder="Pesquisar">

						<button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
						<button id="btn-search" type="button"><i class="fa fa-search"></i></button>

					</div>

				</div>

			<div class="container">
					
					<nav id="menu">
						<ul class="float-right">
							<li><a href="index.php">Home</a></li>
							<li><a href="#cursos">Cursos</a></li>
							<li><a href="#sobre">Sobre Nós</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contato">Contato</a></li>
							<li><a href="painelSiteLogin">+ Área Restrita</a></li>
							<li class="search">
								<div class="input-group">
									<input type="search" class="form-control" placeholder="Pesquisar" id="input-search">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
									</span>
								</div> <!--/input-group-->
							</li>
						</ul>
					</nav>
			</div>

		</header>

