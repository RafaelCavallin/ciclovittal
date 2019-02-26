<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>CicloVittal - Blog</title>

        <link rel="stylesheet" href="/res/site/css/ciclovittal.css ">

        <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <link rel="icon" href="/res/site/images/3505ciclo-logo-grd-footer.ico" type="image/x-icon" />

        <link rel="shortcut icon" href="/res/site/images/3505ciclo-logo-grd-footer.ico" type="image/x-icon" />

        <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
</head>

<body style="background-color: #f3f5f8">


        <div class="container" id="blogSite">

            <div class="row text-center">
                        <h2>Blog</h2>
                        <hr>
                </div>

                <div class="float-right">
                  <a href="/" style="text-transform: uppercase; font-weight: bold; color: #36648b"><i class="fas fa-angle-double-left"></i>&nbsp;Voltar à página principal&nbsp;<i class="fas fa-angle-double-right"></i></a>
                </div>

                <!-- <div class="float-right"><a href="/" style="text-transform: uppercase; font-weight: bold; color: #36648b"><span><< </span>Voltar à página principal<span> >></span></a></div> -->

                <div class="box-tools">
                <form action="/blogSiteArtigos">
                  <div class="input-group input-group-sm" style="width: 300px;">
                    <input type="text" name="search" class="form-control pull-right" placeholder="Pesquisar" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="width: 200px">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                </form>
              </div>

          <div class="btnlimparbusca">
              <a href="/blogSiteArtigos" class="btn btn-primary"><i class="fa fa-eraser"></i> Limpar busca</a>
          </div>

            <div id="wrapper">

                <div class="bg-light" id="sidebar-wrapper">
                  <div class="sidebar-heading">Artigos</div>
                  <div class="list-group">
                    <ul class="list-group" style="overflow: auto">
                        <?php $counter1=-1;  if( isset($articles) && ( is_array($articles) || $articles instanceof Traversable ) && sizeof($articles) ) foreach( $articles as $key1 => $value1 ){ $counter1++; ?>

                        <li style="margin-bottom: 5px"><a href="/blogSite/<?php echo htmlspecialchars( $value1["idpost"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="list-group-item list-group-item-action bg-light">>> <?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - <?php echo formatDate2($value1["created"]); ?></a></li>
                        <?php } ?>

                    </ul>
                  </div>
                </div>

            </div>

        </div>

        <div class="container paginacao">

            <div class="content">
                
                    <div class="row justify-content-center">

                        <nav>
                          <ul class="pagination">
                            <!-- <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li> -->
                            <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>

                            <li class="page-item"><a class="page-link" href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                             <?php } ?>

                            <!-- <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li> -->
                          </ul>
                        </nav>

                    </div>

                </div>   

            </div>

</body>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>

</html>