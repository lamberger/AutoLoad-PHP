<?php
/**************************************************************
 * Describing a person with first name, second name and email *
 * @author Patrik Lamberger                                   *
 **************************************************************/
class Person {
    
    private $firstName;
    private $secondName;
    private $email;
    
    function __construct($fName, $sName, $mail) {
        $this->firstName = $fName;
        $this->secondName = $sName;
        $this->email = $mail;
    }
    
    function getAllPersonInfo() {
        return $this->firstName. " " . $this->secondName. " - ". $this->email;
    }
    function getFullName(){
        return $this->firstName. " " . $this->secondName;
    }
    function getEmail(){
        return $this->email;
    }
}
       
?>
