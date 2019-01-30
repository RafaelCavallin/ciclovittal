<?php if(!class_exists('Rain\Tpl')){exit;}?><br>
<br>

<table>

	<tbody>
		
		<tr>
		
			<td>
				<?php $counter1=-1;  if( isset($fotos) && ( is_array($fotos) || $fotos instanceof Traversable ) && sizeof($fotos) ) foreach( $fotos as $key1 => $value1 ){ $counter1++; ?>
				<img src="/res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="height: 100px; width: 100px" class="img-fluid" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
				<?php } ?>
			</td>
		
		</tr>

		<tr>
	
			<td>
				<?php $counter1=-1;  if( isset($fotos2) && ( is_array($fotos2) || $fotos2 instanceof Traversable ) && sizeof($fotos2) ) foreach( $fotos2 as $key1 => $value1 ){ $counter1++; ?>
				<img src="/res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="height: 100px; width: 100px" class="img-fluid" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
				<?php } ?>
			</td>
		
		</tr> 

		<tr>
		
			<td>
				<?php $counter1=-1;  if( isset($fotos3) && ( is_array($fotos3) || $fotos3 instanceof Traversable ) && sizeof($fotos3) ) foreach( $fotos3 as $key1 => $value1 ){ $counter1++; ?>
				<img src="/res/site/images/galeria/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="height: 100px; width: 100px" class="img-fluid" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
				<?php } ?>
			</td>
		
		</tr>
	
	</tbody>

</table>

<br>
<br>