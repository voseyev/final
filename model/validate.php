<?php
/**
 * Created by PhpStorm.
 * User: Zach Kunitsa
 * Date: 2/26/2018
 */

/**
 *validate name
 */
function validName($name) {
    return ctype_alpha($name);
}

/**
 *validate square feet
 */
function validSqrFt($sqrFt) {
    return (is_numeric($sqrFt));
}

/**
 *validate email
 */
function validEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    else return true;
}

/**
 *validate location of tile
 */
function validLocation($arraySize)
{
    if($arraySize == 0) {
        return false;
    }
    else return true;
    $arraySize = 0;
}






