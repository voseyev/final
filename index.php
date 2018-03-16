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

        $f3->set('location', $location);
        $f3->set('sqrFt', $sqrFt);

        include('model/validate.php');

        $estimate = new estimate($location, $sqrFt);

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
        echo "Post array <pre>";
        var_dump($_POST);
        echo "</pre>";

        $size = $_POST['size'];
        $material = $_POST['material'];


        $f3->set('size', $size);
        $f3->set('material', $material);


        $_SESSION['size'] = $_POST['size'];
        $_SESSION['material'] = $_POST['material'];


        $estimate = $_SESSION['estimate'];
        $estimate->setSize($_SESSION['size']);
        $estimate->setMaterial($_SESSION['material']);

        $_SESSION['estimate'] = $estimate;
        header("Location:summary");
    }

    $template = new Template();
    echo $template->render('pages/style.html');
});

$f3->run();