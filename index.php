<?php

require "bootstrap/init.php";

$requests->setPackageToData($_SERVER);

$requests->seprateData();

use App\Controllers\PasswordGenerator;
use App\Models\saveData;

$password = new PasswordGenerator();

$password->setSeperateData($requests->getPostData());

$password->setAllProperty();

if(isset($_POST["SendToGenerate"])){
    $lastResult = $password->Generate();
}

require "View/home/index.php";