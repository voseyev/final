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

$dbh = new database();
$_SESSION['dbh'] = $dbh;

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

        $location = $_POST['location'];
        $sqrFt = $_POST['sqrFt'];

        $_SESSION['location'] = $location;
        $_SESSION['sqrFt'] = $sqrFt;

        $estimate = new estimate($location, $sqrFt, ' ', ' ');

        $estimate->setSqrFt($sqrFt);
        $estimate->setLocation($location);

        include('model/validate.php');
        $isValid = true;
        if (!validSqrFt($sqrFt)) {
            $f3->set('invalidSqrFt', "invalid");
            $isValid  = false;
        }
        $arraySize = sizeof($location);
        if(!validLocation($arraySize)) {
            $f3->set('invalidLocation', "invalid");
            $isValid = false;
        }
    }

    if($isValid) {
        echo $template->render('pages/style.html');
        $f3->set('location', $_SESSION['location']);
        $f3->set('sqrFt', $_SESSION['sqrFt']);
        $f3->set('size', $_SESSION['size']);
        $f3->set('material', $_SESSION['material']);
        $f3->set('arraySize', $_SESSION['arraySize']);
    }
    else {
        $f3->set('location', $_SESSION['location']);
        $f3->set('sqrFt', $_SESSION['sqrFt']);
        $f3->set('size', $_SESSION['size']);
        $f3->set('material', $_SESSION['material']);
        $f3->set('arraySize', $_SESSION['arraySize']);
        echo $template->render('pages/estimate.html');
    }

});

//summary page
$f3 -> route('GET|POST /summary', function($f3) {
    if (isset($_POST['submit'])) {

        $size = $_POST['size'];
        $material = $_POST['material'];

        $_SESSION['size'] = $size;
        $_SESSION['material'] = $material;

        $sqrFt = $_SESSION['sqrFt'];
        $location = $_SESSION['location'];

        $estimate = new estimate($location, $sqrFt, $size, $material);


        $estimate->setSize($size);
        $estimate->setMaterial($material);

        $arraySize = sizeof($location);

        $_SESSION['arraySize'] = $arraySize;

            $f3->set('location', $location);
            $f3->set('sqrFt', $sqrFt);
            $f3->set('size', $size);
            $f3->set('material', $material);
            $f3->set('arraySize', $arraySize);

    }

    $template = new Template();
    echo $template->render('pages/summary.html');
});

//contact page
$f3 -> route('GET|POST /contact', function($f3) {
    $template = new Template();
    if(isset($_POST['Revise'])) {
        $f3->set('location', $_SESSION['location']);
        $f3->set('sqrFt', $_SESSION['sqrFt']);
        $f3->set('size', $_SESSION['size']);
        $f3->set('material', $_SESSION['material']);
        $f3->set('arraySize', $_SESSION['arraySize']);
        echo $template->render('pages/estimate.html');
    }
    else {
        $f3->set('location', $_SESSION['location']);
        $f3->set('sqrFt', $_SESSION['sqrFt']);
        $f3->set('size', $_SESSION['size']);
        $f3->set('material', $_SESSION['material']);
        $f3->set('arraySize', $_SESSION['arraySize']);
    echo $template->render('pages/contact.html');
    }
});

//final summary page
$f3 -> route('GET|POST /finalSummary', function($f3) {
    include('classes/information.php');
    $template = new Template();
    if (isset($_POST['confirm'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];

        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;


        $information = new information($firstName, $lastName, $email);


        $information->setFirst($firstName);
        $information->setLast($lastName);
        $information->setEmail($email);

        $f3->set('location', $_SESSION['location']);
        $f3->set('sqrFt', $_SESSION['sqrFt']);
        $f3->set('size', $_SESSION['size']);
        $f3->set('material', $_SESSION['material']);
        $f3->set('arraySize', $_SESSION['arraySize']);

        $f3->set('firstName', $_SESSION['firstName']);
        $f3->set('lastName', $_SESSION['lastName']);
        $f3->set('email', $_SESSION['email']);

        $dbh = $_SESSION['dbh'];
        $dbh->addClient($firstName, $lastName, $email);

        include('model/validate.php');
        $isValid = true;
        if (!validName($firstName)) {
            $f3->set('invalidFirstName', "invalid");
            $isValid  = false;
        }
        if (!validName($lastName)) {
            $f3->set('invalidLastName', "invalid");
            $isValid = false;
        }
        if (!validEmail($email)) {
            $f3->set('invalidEmail', "invalid");
            $isValid = false;
        }
    }

    if($isValid) {
        $f3->set('firstName', $_SESSION['firstName']);
        $f3->set('lastName', $_SESSION['lastName']);
        $f3->set('email', $_SESSION['email']);
        echo $template->render('pages/finalSummary.html');
    }
    else {
        $f3->set('firstName', $_SESSION['firstName']);
        $f3->set('lastName', $_SESSION['lastName']);
        $f3->set('email', $_SESSION['email']);
        echo $template->render('pages/contact.html');
    }
});

//last page
$f3 -> route('GET|POST /end', function($f3) {
    $template = new Template();
    if(isset($_POST['Revise'])) {
        $f3->set('firstName', $_SESSION['firstName']);
        $f3->set('lastName', $_SESSION['lastName']);
        $f3->set('email', $_SESSION['email']);
        echo $template->render('pages/contact.html');
    }
    else {
        $f3->set('firstName', $_SESSION['firstName']);
        $f3->set('lastName', $_SESSION['lastName']);
        $f3->set('email', $_SESSION['email']);
        echo $template->render('pages/end.html');
    }
});

//admin page
$f3 -> route('GET|POST /admin', function($f3) {
    $template = new Template();
    if (isset($_POST['admin'])) {
        $dbh = $_SESSION['dbh'];
        $clients = $dbh->getClients();
        $f3->set('clients', $clients);
    }
    echo $template->render('pages/admin.html');
});

$f3->run();