<?php

namespace App\Controllers;

class Generate
{
    private $passwordLimit;
    private $clientCommand;
    private $password;
    private $place1 = [""];
    private $place2 = [""];
    private $place3 = [""];


    public function __construct($passwordDigits, $command)
    {
        $this->passwordLimit = $passwordDigits;

        $this->clientCommand = $command;
    }

    private function numberGenerate()
    {
        $numbers = [1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0];

        shuffle($numbers);

        return $numbers;
    }

    private function alphabetSmallCaseGenerate()
    {
        $alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        
        shuffle($alphabet);

        return $alphabet;
    }

    private function objects()
    {
        $objects = ["!","@","#","$","%","^","&","*","(",")","{","}","_","+","=","-",",","<",">","?","~","[","]"];
    
        shuffle($objects);
        
        return $objects;
    }

    private function Generate()
    {
        if($this->clientCommand["Alphabet"] ?? null == true){
            $this->place1 = $this->alphabetSmallCaseGenerate();
        }

        if($this->clientCommand["Number"] ?? null == true){
            $this->place2 = $this->numberGenerate();
        }

        if($this->clientCommand["Element"] ?? null == true){
            $this->place3 = $this->objects();
        }

        $this->password = array_merge($this->place1 , $this->place2 , $this->place3);

        shuffle($this->password);
    }

    public function lastPassword()
    {
        $this->Generate();

        $realPassword = implode($this->password);
        
        return substr($realPassword, 1,$this->passwordLimit);
    }
}