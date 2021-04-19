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
require ('controllers/productos.php');
require ('controllers/historia.php');
require ('controllers/noticias.php');
require ('controllers/horas.php');


require ('models/home.php');
require ('models/share.php');
require ('models/contact.php');
require ('models/user.php');
require ('models/galeria.php');
require ('models/personal.php');
require ('models/enoturismo.php');
require ('models/reserva.php');
require ('models/producto.php');
require ('models/historia.php');
require ('models/noticias.php');
require ('models/horas.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}
?>