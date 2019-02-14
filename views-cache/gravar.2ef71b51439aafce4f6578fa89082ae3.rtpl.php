<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Blog
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/blog">Blog</a></li>
    <li class="active"><a href="/admin/blog/create">Nova postagem</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar foto</h3>
        </div>
        
        <form action="gravar.php" method="POST" enctype="multipart/form-data">
			<label for="imagem">Foto</label>
			<input type="file" name="imagem"/>
			<br/>
			<div class="box-body">
            	<img class="img-responsive" id="image-preview" alt="Photo">
            </div>
            <br/>
			<input class="btn btn-primary" type="submit" value="Enviar foto"/>
		</form>

      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
document.querySelector('#file').addEventListener('change', function(){
  
  var file = new FileReader();

  file.onload = function() {
    
    document.querySelector('#image-preview').src = file.result;

  }

  file.readAsDataURL(this.files[0]);

});
</script>

<!-- <script>
  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>	 -->