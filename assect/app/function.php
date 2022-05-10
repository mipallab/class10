<?php

/**
 * Alert Massage Show 
 */
function alertMsg($mssage, $type = 'danger') {
   return "<p class = \"alert alert-{$type}\"> {$mssage} 
            <button class= \"close\" type= \"button\" data-dismiss= \"alert\"> 
                    <span>&times;</span>
                </button>
            </p>";
}

/**
 * Email validate
 */

function emailValid($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}

function old($key) {
    return $_POST[$key] ?? '';
}


/**
 * currency converter
 */
function convert($ammount, $currency) {

    // Conditation converter logic
    $rate = 0;
    switch ($currency) {
        case 'USD':
            $rate = 86.12;
            break;

        case 'CAD':
            $rate = 67.59;
            break;
        
        case 'POUND':
            $rate = 112.77;
            break;
        
        case 'EURO':
            $rate = 94.66;
            break;

        case 'WON':
            $rate = 0.070;
            break;
    }

   $bdt =  $ammount * $rate;
   return "{$ammount} {$currency} = {$bdt} BDT";
}
 

/**
 * Marrage Age
 */

function adultAge($name, $age, $gender) {

    if($gender == 'male') {
        if ($age < 0 XOR $age > 180) {
            return "Assalamualikum... {$name} Sir,,, You give an \"{$age}\" <b>INVALID AGE!</b>";
        }
        else if ($age >= 0 && $age < 21) {
            return "Assalamualikum... {$name} Sir,,, You are not ok to marrage! You have to wait <b>". (21 - $age). " years</b>";
        }
        else {
            return "Assalamualikum...{$name } Sir,,, You are ok to marrage!";
        }
        
    }else {
        if ($age < 0 XOR $age > 180) {
            return "Assalamualikum... {$name} Mam,,, You give an \"{$age}\" <b>INVALID AGE!</b>";
        }
        else if ($age >= 0 && $age < 18) {
            return "Assalamualikum... {$name} Mam,,, You are not ok to marrage! You have to wait <b> ". (18 - $age). " years </b>";
        }
        else {
            return "Assalamualikum...{$name } Mam,,, You are ok to marrage!";
        }
    }
    

    

}