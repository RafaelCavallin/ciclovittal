<?php if(!class_exists('Rain\Tpl')){exit;}?>	<footer>
		
		<div id="contato" class="row row-cinza-claro">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-2 text-center">
						
						<img class="logotipo" src="/res/site/images/ciclo-logo-grdOK.png" alt="Logotipo">

					</div>


					<div class="col-md-10" ng-controller="lastposts-controller">

						<div class="row row-cols">
						
							<div class="col-md-4 col-popular-post">
								
								<h4>ÚLTIMAS POSTAGENS</h4>

								<ul class="list-unstyled">
									<li ng-repeat="item in itens">
										<h5>{{item.title}}</h5>
										<time>{{item.created}}</time>
									</li>
									<!-- <li>
										<h5>{{item.title}}</h5>
										<time>{{item.created}}</time>
									</li> -->
								</ul>

							</div>

							<div class="col-md-4 col-links">
								
								<h4>LINKS</h4>

								<ul class="list-unstyled">
									<li><a href="index.php"><i class="fa fa-angle-right"></i> Home</a></li>
									<li><a href="#cursos"><i class="fa fa-angle-right"></i> Cursos</a></li>
									<li><a href="#sobre"><i class="fa fa-angle-right"></i> Sobre Nós</a></li>
									<li><a href="#blog"><i class="fa fa-angle-right"></i> Blog</a></li>
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
										<a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
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
									<li class="page-up">
										<a href="#" id="page-up"><i class="fa fa-chevron-up"></i></a>
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

	</footer>
	
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="/res/site/js/efeitos.js"></script>
	
</body>
</html>

<script>

angular.module("ciclo", []).controller("lastposts-controller", function($scope, $http){

	$scope.itens = [];

	// Simple GET request example:
	$http({
	  method: 'GET',
	  url: 'itens'
	}).then(function successCallback(response) {
	    $scope.itens = response.data;
	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	});

});

</script>