<?php if(!class_exists('Rain\Tpl')){exit;}?>	<footer>
		
		<div id="contato" class="row row-cinza-claro">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-2 text-center">
						
						<img class="logotipo" src="/res/site/images/ciclo-logo-grdOK.png" alt="Logotipo">

					</div>


					<div class="col-md-10">

						<div class="row row-cols">
						
							<div class="col-md-4 col-popular-post">
								
								<h4>ÚLTIMAS POSTAGENS</h4>

								<ul class="list-unstyled">
									<li>
										<?php $counter1=-1;  if( isset($articles) && ( is_array($articles) || $articles instanceof Traversable ) && sizeof($articles) ) foreach( $articles as $key1 => $value1 ){ $counter1++; ?>

										<a href="/blogSite/<?php echo htmlspecialchars( $value1["idpost"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
											<h5><?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
											<time><?php echo formatDate($value1["created"]); ?></time>
										</a>
										<?php } ?>

									</li>
								</ul>
							</div>

							<div class="col-md-4 col-links">
								
								<h4>LINKS</h4>

								<ul class="list-unstyled">
									<li><a href="index.php"><i class="fa fa-angle-right"></i> Home</a></li>
									<li><a href="#cursos"><i class="fa fa-angle-right"></i> Cursos</a></li>
									<li><a href="#sobre"><i class="fa fa-angle-right"></i> Sobre Nós</a></li>
									<li><a href="#blog"><i class="fa fa-angle-right"></i> Blog</a></li>
									<li><a href="/gallery"><i class="fa fa-angle-right"></i> Galeria</a></li>
								</ul>

							</div>

							<div class="col-md-4 col-get-in-touch">
								
								<h4>LOCALIZAÇÃO</h4>

								<address>
									<i class="fa fa-map-marker-alt"></i> <a href="https://goo.gl/maps/M866ctkNtYD2" target="_blank"><span>Av. General Carneiro, 1274 - Vl. Lucy<br/>Sorocaba / SP / 18040-040</span></a>	
								</address>

								<p><a href="tel:1855ORLCITY"><i class="fa fa-phone"></i>(15) 3202-1339</a></p>

								<ul class="list-unstyled list-socials">
									<li>
										<a href="https://www.facebook.com/EscolaDeEnfermagemCicloVittal" target="_blank">
										<i class="fab fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
									</li>
									<li>
										<a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
									</li>
								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="row row-cinza-escuro">
			
			<div class="container">
				
				<p class="float-left">&copy; COPYRIGHT 2019, Escola de Enfermagem CicloVittal &reg;</p>
				<p class="float-right text-roxo">Created by Mekhet Desenvolvimento</p>

			</div>

		</div>

		<div class="scroolTop">
			<div class="btnTop">
				<!-- <a href="#" id="page-up"><i class="fa fa-chevron-up"></i></a> -->
				<!-- <button onclick="scrollToY(0, 10000, 'easeInOutSine');" id="page-up"><i class="fa fa-chevron-up"></i></button> -->
				<button id="page-up" title="Clique para retornar ao topo da página" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-up"></i></button>
			</div>
		</div>	

	</footer>
	
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script src="/res/site/js/efeitos.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){
	     $(window).scroll(function () {
	            if ($(this).scrollTop() > 200) {
	                $('#page-up').fadeIn();
	            } else {
	                $('#page-up').fadeOut();
	            }
	        });
	        // scroll body to 0px on click
	        $('#page-up').click(function () {
	            /*$('#page-up').tooltip('hide');*/
	            $('body,html').animate({
	                scrollTop: 0
	            }, 800);
	            return false;
	        });
	        
	        /*$('#page-up').tooltip('show');*/

		});	

	</script>

	<script>
	  jQuery(document).ready(function($) {
	    // Variavel de controle para indentificar se apliquei o efeito
	    var controleNav = false;
	    // Capturo o evento de rolagem da pagina
	    $(document).scroll(function(e) {
	        // Adiciono o valor de movimento do topo da pagina na variavel
	        var scrollTop = $(document).scrollTop();
	        // verivico se a movimentação do scroll é maior que o tamanho do height do meu menu
	        if (scrollTop > $('.navbar').height()) {
	            // verifico se já foi aplicado o efeito para fixiar o menu
	            if (controleNav == false) {
	                // removo a classe navbar-static-top e adciono a classe navbar-fixed-top
	                // tornando o menu fixo no topo do nosso site
	                $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
	                // torno nosso menu invisivel para aplicação do efeito de fade
	                $('.navbar').hide();
	                // aplico o efeito de fadeIn em nosso menu
	                $('.navbar').fadeIn('slow');
	                // digo para a variavel de controle que o efeito foi aplicado
	                controleNav = true;
	            }
	        } else {
	            // Ao retornar o ao topo do site verifico se o efeito foi aplicado
	            if (controleNav == true) {
	                // caso o efeito tenha sido aplicado removo a classe navbar-fixed-top 
	                // e retorno a classe navbar-static-top tornando o menu estatico novamente
	                $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
	                // Digo para a variavel controleNav que o efeito não esta mais aplicado
	                controleNav = false;
	            }
	        }
	    });
	});
  </script>

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
	
	<!-- <script type="text/javascript">

	window.onscroll = function() {scrollFunction()};

	window.requestAnimFrame = (function(){
	  return  window.requestAnimationFrame       ||
	          window.webkitRequestAnimationFrame ||
	          window.mozRequestAnimationFrame    ||
	          function( callback ){
	            window.setTimeout(callback, 1000 / 60);
	          };
	})();

	function scrollToY(scrollTargetY, speed, easing) {
	    // scrollTargetY: the target scrollY property of the window
	    // speed: time in pixels per second
	    // easing: easing equation to use

	    var scrollY = window.scrollY || document.documentElement.scrollTop,
	        scrollTargetY = scrollTargetY || 0,
	        speed = speed || 2000,
	        easing = easing || 'easeOutSine',
	        currentTime = 0;

	    // min time .1, max time .8 seconds
	    var time = Math.max(.1, Math.min(Math.abs(scrollY - scrollTargetY) / speed, .8));

	    // easing equations from https://github.com/danro/easing-js/blob/master/easing.js
	    var easingEquations = {
	            easeOutSine: function (pos) {
	                return Math.sin(pos * (Math.PI / 2));
	            },
	            easeInOutSine: function (pos) {
	                return (-0.5 * (Math.cos(Math.PI * pos) - 1));
	            },
	            easeInOutQuint: function (pos) {
	                if ((pos /= 0.5) < 1) {
	                    return 0.5 * Math.pow(pos, 5);
	                }
	                return 0.5 * (Math.pow((pos - 2), 5) + 2);
	            }
	        };

	    // add animation loop
	    function tick() {
	        currentTime += 1 / 60;

	        var p = currentTime / time;
	        var t = easingEquations[easing](p);

	        if (p < 1) {
	            requestAnimFrame(tick);

	            window.scrollTo(0, scrollY + ((scrollTargetY - scrollY) * t));
	        } else {
	            window.scrollTo(0, scrollTargetY);
	        }
	    }

	    // call it once to get started
	    tick();
	}

	function scrollFunction() {
	    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
	        document.getElementById("page-up").style.display = "block";
	    } else {
	        document.getElementById("page-up").style.display = "none";
	    }
	}

	</script> -->
	
</body>

</html>