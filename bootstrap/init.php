<?php

session_start();

define("MAIN_PATH", "/Applications/XAMPP/xamppfiles/htdocs/SPG/");

require "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(MAIN_PATH);
$dotenv->load();

try {
    $engine = $_ENV["DB_ENGINE"];
    
    $host = $_ENV["DB_HOST"];

    $dbname = $_ENV["DB_NAME"];

    $connection = new PDO("$engine:host=$host;dbname=$dbname", $_ENV["DB_USER"], $_ENV["DB_PASSWORD"]);
} catch (PDOException $e) {
    echo $e->getMessage();
}

require "helper/helpers.php";