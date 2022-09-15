<?php

namespace App\Controllers;

use App\Utilities\ShowAndDie;
use App\Controllers\Generate;
use App\Models\saveData;

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
        global $requests;

        $lastpassword = new Generate($this->password_digits ?? null , $this->seperateData);

        saveData::save($requests->getIp(), $lastpassword->lastPassword());

        return $lastpassword->lastPassword();
    }

    public function showAllInThisObject()
    {
        return $this;
    }
}