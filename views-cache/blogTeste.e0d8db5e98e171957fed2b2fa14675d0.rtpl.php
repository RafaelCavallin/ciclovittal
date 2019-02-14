<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content" style="position: relative; top: 50px">
		<div id="posts">
			<div class="posts__item clearfix col-md-8">

				<?php $counter1=-1;  if( isset($articles) && ( is_array($articles) || $articles instanceof Traversable ) && sizeof($articles) ) foreach( $articles as $key1 => $value1 ){ $counter1++; ?>

				<img id="image-preview" src="<?php echo htmlspecialchars( $blog["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="img-fluid">

				<h3><?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
				<p><?php echo htmlspecialchars( $value1["preview"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

				<p>Criado em: <?php echo formatDate($value1["created"]); ?></p>

				<a href="/blogSite/<?php echo htmlspecialchars( $value1["idpost"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="read_more">Continue lendo &raquo;</a>
				<?php } ?>
			</div>
		</div>
		<div>
			<a href="/blogSiteArtigos"><p>Veja todos os artigos</p></a>
		</div>
	</div>