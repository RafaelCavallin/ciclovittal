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
    <li class="active"><a href="#">Editar postagem</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Editar postagem</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/blog/<?php echo htmlspecialchars( $blog["idpost"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="title">Título</label> <!-- <span id='alert' style="font-weight: bold; color: #f00"></span> -->
              <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título" value="<?php echo htmlspecialchars( $blog["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" autofocus onkeyup="mostrarResultado(this.value,100,'spcontando');contarCaracteres(this.value,100,'sprestante')">
              <span id="spcontando">Nenhum caractere digitado</span><br />
              <span id="sprestante">Você ainda pode digitar 100 caracteres</span>
            </div>
            <div class="form-group">
              <label for="preview">Preview</label>
              <input type="text" class="form-control" id="preview" name="preview" placeholder="Digite o preview" value="<?php echo htmlspecialchars( $blog["preview"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onkeyup="mostrarResultado2(this.value,200,'spcontando2');contarCaracteres2(this.value,200,'sprestante2')">
              <span id="spcontando2">Nenhum caractere digitado</span><br />
              <span id="sprestante2">Você ainda pode digitar 200 caracteres</span>
            </div>
            <div class="form-group">
              <label for="body">Texto</label>
              <textarea name="body" id="body" class="form-control" rows="7" placeholder="Digite o texto" style="resize: none" onkeyup="mostrarResultado3(this.value,3100,'spcontando3');contarCaracteres3(this.value,3100,'sprestante3')"><?php echo htmlspecialchars( $blog["body"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
              <span id="spcontando3">Nenhum caractere digitado</span><br />
              <span id="sprestante3">Você ainda pode digitar 3100 caracteres</span>
            </div>
          </div>

          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="/admin/blog" class="btn btn-danger">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- <script>
document.querySelector('#file').addEventListener('change', function(){
  
  var file = new FileReader();

  file.onload = function() {
    
    document.querySelector('#image-preview').src = file.result;

  }

  file.readAsDataURL(this.files[0]);

});
</script> -->

<!-- COUNTER TITLE -->
<script>
function mostrarResultado(box,num_max,campospan){
  var contagem_carac = box.length;
  if (contagem_carac != 0){
    document.getElementById(campospan).innerHTML = contagem_carac + " caracteres digitados";
    if (contagem_carac == 1){
      document.getElementById(campospan).innerHTML = contagem_carac + " caracter digitado";
    }
    if (contagem_carac >= num_max){
      document.getElementById(campospan).innerHTML = "Limite de caracteres excedido!";
    }
  }else{
    document.getElementById(campospan).innerHTML = "Nenhum caractere digitado";
  }
}
</script>

<script>
function contarCaracteres(box,valor,campospan){
  var conta = valor - box.length;
  document.getElementById(campospan).innerHTML = "Você ainda pode digitar " + conta + " caracteres";
  if(box.length >= valor){
    document.getElementById(campospan).innerHTML = "Opss...você não pode mais digitar!";
    document.getElementById("title").value = document.getElementById("title").value.substr(0,valor);
  } 
}
</script>

<!-- COUNTER PREVIEW -->
<script>
function mostrarResultado2(box,num_max,campospan){
  var contagem_carac = box.length;
  if (contagem_carac != 0){
    document.getElementById(campospan).innerHTML = contagem_carac + " caracteres digitados";
    if (contagem_carac == 1){
      document.getElementById(campospan).innerHTML = contagem_carac + " caracter digitado";
    }
    if (contagem_carac >= num_max){
      document.getElementById(campospan).innerHTML = "Limite de caracteres excedido!";
    }
  }else{
    document.getElementById(campospan).innerHTML = "Nenhum caractere digitado";
  }
}
</script>

<script>
function contarCaracteres2(box,valor,campospan){
  var conta = valor - box.length;
  document.getElementById(campospan).innerHTML = "Você ainda pode digitar " + conta + " caracteres";
  if(box.length >= valor){
    document.getElementById(campospan).innerHTML = "Opss...você não pode mais digitar!";
    document.getElementById("preview").value = document.getElementById("preview").value.substr(0,valor);
  } 
}
</script>

<!-- COUNTER BODY -->
<script>
function mostrarResultado3(box,num_max,campospan){
  var contagem_carac = box.length;
  if (contagem_carac != 0){
    document.getElementById(campospan).innerHTML = contagem_carac + " caracteres digitados";
    if (contagem_carac == 1){
      document.getElementById(campospan).innerHTML = contagem_carac + " caracter digitado";
    }
    if (contagem_carac >= num_max){
      document.getElementById(campospan).innerHTML = "Limite de caracteres excedido!";
    }
  }else{
    document.getElementById(campospan).innerHTML = "Nenhum caractere digitado";
  }
}
</script>

<script>
function contarCaracteres3(box,valor,campospan){
  var conta = valor - box.length;
  document.getElementById(campospan).innerHTML = "Você ainda pode digitar " + conta + " caracteres";
  if(box.length >= valor){
    document.getElementById(campospan).innerHTML = "Opss...você não pode mais digitar!";
    document.getElementById("body").value = document.getElementById("body").value.substr(0,valor);
  } 
}
</script>
