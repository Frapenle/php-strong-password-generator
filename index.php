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
    <?php
    $password_length = isset($_GET['password-length']) ? $_GET['password-length'] : 'Nessun valore inserito';

    ?>
    <div class="container">
        <form action="./index.php" method="GET">
            <div class="mb-3 w-50">
                <label for="password-length" class="form-label">Scegli la lunghezza della password</label>
                <input type="text" class="form-control" name="password-length" id="password-length" placeholder="Inserisci un numero da 6 a 20">
                <button type="submit">Invia</button>
            </div>
            <?php
            var_dump($password_length);

            ?>
        </form>
    </div>

</body>

</html>