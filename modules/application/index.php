<?php


if(isset($_GET['page'])){
    $controller = $_GET['page'];
}
define("ROOT",dirname(__FILE__));
define("DB",ROOT."/db");
define("APP",ROOT."/application");
define("VENDOR",ROOT."/vendor");
define("VIEWS",ROOT."/application/views");

define("CONTROLLER", $controller);
define("CURRENCY", "BTC");

require(ROOT. '/vendor/autoload.php');
//include(BASE."/init.php");
include(APP."/application.php");

?>