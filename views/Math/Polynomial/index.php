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
</head>
<body>
	<div class="wrapper">
		<nav id="sidebar">
			<div class="sidebar-header">
				<h3>Polynômes</h3>
			</div>
		
		    <ul class="list-unstyled components">
		        <li>
		            <a href="controleur.php?action=Math/Polynomial/index">Début</a>
		        </li>
		        <li><a href="#raizes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Polynôme de degré 1</a>
		            <ul class="collapse list-unstyled" id="raizes">
		                <li><a href="#">Introduction</a></li>
		                <li><a href="#">Bissection</a></li>
		                <li><a href="#">Point Fixe</a></li>
		                <li><a href="#">Newton</a></li>
		                <li><a href="#">Secants</a></li>
		            </ul>
		        </li>
		        <li><a href="#interpolacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Polynôme de degré 2</a>
		            <ul class="collapse list-unstyled" id="interpolacao">
		                <li><a href="#">Introduction</a></li>
		                <li><a href="#">Lagrange</a></li>
		                <li><a href="#">Hermite</a></li>
		                <li><a href="#">Spline</a></li>
		            </ul>
		        </li>
		        <li><a href="#aproximacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Polynôme de degré 3</a>
		            <ul class="collapse list-unstyled" id="aproximacao">
		                <li><a href="#">Introduction</a></li>
		                <li><a href="#">Régression Linéaire</a></li>
		                <li><a href="#">Minimums quadratiques</a></li>
		            </ul>
		        </li>
		        <li><a href="#integracao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Polynôme de degré n</a>
		            <ul class="collapse list-unstyled" id="integracao">
		                <li><a href="#">Introduction</a></li>
		                <li><a href="#">Rectangles</a></li>
		                <li><a href="#">Trapèzes</a></li>
		                <li><a href="#">Simpson de 1/3</a></li>
		                <li><a href="#">Simpson de 3/8</a></li>
		            </ul>
		        </li>

		    </ul>
		</nav>
		
		<div id="content">
			<header>
				<h1>Polynômes</h1>
			</header>
			<!-- 
			<nav class="navbar navbar-expand-lg navbar-light bg-light" id="margintop25">
				<div class="container-fluid" id="padding0">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
						<i class="fas fa-align-right"></i>
						<span>Toggle Sidebar</span>
					</button>
				</div>
			</nav>
			 -->
			<article>
				<h1>Introduction</h1>

                <p>
                    En mathématiques, un polynôme est une expression formée uniquement de produits et de sommes de constantes et d'indéterminées, habituellement notées X, Y, Z… Ces objets sont largement utilisés en pratique, ne serait-ce que parce qu'ils donnent localement une valeur approchée de toute fonction dérivable (voir développement limité) et permettent de représenter des formes lisses (voir l'article courbe de Bézier, décrivant un cas particulier de fonction polynomiale).
                </p>
                <p>
                    Un polynôme, en algèbre générale, à une indéterminée sur un anneau unitaire est une expression de la forme :
                </p>
                <p>
                    $$a_{0} + a_{1}\cdot x+a_{2}\cdot x^2+...+a_{n}\cdot x^n$$
                </p>
				<!--
				<p>Contudo, fazemos diversas hipóteses para resolver os problemas, tais como considerar que as funções que trabalhamos são funções compostas de funções simples ou assumir que EDOs são de coeficientes constantes e de que EDOs são lineares, o que na maioria das vezes não é verdade. Tais hipóteses frequentemente não são boas para os nossos problemas e abrimos mão de obtermos uma solução analítica(seja porque é dificil, seja porque é impossível) e aceitamos ter valores aproximados.</p>
				<p>Para isso serve Calculo Numérico: Utilizar os conceitos aprendidos em Calculo e aplicar em algoritmos que resolvam e achem soluções para os problemas, mesmo que aproximadas. Devido aos métodos serem aplicáveis no computador, existem erros envolvidos(aproximação numérica e truncamento devido ao hardware) e quanto mais precisão ser necessária, maior o custo computacional.</p>
				<p>Devido à necessidade de aumentar a precisão implicar em aumentar o custo computacional, melhorar os algoritmos para que não aumente tanto o custo computacional é uma boa ideia e devido a isso existe uma grande teoria matemática que envolve o Calculo Numérico. Estudando esses algoritmos e analisando os erros envolvidos é possível escolher o melhor para cada aplicação.</p>
				<p>Os livros de Calculo Numérico normalmente apresentam os algoritmos em pseudocódigos ou em Fortran: uma linguagem pouca utilizada atualmente embora seja muito eficiente para calculo numérico. Por estarmos lidando com algoritmos para fins didáticos, optou-se por uma linguagem de sintaxe simples(Fortran não é simples) e então foi escolhida a linguagem Python em que prioriza a legibilidade do código sobre a velocidade ou expressividade.</p>
				<p>Não é objetivo desse wiki conter toda a teoria de como os algoritmos são constuidos, suas falhas ou como melhorar, pois esse é o objetivo do livro e caso seja isso a sua necessidade, procure um. O livro que explica muitos dos algoritmos aqui presentes será o livro Análise Numérica de Richard L. Burden e J. Douglas Faires.</p>
				-->
				<!-- <h1>Objetivo</h1>
				
				<p>Implementar algoritmos de Calculo Numérico em Python e criar tutoriais de como utilizar os algoritmos implementados. Isso somente para fins didáticos.</p> -->
				
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
</body>
</html>
