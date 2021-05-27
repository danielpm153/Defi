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
            <h1>Principe Zero</h1>
            <img style="width: 30%" src="https://lenergie-solaire.net/uploads/cms/thermodynamique/lois-de-la-thermodynamique/loi-zero-thermodynamique.webp?ezimgfmt=rs:388x258/rscb1/ng:webp/ngcb1">

            <p>
                Si deux corps A et B initialement isolés et en équilibre sont mis en contact, ils vont atteindre un nouvel état d'équilibre avec égalité des "températures" (on parle alors d'équilibre thermique). Cette proposition constitue le principe zéro de la thermodynamique.
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
