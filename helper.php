<?php

const page_home = "Home Page";

function Generate_password($processor){
    // if is Secure Get All Data and Process
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Get All input
        $password_digits = !isset($_POST["password_digits"]) ? 3 : $_POST["password_digits"];
        // Those are Abilities
        $alphabet = !isset($_POST["Alphabet"]) ? null : $_POST["Alphabet"] ;  
        $alphabet_small = !isset($_POST["Alphabet-Small"]) ? null : $_POST["Alphabet-Small"] ;  
        $object = !isset($_POST["Object"]) ? null : $_POST["Object"];
        $object_2 = !isset($_POST["Object-2"]) ? null : $_POST["Object-2"];
        $number = !isset($_POST["Number"]) ? null : $_POST["Number"];  
        // Push in to the Globals
        $GLOBALS["password_digits"] = $password_digits;
        $GLOBALS["alphabet"] = $alphabet;
        $GLOBALS["alphabet_small"] = $alphabet_small;
        $GLOBALS["object"] = $object;
        $GLOBALS["object_2"] = $object_2;
        $GLOBALS["number"] = $number;
        // Concat and explode
        $ability = $alphabet ."+". $object ."+". $number ."+". $alphabet_small ."+". $object_2;
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
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $alphabet_small = "abcdefghijklmnopqrstuvwxyz";
    $objects = "!@#$%^&*_+=-;:'?.,";
    $objects_2 = "{}[]()<>|/";
    $number = "1234567890";
    // Convert array to string for continue
    $password_digits = $Stuffs->Information->Password_digits;
    $abilities = $Stuffs->Information->Abilities;
    //Switch for Better
    switch ($abilities) {
        case "Alphabet+Object+Number+Alphabet-Small+Object-2":
            $this_case = $alphabet . $objects . $number . $alphabet_small . $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet+Object+Number++":
            $this_case = $alphabet_small . $objects . $number ;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet++Number+Alphabet-Small+Object-2":
            $this_case = $alphabet . $number . $alphabet_small . $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet+Object++Alphabet-Small+Object-2":
            $this_case = $alphabet . $objects . $alphabet_small . $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet++++":
            $this_case = $alphabet ;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "+++Alphabet-Small+":
            $this_case = $alphabet_small ;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet++Number++":
            $this_case = $alphabet_small . $number ;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "++Number+Alphabet-Small+Object-2":
            $this_case = $alphabet_small . $number  . $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "+Object+Number+Alphabet-Small+Object-2":
            $this_case = $objects . $alphabet_small . $number  . $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "+Object+Number++":
            $this_case = $objects . $number;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "++Number++Object-2":
            $this_case = $objects_2 . $number;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "++Number++":
            $this_case = $number;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "+Object+++":
            $this_case = $objects;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "++++Object-2":
            $this_case = $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "+++Alphabet-Small+Object-2":
            $this_case = $alphabet_small . $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet+Object+++":
            $this_case = $alphabet_small . $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "++Number+Alphabet-Small+":
            $this_case = $alphabet . $number;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet++Number+Alphabet-Small+":
            $this_case = $alphabet .  $number . $alphabet_small ;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet++++Object-2":
            $this_case = $alphabet_small . $objects_2;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
        case "Alphabet+++Alphabet-Small+":
            $this_case = $alphabet_small . $alphabet;
            $count_how_many = strlen($this_case);
            for($nop = 0 ; $nop <= $password_digits ; $nop++){
                $password  .= $this_case[rand(0,$count_how_many)-1];
            }
            break;
    }
    $GLOBALS["Password"] = $password;
}
Generate_password("Process_password");