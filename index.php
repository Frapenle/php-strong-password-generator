<?php
session_start();
require_once __DIR__ . '/partials/functions.php';

//controllo se l'input è dichiarato ed è diverso da null con isset
if (isset($_GET['password-length'])) {
    //aggiungo un ulteriore controllo per determinare che la pass sia lunga min 6 e max 20 caratteri
    if ($_GET['password-length'] > 5 && $_GET['password-length'] < 21) {
        $password_length = trim($_GET['password-length']);
        $use_uppercase = isset($_GET['uppercase-check']);
        $use_lowercase = isset($_GET['lowercase-check']);
        $use_numbers = isset($_GET['numbers-check']);
        $use_symbols = isset($_GET['symbols-check']);

        $_SESSION['password'] = generatePassword($password_length, $use_uppercase, $use_lowercase, $use_numbers, $use_symbols);
        header("Location: ./result.php");
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <!-- Bootstrap CDN 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class="mb-3">
        <h1 class="text-center">Random password generator</h1>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="./index.php" method="GET" class="d-flex box mb-1 justify-content-between">
                    <div class="form-wrapper ">
                        <div class="w-100">
                            <label for="password-length" class="form-label">Scegli la lunghezza della password</label>
                            <input type="text" class="form-control" name="password-length" id="password-length" placeholder="Inserisci un numero da 6 a 20" min="6" max="20">
                            <p class="my-info">Se non viene selezionato nessun campo viene generata una password casuale</p>
                            <div class="checkbox mt-1">
                                <input class="form-check-input" type="checkbox" value="" id="uppercase-check" name="uppercase-check">
                                <label class="form-check-label me-4" for="uppercase-check">Uppercase</label>
                                <input class="form-check-input" type="checkbox" value="" id="lowercase-check" name="lowercase-check">
                                <label class="form-check-label me-4" for="lowercase-check">Lowercase</label>
                                <input class="form-check-input" type="checkbox" value="" id="numbers-check" name="numbers-check">
                                <label class="form-check-label me-4" for="numbers-check">Numbers</label>
                                <input class="form-check-input" type="checkbox" value="" id="symbols-check" name="symbols-check">
                                <label class="form-check-label me-4" for="symbols-check">Symbols</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success w-25 ms-2" type="submit">Invia</button>
                </form>


            </div>
        </div>
    </div>
</body>

</html>