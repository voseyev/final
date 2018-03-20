<?php
/**
 * Created by PhpStorm.
 * User: Zach Kunitsa
 * Date: 2/26/2018
 */

function validName($name) {
    return ctype_alpha($name);
}
function validSqrFt($sqrFt) {
    return (is_numeric($sqrFt));
}
function validEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    else return true;
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






