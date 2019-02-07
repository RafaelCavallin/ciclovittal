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

<!-- INÍCIO SECTION BLOG E SIDEBAR -->

<section class="container" id="blog">

	<div class="row text-center">
			<h2>Blog</h2>
			<hr>
		</div>

	<div class="content">
		<div id="posts">
			<div class="posts__item clearfix col-md-8">
				<?php $counter1=-1;  if( isset($blog) && ( is_array($blog) || $blog instanceof Traversable ) && sizeof($blog) ) foreach( $blog as $key1 => $value1 ){ $counter1++; ?>
				<img id="image-preview" src="<?php echo htmlspecialchars( $blog["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid">
				<?php } ?>
				<?php $counter1=-1;  if( isset($articles) && ( is_array($articles) || $articles instanceof Traversable ) && sizeof($articles) ) foreach( $articles as $key1 => $value1 ){ $counter1++; ?>
				<h3><?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
				<p><?php echo htmlspecialchars( $value1["preview"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

				<p>Criado em: <?php echo formatDate($value1["created"]); ?></p>
				<a href="#" class="read_more">Continue lendo &raquo;</a>
				<?php } ?>
			</div>
		</div>
		<div>
			<a href="/blogSite"><p>Veja todos os artigos</p></a>
		</div>
	</div> <!-- FIM DO BLOG -->

	<!-- INÍCIO DA SIDEBAR FOTOS -->

	<div id="sidebar">

		<div class="widget">
			<h4 class="widget__title">
				Galeria de Fotos
			</h4>
		</div>
		
		<div class="galeria-camera">

			<i class="fa fa-camera" style="font-size: 40px "></i>
		</div>

		<!-- INÍCIO GALERIA -->

		<div class="container">

			<table>

				<tbody>
					
				<tr>
	
					<td>
						<?php $counter1=-1;  if( isset($fotos) && ( is_array($fotos) || $fotos instanceof Traversable ) && sizeof($fotos) ) foreach( $fotos as $key1 => $value1 ){ $counter1++; ?>
						<img src="/res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
						<?php } ?>
					</td>
				
				</tr>

				<tr>
			
					<td>
						<?php $counter1=-1;  if( isset($fotos2) && ( is_array($fotos2) || $fotos2 instanceof Traversable ) && sizeof($fotos2) ) foreach( $fotos2 as $key1 => $value1 ){ $counter1++; ?>
						<img src="/res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
						<?php } ?>
					</td>
				
				</tr> 

				<tr>
				
					<td>
						<?php $counter1=-1;  if( isset($fotos3) && ( is_array($fotos3) || $fotos3 instanceof Traversable ) && sizeof($fotos3) ) foreach( $fotos3 as $key1 => $value1 ){ $counter1++; ?>
						<img src="/res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
						<?php } ?>
					</td>
				
				</tr>
				
				</tbody>

			</table>

		</div>

		<!-- FIM GALERIA -->

		<div class=" container foto_gallery col-md-4" id="foto_onclick">
			<a href="#">
				<?php $counter1=-1;  if( isset($foto) && ( is_array($foto) || $foto instanceof Traversable ) && sizeof($foto) ) foreach( $foto as $key1 => $value1 ){ $counter1++; ?>
				<img src="/res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
				<?php } ?>
			</a>
		</div>

		<div><a href="#" class="read_more">Veja mais fotos &raquo;</a></div>	

	</div> <!-- FIM SIDEBAR FOTOS -->

</section>
	