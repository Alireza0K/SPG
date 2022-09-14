<?php

namespace App\Utilities;

class ShowAndDie
{
    public static function ShowAfterDie($message)
    {
        header("HTTP/1.0 404 Not Found");
        echo "<div style='color: black;width: 50%;margin: 0px auto;text-align: center;font-size: larger;font-family: sans-serif;padding: 10px 30px;border: 1px solid #ff5b5b;border-radius: 10px;background: #ffe4e4;'>
            <h5>Path Dosen't Exist</h5>
        </div>";

        die;
    }
}