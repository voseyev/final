<?php
class estimate
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
        $this->sqrFt = $sqrFt;
        $this->location = $location;
        $this->size = $size;
        $this->material = $material;
    }

    //FNAME

    /**
     * Sets the square feet of the tile
     * @param $sqrFt square feet
     */
    function setSqrFt($sqrFt)
    {
        $this->sqrFt = $sqrFt;
    }

    /**
     * @return square feet of tile
     */
    function getSqrFt()
    {
        return $this->sqrFt;
    }

    //LNAME

    /**
     * set location of tile
     * @param $location location of tile
     */
    function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return location of tile
     */
    function getLocation()
    {
        return $this->location;
    }

    //AGE

    /**
     * sets the size of tile
     * @param $size size of tile
     */
    function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return size of tile
     */
    function getSize()
    {
        return $this->size;
    }

    //GENDER

    /**
     * sets material of tile
     * @param $material material of tile
     */
    function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return material of tile
     */
    function getMaterial()
    {
        return $this->material;
    }
}

