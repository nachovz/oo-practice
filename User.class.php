<?php

class User{
// Attributes
// + username       :   string
// + email          :   string
// - password       :   string
// + dateOfBirth    :   string
// - phoneNumber    :   string
// + firstName      :   string
// + lastName       :   string

    public $username;       // string
    private $email;          // string
    public $dateOfBirth;    // string
    public $firstName;      // string
    public $lastName;       // string
    private $password;      // string
    private $phoneNumber;   // string

// Methods

// + __construct(   firstName _string, 
//                  lastName _string, 
//                  email _string, 
//                  userame _string
//              ) - no return
    function __construct($newFirstName, $newLastName, $newEmail, $newUsername){
        $this->firstName = $newFirstName;
        $this->lastName = $lastName;
        $this->email = $newEmail;
        $this->username = $newUsername;
    }
    // + setPassword( newPassword _string ) - return boolean
    function setPassword($newPassword){
        // newPassword is longer than 7 characters.
        // TO-DO: validate it has numbers and letters.
        if(strlen($newPassword) > 6){
            $this->password = $newPassword;
            return true;
        }else{
            return false;
        }
    }
    
    // setEmail(newEmail _string) - return boolean
    function setEmail($newString){
        //newEmail should have a valid email address: dfuhdsif@jsdfkj.ndc
        
        
    }
}



// Methods


// + calculateAge() - return number
// + setPhoneNumber(newPhoneNumber _string) - return boolean
// - transformDateOfBirth(dateOfBirth _string) - return time

?>