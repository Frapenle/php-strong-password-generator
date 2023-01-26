<?php
//funzione per generare una password random
function generatePassword($length_pass)
{
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()_+-=[]{}|;':\"<>,.?/\\";
    $all_params = $uppercase . $lowercase . $numbers . $symbols;
    $password = "";
    //ciclo for per prendere almeno un carattere da ogni parametro
    for ($i = 0; $i < $length_pass; $i++) {
        $random = rand(0, strlen($all_params) - 1);
        $password .= $all_params[$random];
    }
    return $password;
}
