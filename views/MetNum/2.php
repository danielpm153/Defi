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
	MetNum - Interpolação
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
                        Interpolation de points et de fonctions
					</h1>
					<button type="button" id="sidebarCollapse" data-icon="align-justify" class="btn btn-primary">
						<i class="fas fa-align-right"></i>
						<span>Toggle Sidebar</span>
					</button>
				</div>
			</nav>
			<nav class="navbar navbar-expand-lg navbar-light bg-light" id="padding0">
				<div class="container-fluid">
					<div class="moving">
						<a href="controleur.php?action=MetNum/index" class="badge badge-primary">Index</a>
						>>
						<span class="badge badge-secondary">Interpolation</span>
					</div>
				</div>
			</nav>
			<article>
                <p>L'interpolation part de là : étant donné un ensemble de points, comment calculer une valeur intermédiaire entre eux ?.</p> <p>.

                <p>Tout se résume au fait que nous disposons d'une quantité limitée de données et que nous voulons l'utiliser pour déterminer les valeurs entre les points.</p>.

                <p><em>Interpolation</em> diffère de <em>Extrapolation</em> précisément parce que l'interpolation calcule des valeurs <b>entre</b> les données déjà connues, alors que l'extrapolation calcule des valeurs <b>au-delà</b> des données connues.

		 		<h4>Exemple</h4>
		 		<div class="subsec">
		 			<p>Nous mesurons différentes valeurs de température en fonction du temps. Nous savons alors</p>
		 		
		 			<ul>
		 				<li> Au moment où \(t=0 \ \mathrm{s}\) était \(90 \ \mathrm{^oC}\)</li>
		 				<li> Au moment où \(t=1 \ \mathrm{s}\) était \(70 \ \mathrm{^oC}\)</li>
		 			</ul>
		 			<p>Comment pouvons-nous calculer la température lorsque \(t=0.5 \ \mathrm{s}\) ?</p>
		 		</div>
		 		
		 		<p>Un autre objectif est de simplifier le calcul de certaines fonctions.<p>
		 		
		 		<h4>Exemple</h4>
		 		<div class="subsec">
                    On pourrait calculer le sinus par la série de Taylor :</p>
		 		
		 			$$\sin \ x = x - \dfrac{x^3}{3!} + \dfrac{x^5}{5!} - \cdots$$
		 		
		 			<p>Du point de vue du calcul, il est plus intéressant de calculer certains points standards, tels que</p>
		 		
		 			<ul>
		 				<li>\(x = \ 0^o\)</li>
		 				<li>\(x = \ 30^o\)</li>
		 				<li>\(x = \ 45^o\)</li>
		 				<li>\(x = \ 60^o\)</li>
		 				<li>\(x = \ 90^o\)</li>
		 			</ul>
		 		
		 			<p>Et puis calculer \(\sin \ 35^o\) par interpolation peut être plus avantageux que de calculer par expansion en série.</p>
		 		</div>
		 		
		 		<p>Et pour ce faire, il existe différentes méthodes.</p>
			</article>
		</div>
	</div>

	
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
</body>
</html>
