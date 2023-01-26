<?php
session_start();
include_once $path = __DIR__ . '/partials/functions.php';

//controllo se l'input è dichiarato ed è diverso da null con isset
if (isset($_GET['password-length'])) {
    //aggiungo un ulteriore controllo per determinare che la pass sia lunga min 6 e max 20 caratteri
    if ($_GET['password-length'] > 5 && $_GET['password-length'] < 21) {
        $password_length = trim($_GET['password-length']);
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
</head>

<body>
    <div class="container">
        <form action="./index.php" method="GET" class="d-flex align-items-end mb-3">
            <div class="w-50">
                <label for="password-length" class="form-label">Scegli la lunghezza della password</label>
                <input type="text" class="form-control" name="password-length" id="password-length" placeholder="Inserisci un numero da 6 a 20" min="6" max="20">
            </div>
            <button class="btn btn-success ms-2" type="submit">Invia</button>
        </form>

        <p><?php $temp = generatePassword($password_length);
            // Converto i caratteri speciali in HTML entities per evitare problemi di visualizzazione in HTML
            echo htmlspecialchars($temp); ?></p>
    </div>

</body>

</html>