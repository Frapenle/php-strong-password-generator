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
    if (isset($_GET['password-length'])) {
        if ($_GET['password-length'] > 5 && $_GET['password-length'] < 21) {
            $password_length = $_GET['password-length'];
        }
    };

    function generatePassword($length_pass)
    {
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lowercase = "abcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $symbols = "!@#$%^&*()_+-=[]{}|;':\"<>,.?/\\";
        $all_params = $uppercase . $lowercase . $numbers . $symbols;
        $password = "";
        for ($i = 0; $i < $length_pass; $i++) {
            $random = rand(0, strlen($all_params) - 1);
            $password .= $all_params[$random];
        }
        return "<p>{$password}</p>";
    }
    ?>
    <div class="container">
        <form action="./index.php" method="GET">
            <div class="mb-3 w-50">
                <label for="password-length" class="form-label">Scegli la lunghezza della password</label>
                <input type="text" class="form-control" name="password-length" id="password-length" placeholder="Inserisci un numero da 6 a 20" min="6" max="20">
                <button type="submit">Invia</button>
            </div>
        </form>

        <p><?php echo generatePassword($password_length) ?></p>
    </div>

</body>

</html>