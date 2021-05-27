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
            <h4>Thermodynamique</h4>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="controleur.php?action=Eng/Thermo/index">Introduction</a>
            </li>
            <li><a href="#raizes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Loi zero</a>
                <ul class="collapse list-unstyled" id="raizes">
                    <li><a href="controleur.php?action=Eng/Thermo/0law">Équilibre</a></li>
                </ul>
            </li>
            <li><a href="#interpolacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">1° Loi</a>
                <ul class="collapse list-unstyled" id="interpolacao">
                    <li><a href="controleur.php?action=Eng/Thermo/1law">Énergie</a></li>
                </ul>
            </li>
            <li><a href="#aproximacao" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">2° Loi</a>
                <ul class="collapse list-unstyled" id="aproximacao">
                    <li><a href="controleur.php?action=Eng/Thermo/2law">Entropie</a></li>
                </ul>
            </li>
            <li><a href="#lei3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">3° Loi</a>
                <ul class="collapse list-unstyled" id="lei3">
                    <li><a href="controleur.php?action=Eng/Thermo/3law">Zéro absolu</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="content">
        <article>
            <h1>Zéro absolu</h1>
            <img style="width: 40%" src="data:image/jpeg;base64,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">

            <p>
                <b>Il n'y a aucun moyen pour un corps d'atteindre la température du zéro absolu.</b> Outre cette définition, cette loi a également des implications sur les performances des machines thermiques, qui ne peuvent en aucun cas être égales à 100%.
            </p>
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
