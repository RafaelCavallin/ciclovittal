<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
        <title>CicloVittal - Blog</title>

        <link rel="stylesheet" href="/res/site/css/ciclovittal.css ">

        <link href="/sidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
</head>

<body style="background-color: #f3f5f8">


        <div class="container" id="blogSite">

            <div class="row text-center">
                        <h2>Blog</h2>
                        <hr>
                </div>

                <div class="float-right"><a href="/">Voltar à página principal</a></div>

            <div class="d-flex" id="wrapper">

                <div class="bg-light" id="sidebar-wrapper">
                  <div class="sidebar-heading">Artigos</div>
                  <div class="list-group list-group-flush">
                    <ul class="list-group" style="overflow: auto">
                        <?php $counter1=-1;  if( isset($articles) && ( is_array($articles) || $articles instanceof Traversable ) && sizeof($articles) ) foreach( $articles as $key1 => $value1 ){ $counter1++; ?>
                        <li><a href="/blogSite/<?php echo htmlspecialchars( $value1["idpost"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="list-group-item list-group-item-action bg-light"><?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                        <?php } ?>
                    </ul>
                  </div>
                </div>

            </div>

        </div>

</body>

</html>