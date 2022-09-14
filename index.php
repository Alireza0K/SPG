<?php

require "bootstrap/init.php";

echo View("home-index");

$requests->setPackageToData($_SERVER);