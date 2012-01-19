<?php
/*************************************
 * A short description of an address *
 * @author Patrik Lamberger          *
 *************************************/
class Address {

    private $street;
    private $area;
    private $city;

    function __construct($street, $area, $city) {
        $this->street = $street;
        $this->area = $area;
        $this->city = $city;
    }
    
    function getAllAddressInfo() {
        return $this->street. ' ' .$this->area. ' ' . $this->city;
    }
    
    function getStreet() {
        return $this->street;
    }
    
    function getArea(){
        return $this->area;
    }

    function getCity() {
        return $this->city;
    }
}

?>
