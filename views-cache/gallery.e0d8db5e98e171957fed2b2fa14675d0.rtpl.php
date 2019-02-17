<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CicloVittal - Galeria</title>

		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" href="/res/site/css/carousel.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

		<link rel="stylesheet" href="/res/site/css/ciclovittal.css ">

		<link rel="stylesheet" href="/res/site/css/gallery.css">

		<link rel="icon" href="/res/site/images/3505ciclo-logo-grd-footer.ico" type="image/x-icon" />

		<link rel="shortcut icon" href="/res/site/images/3505ciclo-logo-grd-footer.ico" type="image/x-icon" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

	</head>
	<body>

		<div class="container">
 
			<div class="container gallery-container">
			  
			    <h1 class="text-center">CicloVittal - Galeria de Fotos</h1>

			    <!-- <a href="/" class="btn btn-danger"><i class="fa fa-window-close"></i></a> -->

			    <div class="float-right"><a href="/"><span><< </span>Voltar à página principal<span> >></span></a></div>
			  
			    <p class="page-description text-center">Clique na imagem para aumentar</p>
			      
			    <div class="tz-gallery">
			  
			        <div class="row text-center">
			        	
			            <div class="col-md-8" style="margin-left: 140px">
			            	
			                <div class="card" style="border: none">
			                	<?php $counter1=-1;  if( isset($fotos) && ( is_array($fotos) || $fotos instanceof Traversable ) && sizeof($fotos) ) foreach( $fotos as $key1 => $value1 ){ $counter1++; ?>
			                    <a class="lightbox" href="res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			                    <img src="res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Park" class="card-img-top">
			                    <?php } ?>
			                    </a>
			                </div>
			                
			            </div>
			            
			        </div>
			  
			    </div>
			  
			</div>
 
		</div>

		<div class="box-footer clearfix">
	      	<ul class="pagination pagination-sm no-margin">
		        <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
		        <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
		        <?php } ?>
	     	</ul>
    	</div>

	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="lib/popper/Popper.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script src="/res/site/js/efeitos.js"></script>

	<script>
    	baguetteBox.run('.tz-gallery');
	</script>

	<script type="text/javascript">
			function fechar() {
			janela = top; 
			janela.opener = top; 
			janela.close();

			/*window.close();*/
			}
		</script>

	</body>
</html>