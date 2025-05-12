<?php
$age=15;

switch($age){
    case ($age >= 0 && $age < 18):
        echo "you are a minor (0-18 years old) <br";
        break;
        case ($age >= 0 && $age <= 25):
            echo "you are a young adult <br";
            break;
            break;
            case ($age >= 0 && $age < 18):
                echo "you are an adult <br";
                break;
                default:
                echo "invalid age input <br>";
                break;

                
            
    }

?>