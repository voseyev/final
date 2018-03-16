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
$f3 -> route('GET|POST /estimate', function($f3) {
    if(isset($_POST['submit']))
    {
        $location = $_POST['location'];
        $sqrFt = $_POST['sqrFt'];
        $errors = $_POST['errors'];

        include('model/validate.php');

        if(!isset($errors['sqrFt']) && !isset($errors['location']))
        {
            $_SESSION['location']=$location;
            $_SESSION['sqrFt']=$sqrFt;
            $member = $_SESSION['member'];
            $member->setLocation($location);
            $member->setSqrFt($sqrFt);
            $_SESSION['member'] = $member;
            header("Location:style");
        }
    }
    $f3->set('location',$location);
    $f3->set('sqrFt',$sqrFt);
    $f3->set('errors',$errors);


    $template = new Template();
    echo $template->render('pages/estimate.html');
});


//style page
$f3 -> route('GET|POST /style', function($f3) {
    if(isset($_POST['submit']))
    {
        $size = $_POST['size'];
        $material = $_POST['material'];


        $f3->set('size',$size);
        $f3->set('material',$material);


        $_SESSION['size'] = $_POST['size'];
        $_SESSION['material'] = $_POST['material'];


        $member = $_SESSION['member'];
        $member->setSize($_SESSION['size']);
        $member->setState($_SESSION['material']);

        $_SESSION['member'] = $member;
        header("Location:summary");
    }

    $template = new Template();
    echo $template->render('pages/style.html');
});






$f3->run();