<!----- SEZIONE LOGICA ----->
<?php
function passwordGenerator($length)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $caratteri[random_int(0, strlen($caratteri) - 1)];
    }
    return $password;
}

if (isset($_GET['pass_len'])) {
    $max_len = $_GET['pass_len'];
}
?>


<!------ INIZIO HTML ------>
<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <title>PHP Strong Password Generator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .flex-column-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        body {
            height: 100vh;
        }

        input {
            width: 50px;
            outline: none;
        }

        button {
            background-color: lightgrey;
            border: 0px;
            border-radius: 10px;
            margin-top: 2em;
            padding: 5px;
            transition: 0.2s ease;
        }

        button:hover {
            background-color: grey;
            color: white;
            transition: 0.2s ease;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body class="bg-dark text-white flex-column-center">
    <div class="container flex-column-center">
        <h1 class="pb-3">Strong Password Generator</h1>
        <form action="" method="GET" class="flex-column-center">
            <div>
                <label for="pass_len">Lunghezza password: </label>
                <input type="number" name="pass_len" id="pass_len">
            </div>
            <div>
                <button type="submit">Genera</button>
                <button type="reset">
                    <a href="http://localhost:8888/-php-proj/php-strong-password-generator">Reset</a>
                </button>
            </div>
        </form>

        <?php if (isset($max_len)) {
            echo passwordGenerator($max_len);
        } ?>
    </div>
</body>

</html>