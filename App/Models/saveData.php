<?php 

namespace App\Models;

class saveData
{
    public static function save($ip, string $password)
    {
        global $connection;

        $sql = "INSERT INTO user_ip (User, Password) VALUES (:ip, :pass)";

        $stmt = $connection->prepare($sql);

        $stmt->execute(["ip"=>$ip , "pass"=>$password]);

        return $connection->lastInsertId();
    }
}