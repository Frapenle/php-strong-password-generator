<?php
//funzione per generare una password random

function generatePassword($length_pass, $check_uppercase, $check_lowercase, $check_numbers, $check_symbols)
{
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()_+-=[]{}|;':\"<>,.?/\\";
    //Aggiungo una variabile per i parametri selezionati
    $selected_params = "";
    if ($check_uppercase) {
        $selected_params .= $uppercase;
    }
    if ($check_lowercase) {
        $selected_params .= $lowercase;
    }
    if ($check_numbers) {
        $selected_params .= $numbers;
    }
    if ($check_symbols) {
        $selected_params .= $symbols;
    }
    $password = "";
    //ciclo for per prendere almeno un carattere da ogni parametro
    for ($i = 0; $i < $length_pass; $i++) {
        $random = rand(0, strlen($selected_params) - 1);
        $password .= $selected_params[$random];
    }
    return $password;
}
