<?php
session_start();

include_once "libs/maLibUtils.php";




$view = valider("view");

$hash = valider("hash", "SESSION");
if ($view == false) {
    header("Location: index.php?view=accueil");
    die();
}
if($view!="MetNum/1_1_app"){
    include("views/header.php");
}

switch ($view) {
    case "accueil":
        include("views/accueil.php");
        break;

    case "signUp":
        include("views/signup.php");
        break;

    case "enseigner":
        include("views/enseigner.php");
        break;

    case "apprendre":
        include("views/apprendre.php");
        break;

    case "apprendreModal":
        include("views/apprendreModal.php");
        break;

    case "invitation":
        include("views/invitation.php");
        break;

    case "demands":
        include("views/demands.php");
        break;

    case "records":
        include("views/records.php");
        break;

    case "whoweare":
        include("views/whoweare.php");
        break;

    case "MetNum/index":
        include("views/MetNum/index.php");
        break;

    case "MetNum/1":
        include("views/MetNum/1.php");
        break;

    case "MetNum/1_1":
        include("views/MetNum/1_1.php");
        break;

    case "MetNum/1_1_app":
        include("views/MetNum/1_1_app.php");
        break;

    case "MetNum/1_2":
        include("views/MetNum/1_2.php");
        break;

    case "MetNum/1_3":
        include("views/MetNum/1_3.php");
        break;

    case "MetNum/1_4":
        include("views/MetNum/1_4.php");
        break;

    case "MetNum/2":
        include("views/MetNum/2.php");
        break;

    case "MetNum/2_1":
        include("views/MetNum/2_1.php");
        break;

    case "MetNum/2_2":
        include("views/MetNum/2_2.php");
        break;

    case "MetNum/2_3":
        include("views/MetNum/2_3.php");
        break;

    case "MetNum/3":
        include("views/MetNum/3.php");
        break;

    case "MetNum/3_1":
        include("views/MetNum/3_1.php");
        break;

    case "MetNum/3_2":
        include("views/MetNum/3_2.php");
        break;

    case "MetNum/4":
        include("views/MetNum/4.php");
        break;

    case "MetNum/4_1":
        include("views/MetNum/4_1.php");
        break;

    case "MetNum/4_2":
        include("views/MetNum/4_2.php");
        break;

    case "MetNum/4_3":
        include("views/MetNum/4_3.php");
        break;

    case "MetNum/4_4":
        include("views/MetNum/4_4.php");
        break;

    case "Math/Polynomial/index":
        include("views/Math/Polynomial/index.php");
        break;

    case "Math/Geometry/index":
        include("views/Math/Geometry/index.php");
        break;

    case "Programming/Python/index":
        include("views/Programming/Python/index.php");
        break;

    case "Programming/Python/list":
        include("views/Programming/Python/list.php");
        break;

    case "Programming/Python/tuple":
        include("views/Programming/Python/tuple.php");
        break;

    case "Programming/Python/set":
        include("views/Programming/Python/set.php");
        break;

    case "Programming/Python/dict":
        include("views/Programming/Python/dict.php");
        break;

    case "Eng/Newton/index":
        include("views/Eng/Newton/index.php");
        break;

    case "Eng/Newton/1law":
        include("views/Eng/Newton/1law.php");
        break;

    case "Eng/Newton/2law":
        include("views/Eng/Newton/2law.php");
        break;

    case "Eng/Newton/3law":
        include("views/Eng/Newton/3law.php");
        break;

    case "Eng/Thermo/index":
        include("views/Eng/Thermo/index.php");
        break;

    case "Market/index":
        include("views/Market/index.php");
        break;

    case "Market/tipos":
        include("views/Market/tipos.php");
        break;

    default:
        if (file_exists("views/$view.php"))
            include("views/$view.php");
}

//include("views/footer.php");
