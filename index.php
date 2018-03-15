<?php

ini_set("display_errors", 3);
error_reporting(E_ALL);


//require the autoload file
require_once('vendor/autoload.php');
session_start();

//create an instance of the base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

//define a default route
$f3 -> route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
}
);

$f3->route('GET|POST /information', function() {
    $template = new Template();
    echo $template->render('pages/information.html');
});



$f3->run();