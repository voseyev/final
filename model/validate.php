<?php
/**
 * Created by PhpStorm.
 * User: Zach Kunitsa
 * Date: 2/26/2018
 */

function validSqrFt($sqrFt)
{
    if(!empty($sqrFt) && is_numeric($sqrFt))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validLocation($location)
{
    if(!empty($location)) {
        foreach ($location as $activity) {
            if ($activity != "kitchen" && $activity != "bathroom" &&
                $activity != "familyRoom" && $activity != "patio" &&
                $activity != "backsplash" && $activity != "floor"
                && $activity != "shower") {
                return false;
            }
        }
    }else{
        return false;
    }
    return true;
}




$errors = array();

if(!validsqrFt($sqrFt))
{
    $errors['sqrFt']="Please enter a valid measurment.";
    echo "ERROR";
}

if(!validLocation($location)) {
    $errors['age'] = "Please choose at least one";
}



