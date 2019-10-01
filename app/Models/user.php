<?php namespace App\Models;

class User
{   
    public $firstnamem, $lastname;
    
    public function setFirstName($firstname)
    {
        $this->firstname = trim($firstname);
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = trim($lastname);
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getFullName()
    {
        return "$this->firstname $this->lastname";
    }
}
