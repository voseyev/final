<?php

//require the autoload file
require_once('vendor/autoload.php');

ini_set("display_errors", 3);
error_reporting(E_ALL);

session_start();

//create an instance of the base class
$f3 = Base::instance();

//Set debug level
$f3 -> set('DEBUG', 1);

//define a default route
$f3 -> route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
}
);

//estimate page
$f3 -> route('GET|POST /estimate', function() {
    $template = new Template();
    echo $template->render('pages/estimate.html');
});


//style page
$f3 -> route('GET|POST /style', function($f3) {
    include('classes/estimate.php');
    $template = new Template();
    if(isset($_POST['submit']))
    {
        echo "Post array <pre>";
        var_dump($_POST);
        echo "</pre>";
        $location = $_POST['location'];
        $sqrFt = $_POST['sqrFt'];

        $_SESSION['location'] = $location;
        $_SESSION['sqrFt'] = $sqrFt;

        include('model/validate.php');

        $estimate = new estimate($location, $sqrFt, ' ', ' ');

        $estimate->setSqrFt($sqrFt);
        $estimate->setLocation($location);
        //$errors = $_POST['errors'];

        echo print_r($estimate->getLocation());
        echo $estimate->getSqrFt();

    }

    //$f3->set('errors',$errors);
    echo $template->render('pages/style.html');


});

$f3 -> route('GET|POST /summary', function($f3) {
    if (isset($_POST['submit'])) {

        $size = $_POST['size'];
        $material = $_POST['material'];

        $sqrFt = $_SESSION['sqrFt'];
        $location = $_SESSION['location'];

        $f3->set('location', $location);
        $f3->set('sqrFt', $sqrFt);
        $f3->set('size', $size);
        $f3->set('material', $material);


        $estimate = new estimate($location, $sqrFt, $size, $material);


        $estimate->setSize($_SESSION['size']);
        $estimate->setMaterial($_SESSION['material']);



    }

    $template = new Template();
    echo $template->render('pages/summary.html');
});

$f3->run();