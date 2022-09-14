<?php

require "bootstrap/init.php";

$requests->setPackageToData($_SERVER);

use App\Controllers\PasswordGenerator;

$password = new PasswordGenerator();

$password->setSeperateData($requests->getPostData());

$password->setAllProperty();

$lastResult = $password->Generate();

require "View/home/index.php";