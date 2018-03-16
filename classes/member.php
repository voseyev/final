<?php
class Member
{
    protected $sqrFt;
    protected $location = array();
    protected $size;
    protected $material;


    /**
     * Member constructor.
     * @param $fname first name of user
     * @param $lname last name of user
     * @param $age age of user
     * @param $gender gender of user
     * @param $phone phone number of user
     */
    public function __construct($sqrFt, $location, $size, $material)
    {
        $this->fname = $sqrFt;
        $this->lname = $location;
        $this->age = $size;
        $this->gender = $material;
    }

    //FNAME

    /**
     * Sets the square feet of the tile
     * @param $fname first name
     */
    function setSqrFt($sqrFt)
    {
        $this->sqrFt = $sqrFt;
    }

    /**
     * @return first name of user
     */
    function getSqrFt()
    {
        return $this->sqrFt;
    }

    //LNAME

    /**
     * Sets the last name of the user
     * @param $lname last name
     */
    function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return last name of user
     */
    function getLocation()
    {
        return $this->location;
    }

    //AGE

    /**
     * Sets the age of the user
     * @param $age age of user
     */
    function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return age of user
     */
    function getSize()
    {
        return $this->size;
    }

    //GENDER

    /**
     * Sets the gender of the user
     * @param $gender gender of user
     */
    function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return gender of user
     */
    function getMaterial()
    {
        return $this->material;
    }
}

