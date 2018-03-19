<?php
/**
 * Created by PhpStorm.
 * User: Vlado
 * Date: 3/19/2018
 * Time: 1:59 PM
 */

class information
{

    protected $firstName;
    protected $lastName;
    protected $email;
    /**
     * information constructor.
     * @param $fname first name of user
     * @param $lname last name of user
     * @param $gender gender of user
     */
    public function __construct($firstName, $lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * Sets the first name of user
     * @param $firstName first name
     */
    function setFirst($firstName)
    {
        $this->first = $firstName;
    }

    /**
     * @return first name of user
     */
    function getFirst()
    {
        return $this->firstName;
    }

    /**
     * Sets the last name of user
     * @param $lastName last name
     */
    function setLast($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return last name of user
     */
    function getLast()
    {
        return $this->lastName;
    }

    /**
     * Sets the email of user
     * @param $email email
     */
    function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return email of user
     */
    function getEmail()
    {
        return $this->email;
    }
}