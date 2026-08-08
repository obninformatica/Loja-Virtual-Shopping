<?php
use App\Classes\Template;
use App\Classes\Parameters;

//$parameters = new Parameters();
//dump($parameters->explodeParameters());

$template = new Template();
$twig = $template->init();



/*
* Chamando o controller digitado na URL
* http://localhost/controller
*/

$callController = new App\Controllers\Controller();
$calledController = $callController->controller();
$controller = new $calledController();
$controller->setTwig($twig);
/*
* Chamando o metodo digitado na URL
* http://localhost/controller/metodo
*/

$callMethod = new App\Controllers\Method();
$method = $callMethod->method($controller);

/*
* Chamando o controller através da classe controller e da classe method
*
*/
$parameters = new Parameters();
$parameter = $parameters->getParameterMethod($controller,$method);
$controller->$method($parameter);
