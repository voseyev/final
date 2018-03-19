<?php
/**
 * Created by PhpStorm.
 * User: Vlado
 * Date: 3/19/2018
 * Time: 1:59 PM
 */

class information
{
    /**
     * information constructor.
     * @param $fname first name of user
     * @param $lname last name of user
     * @param $gender gender of user
     */
    public function __construct($firstName, $lastName, $email)
    {
        $this->firstname = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * Sets the first name of user
     * @param $firstName first name
     */
    function setSqrFt($firstName)
    {
        $this->first = $firstName;
    }

    /**
     * @return first name of user
     */
    function getSqrFt()
    {
        return $this->firstName;
    }

    /**
     * Sets the last name of user
     * @param $lastName last name
     */
    function setLocation($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return last name of user
     */
    function getLocation()
    {
        return $this->lastName;
    }

    /**
     * Sets the email of user
     * @param $email email
     */
    function setSize($email)
    {
        $this->email = $email;
    }

    /**
     * @return email of user
     */
    function getSize()
    {
        return $this->email;
    }
}