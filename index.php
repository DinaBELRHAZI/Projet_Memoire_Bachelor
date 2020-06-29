<?php
require "Model/connexion.php";

        define('WEBROOT', dirname(__FILE__));
        define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
        define('ROOT', dirname(WEBROOT));
        define('DS', DIRECTORY_SEPARATOR);
        define('CORE', ROOT . DS . 'core');

//         // "c" dans le htaccess
//     if (isset($_GET['p'])) {

//        $nomController = $_GET['p'];
//        require_once "Controller/" . $nomController . ".php";
//     //    require_once "Controller/" . $nomController . "Controller.php";


//     }else{
//        // controller par défaut
//         require_once("Controller/etudiantController.php");

// }
//echo('index.php');echo('<br>');
// if(isset($_GET['id'])) echo ('id '.$_GET['id']); echo('<br>');
// if(isset($_GET['p'])) echo ('page de controller appeller '.$_GET['p']); echo('<br>');
// if(isset($_GET['action'])) echo ('action '.$_GET['action']);echo('<br>');
//die();


        if(!isset($_GET['p']) || $_GET['p'] == "")
        {
            $page = "accueilController";
        }
        else
        {
            // if(file_exists("Controller/".$_GET['p'].".php"))
            //     {
                     $page = $_GET['p'];
            //     }
              
        }

        // if(isset($_GET['id']))

        require "./Controller/".$page.".php";