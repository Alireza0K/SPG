<?php

use App\Utilities\ShowAndDie;

function View($path)
{
    $fakePathToRealPath = "View/" . str_replace("-","/",$path) . ".php";

    if(!file_exists($fakePathToRealPath)){
        ShowAndDie::ShowAfterDie("Path Dosen't Exist");
    }

    require $fakePathToRealPath;
}