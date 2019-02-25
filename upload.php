<?php 

	include("conexao.php");

	$msg = false;

	if(isset($_FILES['arquivo'])) {

		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //função para pegar extensão do arquivo
		$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
		$diretorio = "res/site/images/galeria/"; //define o diretório para onde enviaremos o arquivo

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

		$sql_code = "INSERT INTO tb_fotos (foto) VALUES ('$novo_nome')";
		if($mysqli->query($sql_code))
			$msg = "Arquivo enviado com sucesso!";
		else
			$msg = "Falha ao enviar arquivo!";
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>CicloVittal - Upload</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		
		.container p {
			color: #36d12b;
			font-weight: 600;
		}

	</style>

</head>
	<body>

		<div class="container" style="border: 15px solid #ccc; margin-top: 60px; color: #36648B; padding: 20px; width: 50%">
			<div class="text-center">
				<h1 style="margin-bottom: 20px">Upload de Foto</h1>
				<?php if($msg != false) echo "<p style=color: #36d12b; font-weight: 600> $msg </p>"; ?>
				<div class="form-group">
					<form action="upload.php" method="post" enctype="multipart/form-data">
						<!-- <label for="arquivo">Imagem</label> -->
						<input type="file" id="arquivo" required name="arquivo">
				</div>

				<!-- VISUALIZAR IMAGEM -->

				<div class="box box-widget">
	                <div class="box-body container" style="margin-bottom: 30px">
	                  <img class="img-responsive" id="image-preview" src="res/site/images/galeria/no-preview2.png" alt="Photo" style="width: 330px; height: 213px">
	                </div>
              	</div>

              	<!-- FIM VISUALIZAR IMAGEM -->

					<input class="btn btn-primary" type="submit" value="Enviar">
					<a href="javascript:close_window();" class="btn btn-danger">Fechar</a>
					</form>
			</div>	
		</div>




		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script type="text/javascript">
			
			function close_window() {

				close();
			}

		</script>

		<script>
			document.querySelector('#arquivo').addEventListener('change', function(){
			  
			  var file = new FileReader();

			  file.onload = function() {
			    
			    document.querySelector('#image-preview').src = file.result;

			  }

			  file.readAsDataURL(this.files[0]);

			});
		</script>

	</body>
</html>
