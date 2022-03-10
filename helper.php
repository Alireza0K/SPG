<?php

const page_home = "Home Page";

function Generate_password($processor){
    // if is Secure Get All Data and Process
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Get All input
        $password_digits = !isset($_POST["password_digits"]) ? 3 : $_POST["password_digits"];
        // Those are Abilities
        $alphabet = !isset($_POST["Alphabet"]) ? null : $_POST["Alphabet"] ;  
        $object = !isset($_POST["Object"]) ? null : $_POST["Object"];
        $number = !isset($_POST["Number"]) ? null : $_POST["Number"];  
        // Push in to the Globals
        $GLOBALS["password_digits"] = $password_digits;
        $GLOBALS["alphabet"] = $alphabet;
        $GLOBALS["object"] = $object;
        $GLOBALS["number"] = $number;
        // Concat and explode
        $ability = $alphabet ."+". $object ."+". $number;
        // Push all information for process
        if(is_callable($processor)){
            $all_informaition = (object) array(
                "Information" => (object)[
                    "Password_digits" => $password_digits,
                    "Abilities" => $ability
                ]
            );
            call_user_func($processor, $all_informaition);
        }else{
            echo "It's not callable :(";
        }
    }
}
function Process_password($Stuffs){
    $password = "";
    //  Definition
    $alphabet = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";
    $objects = "!@#$%^&*()_+=-;:'?>/.<,";
    $number = "1234567890";
    // Convert array to string for continue
    $password_digits = $Stuffs->Information->Password_digits;
    $abilities = $Stuffs->Information->Abilities;
    //Switch for Better
    switch ($abilities) {
        case "Alphabet+Object+Number":
            $this_case = $alphabet . $objects . $number;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet++Number":
            $this_case = $alphabet . $number;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet+Object+":
            $this_case = $alphabet . $objects ;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet++":
            $this_case = $alphabet ;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "+Object+Number":
            $this_case = $objects . $number;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "++Number":
            $this_case = $number;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "+Object+":
            $this_case = $objects;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
    }
    $GLOBALS["Password"] = $password;
}
Generate_password("Process_password");