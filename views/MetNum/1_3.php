<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- #############################################
	     #                    CSS                    #
	     ############################################# -->
	
	
	<!-- Bootstrap CSS CDN -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
	
	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" href="css/architect.css">
	<link rel="stylesheet" href="css/0custom.css">
	
	
	
	<!-- #############################################
	     #                    JS                     #
	     ############################################# -->
	
	<!-- <script id="MathJax-script" async src="../js/tex-mml-chtml.js"></script> -->
	<!-- <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML"></script> -->
	<!-- <script type="text/x-mathjax-config" src="../js/mathjaxconfig.js"></script> -->
	
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	
	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
	<title>
	MetNum - Newton–Raphson
	</title>
</head>
<body>
	<div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Méthodes Numériques</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="controleur.php?action=MetNum/index">Début</a>
                </li>
                <li><a href="#raizes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Trouver des racines 1D</a>
                    <ul class="collapse list-unstyled" id="raizes">
                        <li><a href="controleur.php?action=MetNum/1">Introduction</a></li>
                        <li><a href="controleur.php?action=MetNum/1_1">Bissection</a></li>
                        <li><a href="controleur.php?action=MetNum/1_2">Point Fixe</a></li>
                        <li><a href="controleur.php?action=MetNum/1_3">Newton</a></li>
                        <li><a href="controleur.php?action=MetNum/1_4">Secants</a></li>
                    </ul>
                </li>
                <li><a href="#interpolacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Interpolation</a>
                    <ul class="collapse list-unstyled" id="interpolacao">
                        <li><a href="controleur.php?action=MetNum/2">Introduction</a></li>
                        <li><a href="controleur.php?action=MetNum/2_1">Lagrange</a></li>
                        <li><a href="controleur.php?action=MetNum/2_2">Hermite</a></li>
                        <li><a href="controleur.php?action=MetNum/2_3">Spline</a></li>
                    </ul>
                </li>
                <li><a href="#aproximacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Approximation</a>
                    <ul class="collapse list-unstyled" id="aproximacao">
                        <li><a href="controleur.php?action=MetNum/3">Introduction</a></li>
                        <li><a href="controleur.php?action=MetNum/3_1">Régression Linéaire</a></li>
                        <li><a href="controleur.php?action=MetNum/3_2">Moindres Carrés</a></li>
                    </ul>
                </li>
                <li><a href="#integracao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Intégration Numérique</a>
                    <ul class="collapse list-unstyled" id="integracao">
                        <li><a href="controleur.php?action=MetNum/4">Introduction</a></li>
                        <li><a href="controleur.php?action=MetNum/4_1">Rectangles</a></li>
                        <li><a href="controleur.php?action=MetNum/4_2">Trapèzes</a></li>
                        <li><a href="controleur.php?action=MetNum/4_3">Simpson de 1/3</a></li>
                        <li><a href="controleur.php?action=MetNum/4_4">Simpson de 3/8</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
		
		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light" id="margintop25">
				<div class="container-fluid" id="padding0">
					<h1>
						Méthode de Newton–Raphson
					</h1>
					<button type="button" id="sidebarCollapse" data-icon="align-justify" class="btn btn-primary">
						<i class="fas fa-align-justify"></i>
						<span>Toggle Sidebar</span>
					</button>
				</div>
			</nav>
			<nav class="navbar navbar-expand-lg navbar-light bg-light" id="padding0">
				<div class="container-fluid">
					<div class="moving">
						<a href="controleur.php?action=MetNum/index" class="badge badge-primary">Index</a>
						>>
						<a href="controleur.php?action=MetNum/1" class="badge badge-primary">Racines</a>
						>>
						<span class="badge badge-secondary">Newton-Raphson</span>
					</div>
					<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-align-justify"></i>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="#button_resumo" onclick="call('resumo')">Résumé</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled">Théorie</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled">Erreurs</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled">Restrictions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled">Paramètres</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled">Exemple</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled">Plus</a>
							</li>
							<li class="nav-app">
								<a class="nav-link disabled">Application</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<article>
		 		<div id="div_resumo">
		 			<h3>Résumé</h3>
		 			<div class="subsec">
		 				<p>Cette méthode utilise la même idée que le <a href="controleur.php?action=MetNum/1_2">Point Fixe</a>, mais choisissez la fonction \(g(x)\) comme:</p>
		 				
		 				$$g(x) = \dfrac{f(x)}{f'(x)}$$
		 			</div>
		 		</div>
		 		
		 		<div id="div_teoria">
		 			<h3>Théorie</h3>
		 			<div class="subsec">
		 			</div>
		 		</div>
		 		
		 		<div id="div_erros">
		 			<h3>Erreurs</h3>
		 			<div class="subsec">
		 			</div>
		 		</div>
		 		
		 		<div id="div_restricoes">
		 			<h3>Restrictions</h3>
		 			<div class="subsec">
		 			</div>
		 		</div>
		 		
		 		<div id="div_parametros">
		 			<h3>Paramètres</h3>
		 			<div class="subsec">
		 			</div>
		 		</div>
		 		
		 		<div id="div_exemplo">
		 			<h3>Exemple</h3>
		 			<div class="subsec">
		 			</div>
		 		</div>
		 		
		 		<div id="div_mais">
		 			<h3>Créditos e saiba mais</h3>
		 			<div class="subsec">
		 			</div>
		 		</div>
		 		
		 		<div id="div_aplicacao">
		 			<h3>Application</h3>
		 			<div class="subsec">
		 			</div>
		 		</div>
			</article>
		</div>
	</div>
	
	<!-- jQuery CDN - Slim version (=without AJAX)
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="js/jquery-3.3.1.slim.min.js"></script> -->
	
	<!-- Popper.JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<!-- <script src="js/popper.min.js"></script> -->
	
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	
	<!-- jQuery Custom Scroller CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> -->
	<script type="text/javascript" src="js/init1.js"></script>
	<script type="text/javascript" src="js/init2.js"></script>
</body>
</html>
