<?php
require "Model/connexion.php";

define('WEBROOT', dirname(__FILE__));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE',ROOT.DS.'core');

if (isset($_GET['p'])){

    $nomController = $_GET['p'];

require_once "Controller/".$nomController."Controller.php";
}
else {

}





