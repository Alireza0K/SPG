<?php

namespace App\Controllers;

use App\Utilities\ShowAndDie;
use App\Controllers\Generate;

class PasswordGenerator
{
    private $seperateData;
    private $passwordDigits;

    public function __set($name,$value)
    {
        $this->$name = $value;
    }

    public function setSeperateData($data)
    {
        $this->seperateData = $data;
    }

    public function setAllProperty()
    {
        foreach($this->seperateData as $key => $value){
            $this->$key = $value;
        }
    }

    public function Generate()
    {
        $lastpassword = new Generate($this->password_digits ?? null , $this->seperateData);

        return $lastpassword->lastPassword();
    }

    public function showAllInThisObject()
    {
        return $this;
    }
}