<?php
ob_start();
session_start();

include_once "libs/maLibUtils.php";
include_once "libs/maLibSecurisation.php";

$qs = "";

if ($action = valider("action")) {

    switch ($action) {
        case 'Connexion':
            if ($hash = valider("hash")) {
                $qs = "?view=apprendre";
                $_SESSION["hash"] = $hash;
            } else if ($msg = valider("message")) {
                $qs = "?view=login&message=" . $msg;
            }
            break;

        case 'Accueil':
            $qs = "?view=accueil";
            break;

        case 'Logout':
            session_destroy();
            $qs = "?view=accueil";
            break;

        case 'Enseigner':
            $qs = "?view=enseigner";
            break;

        case 'Apprendre':
            $qs = "?view=apprendre";
            break;

        case 'Invitation':
            $qs = "?view=invitation";
            break;

        case 'Demands':
            $qs = "?view=demands";
            break;

        case 'Records':
            $qs = "?view=records";
            break;

        case 'whoweare':
            $qs = "?view=whoweare";
            break;

        case 'MetNum/index':
            $qs = "?view=MetNum/index";
            break;

        case 'MetNum/1':
            $qs = "?view=MetNum/1";
            break;

        case 'MetNum/1_1':
            $qs = "?view=MetNum/1_1";
            break;

        case 'MetNum/1_1_app':
            $qs = "?view=MetNum/1_1_app";
            break;

        case 'MetNum/1_2':
            $qs = "?view=MetNum/1_2";
            break;

        case 'MetNum/1_3':
            $qs = "?view=MetNum/1_3";
            break;

        case 'MetNum/1_4':
            $qs = "?view=MetNum/1_4";
            break;

        case 'MetNum/2':
            $qs = "?view=MetNum/2";
            break;

        case 'MetNum/2_1':
            $qs = "?view=MetNum/2_1";
            break;

        case 'MetNum/2_2':
            $qs = "?view=MetNum/2_2";
            break;

        case 'MetNum/2_3':
            $qs = "?view=MetNum/2_3";
            break;

        case 'MetNum/3':
            $qs = "?view=MetNum/3";
            break;

        case 'MetNum/3_1':
            $qs = "?view=MetNum/3_1";
            break;

        case 'MetNum/3_2':
            $qs = "?view=MetNum/3_2";
            break;

        case 'MetNum/4':
            $qs = "?view=MetNum/4";
            break;

        case 'MetNum/4_1':
            $qs = "?view=MetNum/4_1";
            break;

        case 'MetNum/4_2':
            $qs = "?view=MetNum/4_2";
            break;

        case 'MetNum/4_3':
            $qs = "?view=MetNum/4_3";
            break;

        case 'MetNum/4_4':
            $qs = "?view=MetNum/4_4";
            break;

        case 'Math/Polynomial/index':
            $qs = "?view=Math/Polynomial/index";
            break;

        case 'Math/Geometry/index':
            $qs = "?view=Math/Geometry/index";
            break;

        case 'Programming/Python/index':
            $qs = "?view=Programming/Python/index";
            break;

        case 'Programming/Python/list':
            $qs = "?view=Programming/Python/list";
            break;

        case 'Programming/Python/tuple':
            $qs = "?view=Programming/Python/tuple";
            break;

        case 'Programming/Python/set':
            $qs = "?view=Programming/Python/set";
            break;

        case 'Programming/Python/dict':
            $qs = "?view=Programming/Python/dict";
            break;

        case 'Eng/Newton/index':
            $qs = "?view=Eng/Newton/index";
            break;

        case 'Eng/Newton/1law':
            $qs = "?view=Eng/Newton/1law";
            break;

        case 'Eng/Newton/2law':
            $qs = "?view=Eng/Newton/2law";
            break;

        case 'Eng/Newton/3law':
            $qs = "?view=Eng/Newton/3law";
            break;

        case 'Eng/Thermo/index':
            $qs = "?view=Eng/Thermo/index";
            break;

        case 'Eng/Thermo/0law':
            $qs = "?view=Eng/Thermo/0law";
            break;

        case 'Eng/Thermo/1law':
            $qs = "?view=Eng/Thermo/1law";
            break;

        case 'Eng/Thermo/2law':
            $qs = "?view=Eng/Thermo/2law";
            break;

        case 'Eng/Thermo/3law':
            $qs = "?view=Eng/Thermo/3law";
            break;

        case 'Market/index':
            $qs = "?view=Market/index";
            break;

        case 'Market/tipos':
            $qs = "?view=Market/tipos";
            break;

        case 'SignUp':
            if ($msg = valider("message")) {
                $qs = "?view=signUp&message=" . $msg;
            } else {
                $qs = "?view=signUp";
            }
            break;
    }
}

$urlBase = "https://defipinheiromelo.herokuapp.com/"."index.php";
//$urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";
header("Location:" . $urlBase . $qs);
ob_end_flush();
exit();
