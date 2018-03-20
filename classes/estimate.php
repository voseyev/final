<?php
/**
 * Created by PhpStorm.
 * User: Zach, Vlad
 * Date: 3/15/18
 * Time: 7:55 PM
 *
 * estimate class
 */
class estimate
{
    protected $sqrFt;
    protected $location = array();
    protected $size;
    protected $material;


    /**
     * estimate constructor
     * @param $location the place(s) the user chooses for tile installation
     * @param $sqrFt Square feet user chooses
     * @param $size size the tile user chooses
     * @param $material the type of tile user chooses
     */
    public function __construct($location, $sqrFt, $size, $material)
    {
        $this->sqrFt = $sqrFt;
        $this->location = $location;
        $this->size = $size;
        $this->material = $material;
    }


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

