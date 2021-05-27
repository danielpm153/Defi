
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
	MetNum - Raizes
	</title>
    <style>
        :not(pre)>code[class*=language-], pre[class*=language-] {
            background: #fcfcfc;
        }

        pre[class*=language-] {
            padding: 1em;
            margin: .5em 0;
            overflow: auto;
        }

        code[class*=language-], pre[class*=language-] {
            color: #111b27;
            background: none;
            font-family: Consolas,Monaco,Andale Mono,Ubuntu Mono,monospace;
            text-align: left;
            white-space: pre;
            word-spacing: normal;
            word-break: normal;
            word-wrap: normal;
            line-height: 1.5;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            -webkit-hyphens: none;
            -ms-hyphens: none;
            hyphens: none;
        }

        code[class*=language-]::selection, code[class*=language-] ::selection, pre[class*=language-]::selection, pre[class*=language-] ::selection {
            background: #eaeaea;
        }
    </style>
</head>

	<div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Python</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="controleur.php?action=Programming/Python/index">Début</a>
                </li>
                <li><a href="#raizes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Structures de données</a>
                    <ul class="collapse list-unstyled" id="raizes">
                        <li><a href="controleur.php?action=Programming/Python/list">Liste</a></li>
                        <li><a href="controleur.php?action=Programming/Python/tuple">Tuple</a></li>
                        <li><a href="controleur.php?action=Programming/Python/set">Set</a></li>
                        <li><a href="controleur.php?action=Programming/Python/dict">Dictionnaire</a></li>
                    </ul>
                </li>
                <li><a href="#interpolacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Loops and conditionals</a>
                    <ul class="collapse list-unstyled" id="interpolacao">
                        <li><a href="#">If et Else</a></li>
                        <li><a href="#">For loops</a></li>
                        <li><a href="#">While loops</a></li>
                    </ul>
                </li>
                <li><a href="#aproximacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Fonctions et Générateurs</a>
                    <ul class="collapse list-unstyled" id="aproximacao">
                        <li><a href="#">Introduction</a></li>
                        <li><a href="#">Function</a></li>
                        <li><a href="#">Générateur</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
		
		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light" id="margintop25">
				<div class="container-fluid" id="padding0">
					<h1>
                        Dictionnaires en Python
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
						<a href="controleur.php?action=Programming/Python/index" class="badge badge-primary">Index</a>
						>>
						<span class="badge badge-secondary">Structure des données</span>
					</div>
				</div>
			</nav>
			<article>
                <h2>Introduction</h2>
                <p>
                    En Python, les dictionnaires sont des collections d'éléments non ordonnés avec une grande différence par rapport aux autres collections (listes, ensembles, tuples, etc.) : un élément à l'intérieur d'un dictionnaire a une clé qui lui est attachée, une sorte d'identifiant. Ainsi, il est souvent utilisé lorsque nous voulons stocker des données de manière organisée et qui ont une identification unique (comme c'est le cas dans les bases de données).
                </p>
                <h4>Déclarer des dictionnaires</h4>
                <div class="subsec">
                    <p>Pour créer une dictionnaires en Python, la syntaxe est la suivante :</p>
                    <pre class="language-python">
                        <code class="language-python">
                            >>>L1 = {}<span style="color: palevioletred">#Création d'une dictionnaires vide</span>
                            >>>L2 = {"Premier":1,"banana":"ola","blue":3,(1,2,3):4}<span style="color: palevioletred">#Création d'une dictionnaires</span>
                        </code>
                    </pre>
                </div>

                <h4>Récupérer un élément des dictionnaires</h4>
                <div class="subsec">
                    <p>Pour obtenir un élément de la liste, nous utilisons la syntaxe suivante :</p>
                    <pre class="language-python">
                        <code class="language-python">
                            >>>L2["Premier"]
                            >>>1
                            >>>L2[(1,2,3)]
                            >>>3
                        </code>
                    </pre>
                </div>
                    <p>Les dictionnaires sont des structures de données mutables</p>

                    <h4>Modification d'un élément de dictionnaires</h4>
                    <div class="subsec">
                        <p>Pour modifier un élément de la dictionnaires, nous utilisons la syntaxe suivante :</p>
                        <pre class="language-python">
                        <code class="language-python">
                            >>>L2<span style="color: palevioletred">#dictionnaires non modifiée</span>
                            {'Premier': 1, 'banana': 'ola', 'blue': 3, (1, 2, 3): 4}
                            >>>L2['Premier']=55<span style="color: palevioletred">#Modification du élément</span>
                            {'Premier': 55, 'banana': 'ola', 'blue': 3, (1, 2, 3): 4}
                            >>>L2["teste"] = "bonjour"<span style="color: palevioletred">#Ajouter un élément</span>
                            {'Premier': 1, 'banana': 'ola', 'blue': 3, (1, 2, 3): 4, 'teste': 'bonjour'}
                            >>>del L2['teste']<span style="color: palevioletred">#suppression du élément</span>
                            >>>L2
                            {'Premier': 1, 'banana': 'ola', 'blue': 3, (1, 2, 3): 4}
                        </code>
                    </pre>
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

