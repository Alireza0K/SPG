<?php

const page_home = "Home Page";

function Generate_password($processor){
    // Get All input
    $password_digits = !isset($_POST["password_digits"]) ? 3 : $_POST["password_digits"];
    // Those are Abilities
    $alphabet = !isset($_POST["Alphabet"]) ? null : $_POST["Alphabet"] ;  
    $object = !isset($_POST["Object"]) ? null : $_POST["Object"];
    $number = !isset($_POST["Number"]) ? null : $_POST["Number"];  
    // Concat and explode
    $ability = $alphabet ."+". $object ."+". $number;
    // Push all information for process
    if(is_callable($processor)){
        $all_informaition = (object) array(
            "Password_digits" => (object)["Number"=>$password_digits],
            "Abilitys" => (object)["Ability"=>$ability]
        );
        call_user_func($processor, $all_informaition);
    }else{
        echo "It's not callable :(";
    }
}
function Process_password($Stuffs){
    $password_digits = $Stuffs->Password_digits->Number;
    $abilities = $Stuffs->Abilitys->Ability;
    
}
Generate_password("Process_password");