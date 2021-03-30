<?php

session_start();

require ('config.php');

require ('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');
require ('classes/Messages.php');
require ('classes/form-process.php');

require ('controllers/home.php');
require ('controllers/contact.php');
require ('controllers/shares.php');
require ('controllers/users.php');
require ('controllers/galeria.php');
require ('controllers/personal.php');
require ('controllers/enoturismo.php');
require ('controllers/reserva.php');


require ('models/home.php');
require ('models/share.php');
require ('models/contact.php');
require ('models/user.php');
require ('models/galeria.php');
require ('models/personal.php');
require ('models/enoturismo.php');
require ('models/reserva.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}
?>