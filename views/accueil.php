<?php
if (basename($_SERVER["PHP_SELF"]) != "index.php") {
	header("Location:../index.php?view=accueil");
	die("");
}
?>
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
    <!--
    <div id="banner">
        <img src="resources/banner.jpg" />
    </div>
    -->
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Apprendre</h3>
            </div>

            <ul class="list-unstyled components">
                <li><a href="#Math" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Math</a>
                    <ul class="collapse list-unstyled" id="Math">
                        <li><a href="controleur.php?action=MetNum/index">Méthodes numériques</a></li>
                        <li><a href="controleur.php?action=Math/Polynomial/index">Polynômes</a></li>
                        <li><a href="controleur.php?action=Math/Geometry/index">Géométrie</a></li>
                    </ul>
                </li>
                <li><a href="#Ingenierie" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ingénierie</a>
                    <ul class="collapse list-unstyled" id="Ingenierie">
                        <li><a href="controleur.php?action=Eng/Newton/index">Lois de Newton</a></li>
                        <li><a href="controleur.php?action=Eng/Thermo/index">Thermodynamique</a></li>
                    </ul>
                </li>
                <li><a href="#Programmation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Programmation</a>
                    <ul class="collapse list-unstyled" id="Programmation">
                        <li><a href="controleur.php?action=Programming/Python/index">Python</a></li>
                        <!--<li><a href="#">C</a></li>
                        <li><a href="#">C++</a></li>
                        <li><a href="#">MATLAB</a></li>-->
                    </ul>
                </li>

                <li><a href="#financier" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Marché financier</a>
                    <ul class="collapse list-unstyled" id="financier">
                        <li><a href="controleur.php?action=Market/index">Introdution</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="content" style="background-image: url('resources/banner.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
            <!--<img src="resources/banner.jpg" />-->
        <div>

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
</body>