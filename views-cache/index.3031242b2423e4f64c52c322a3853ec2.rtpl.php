<?php if(!class_exists('Rain\Tpl')){exit;}?><section>
	
	<div id="banner">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="/res/site/images/slidertecnico.jpg" alt="Técnico em Enfermagem">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="/res/site/images/slideruti.jpg" alt="UTI Adulto">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="/res/site/images/slidertrabalho.jpg" alt="Enfermagem do Trabalho">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="/res/site/images/slidermedicina.jpg" alt="Enfermagem com Amor">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	</div>
</section>

<section>

	<div id="cursos" class="container">

		<div class="row text-center">
			<h2>Nossos Cursos</h2>
			<hr>
		</div>
		
		<div class="text-center">

			<div class="row-cursos">

				<div class="col-xs-4">
						
					<a href="#">
						<span class="icon imgnurse"><img src="/res/site/images/imgnurse.png" alt="Técnico em Enfermagem"></span>
						<span class="icon imgnurse-hover"><img src="/res/site/images/imgnurse-hover.png" alt="Técnico em Enfermagem"></span>
						<span class="title">Técnico em Enfermagem</span>
					</a>

				</div>

				<div class="col-xs-4">	

					<a href="#">
						<span class="icon imgtrabalho"><img src="/res/site/images/imgtrabalho.png" alt="Enfermagem do Trabalho"></span>
						<span class="icon imgtrabalho-hover"><img src="/res/site/images/imgtrabalho-hover.png" alt="Enfermagem do Trabalho"></span>
						<span class="title">Enfermagem do Trabalho</span>
					</a>

				</div>

				<div class="col-xs-4">

					<a href="#">
						<span class="icon imguti"><img src="/res/site/images/imguti.png" alt="UTI Adulto"></span>
						<span class="icon imguti-hover"><img src="/res/site/images/imguti-hover.png" alt="UTI Adulto"></span>
						<span class="title">UTI Adulto</span>
					</a>

				</div>

			</div>

		</div>

	</div>

</section>

<div class="circle01 container">

	<div class="container text-center roundedimg01">
		<img src="/res/site/images/enfermagem01.jpg" class="img-fluid">
	  
	</div>

</div>

<section>

	<div id="sobre" class="container">

		<div class="row text-center">
			<h2>Sobre Nós</h2>
			<hr>
		</div>

		<div class="content" id="sobre__itens">
			<div class="sobre__item col-xs-3">
				<img src="/res/site/images/historia.jpg" class="img-fluid" alt="sobre" title="sobre">
				<h3>Nossa história</h3>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, 
				sed do eiusmod tempor incid...</p>
				<a href="#" class="read_more">SAIBA +</a>
			</div>
			<div class="sobre__item col-xs-3">
				<img src="/res/site/images/sala.jpg" class="img-fluid" alt="sobre" title="sobre">
				<h3>Instalações</h3>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, 
				sed do eiusmod tempor incid...</p>
				<a href="#" class="read_more">SAIBA +</a>
			</div>
			<div class="sobre__item col-xs-3">
				<img src="/res/site/images/material.jpg" class="img-fluid" alt="sobre" title="sobre">
				<h3>Material didático</h3>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, 
				sed do eiusmod tempor incid...</p>
				<a href="#" class="read_more">SAIBA +</a>
			</div>
			<div class="sobre__item col-xs-3">
				<img src="/res/site/images/laboratorio.jpg" class="img-fluid" alt="sobre" title="sobre">
				<h3>Laboratório</h3>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, 
				sed do eiusmod tempor incid...</p>
				<a href="#" class="read_more">SAIBA +</a>
			</div>

		</div>

	</div>

	<div class="circle02 container">


		<div class="container text-center roundedimg02">
		<img src="/res/site/images/instalacao.jpg" class="img-fluid">
  
	</div>

</div>

</section>

<section class="container" id="blog" ng-controller="blog-controller">

	<div class="row text-center">
			<h2>Blog</h2>
			<hr>
		</div>

	<div class="content">
		<div id="posts">
			<div class="posts__item clearfix col-md-8" ng-repeat="item in articles">
				<img src="/res/site/images/{{item.picture}}" class="img-fluid" alt="{{item.title}}" title="{{item.title}}">
				<h3>{{item.title}}</h3>
				<p>{{item.preview}}</p>

				<p>Criado em: {{item.created}}</p>
				<a href="#" class="read_more">Continue lendo &raquo;</a>
			</div>
		</div>

	</div>

</section>


	<div class="galeria">
		<ul>
		    <li><a href="#img1"><img src="/res/site/images/galeria/01.jpg" class="min"></a></li>
		    <li><a href="#img2"><img src="/res/site/images/galeria/02.jpg" class="min"></a></li>
		    <li><a href="#img3"><img src="/res/site/images/galeria/03.jpg" class="min"></a></li>
		    <li><a href="#img4"><img src="/res/site/images/galeria/04.jpg" class="min"></a></li>
		</ul>

		<style>
			
			*{
				margin: 0;
				padding: 0;
			}

			.galeria ul {
				width: 880px;
				list-style: none;
				display: flex;
				margin: 100px auto;
			}

			.min {
				width: 200px;
				padding: 10px;
			}

			.lbox {
				visibility: hidden;
				opacity: 0;
			}

			.lbox:target {
				opacity: 1;
				visibility: visible;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
				background: rgba(10,10,10,.7);
				position: fixed;
			}

			.box_img {
				width: 1000px;
				margin: 150px auto;
			}

			.btngaleria {
				color: #fff !important;
				font-family: 'Arial';
				text-decoration: none !important;
				position: absolute;
				width: 50px;
				height: 50px;
				font-size: 30px;
				text-align: center;
			}

			#prev {
				left: 5%;
				top:  45%;
			}

			#next {
				right: 5%;
				top:  45%;
			}

			#close {
				top: 2%;
				right: 2%;
			}

			.box_img img {
				opacity: 0;
			}

			.lbox:target .box_img img {
				opacity: 1;
				transition: opacity .4s linear;
			}

		</style>
		
		<div class="lbox" id="img1">
			
			<div class="box_img">
				
				<a href="#img4" class="btngaleria" id="prev">&#171;</a>
				<a href="#galeria" class="btngaleria" id="close">X</a>
				<img src="/res/site/images/galeria/01.jpg" alt="">
				<a href="#img2" class="btngaleria" id="next">&#187;</a>

			</div>	

		</div>

		<div class="lbox" id="img2">
			
			<div class="box_img">
				
				<a href="#img1" class="btngaleria" id="prev">&#171;</a>
				<a href="#galeria" class="btngaleria" id="close">X</a>
				<img src="/res/site/images/galeria/02.jpg" alt="">
				<a href="#img3" class="btngaleria" id="next">&#187;</a>

			</div>	

		</div>

		<div class="lbox" id="img3">
			
			<div class="box_img">
				
				<a href="#img2" class="btngaleria" id="prev">&#171;</a>
				<a href="#galeria" class="btngaleria" id="close">X</a>
				<img src="/res/site/images/galeria/03.jpg" alt="">
				<a href="#img4" class="btngaleria" id="next">&#187;</a>

			</div>	

		</div>

		<div class="lbox" id="img4">
			
			<div class="box_img">
				
				<a href="#img3" class="btngaleria" id="prev">&#171;</a>
				<a href="#galeria" class="btngaleria" id="close">X</a>
				<img src="/res/site/images/galeria/04.jpg" alt="">
				<a href="#img1" class="btngaleria" id="next">&#187;</a>

			</div>	

		</div>

	</div>

