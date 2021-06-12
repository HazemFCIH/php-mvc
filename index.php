<?php
require('config.php');
require ('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');
require ('Controllers/home.php');
require ('Controllers/users.php');
require ('Controllers/shares.php');
require ('Models/share.php');
require ('Models/user.php');
require ('Models/home.php');
$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}