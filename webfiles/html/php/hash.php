<?php

function encrypt($password)
{
   return hash('sha512', $password);
}


function create_salt()
{
    $salt = '';
    for ($i = 0; $i < 8; $i++)
    {
        $case = rand(0,1);
        if ($case == 0)
            $number = rand(65,90);
        else
            $number = rand(97,122);
        $salt .= chr($number);
    }    
    return $salt;
   
}

function create_password($password, $salt)
{
    $password .= $salt;
    return encrypt($password);
}

function compare($salt, $password, $hashword)
{
    $password .= $salt;
    $password = encrypt($password);
    if ($password == $hashword)
        return true;
    else
        return false;
}


?>


