<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');
session_start();

//create an instance of the base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function() {
    $view = new View();
    echo $view->render('pages/home.html');
}
);

$f3->route('GET|POST /information', function(){
    $template = new Template();
    echo $template->render('pages/information.html');
});

$f3->run();